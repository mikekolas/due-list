<div class="crd">
    {{-- <div class="c-header">{{ $title }}</div> --}}
    <div class="c-body">
        <form method="POST" action="{{ route('lists.store') }}">
            @csrf
            <div class="row px-3">
                <div class="col">
                    <label for="title">{{ __('Title*') }}</label>
                    <input id="title" class="form-control" type="text" required>
                </div>
                @if (Route::has('tasks')) <!-- to be done tasks -->
                    <div class="col">
                        <label for="due-date">{{ __('Due date') }}</label>
                        <input id="due-date" class="form-control" type="date">
                    </div>
                @endif
            </div>
            <div class="row px-3 mt-3">
                <div class="col">
                    <button type="submit" class="dl-btn">
                       {{ $action == 'create'  ? 'Create new ' : 'Edit '}}  {{ $type }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>