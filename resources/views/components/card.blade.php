<div class="crd">
    {{-- <div class="c-header">{{ $title }}</div> --}}
    <div class="c-body">
    @if($type == 'list')
        <form method="POST" action="{{ $action == 'create' ? route('lists.store') : route('lists.update', $object->id)}}">
    @elseif ($type == 'task')
        <form method="POST" action="{{ $action == 'create' ? route('tasks.store') : route('tasks.update', $object->id)}}">
    @endif
            @csrf
            @if ($action == 'edit')
                @method('PATCH')    
            @endif
            <div class="row px-3">
                <div class="col">
                    <label for="title">{{ __('Title*') }}</label>
                    <input id="title" name="title" class="form-control" type="text" value="{{ Request::is('lists/*/edit') ? $object->title : ''}}" required>
                </div>
                @if (Route::is('lists.show'))
                    <div class="col">
                        <label for="due-date">{{ __('Due date') }}</label>
                        <input id="due-date" name="dueDate" class="form-control" type="date">
                    </div>
                    <input id="listID" name="listID" value="{{ $object->id }}" type="hidden">
                @endif
            </div>
            <div class="row px-3 mt-3">
                <div class="col">
                    <button type="submit" class="dl-btn">
                       {{ $action == 'create'  ? 'Create new ' : 'Update '}}  {{ $type }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>