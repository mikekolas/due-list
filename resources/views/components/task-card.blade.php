{{-- t-crd stands for task card --}}
<div class="t-crd py-3 px-5">
    <div class="row d-flex align-items-center">
        <div class="font-weight-bold">{{ $title }}</div>
        <div class="t-crd-due-date ml-5">{{ $dueDate }}</div>
        <div class="t-crd-actions ml-auto">
            <a href="{{-- route('tasks.update') --}}" id="t-crd-complete" class="px-1">
                <i class="bi bi-check-square-fill"></i>
            </a>
            <a href="{{-- route('tasks.show') --}}" id="t-crd-edit" class="px-1">
                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="{{-- route('tasks.destroy') --}}" id="t-crd-delete" class="px-1">
                <i class="bi bi-x-square-fill"></i>
            </a>
        </div>
    </div>
    {{-- <form method="POST" action="{{ route('lists.store') }}">
        @csrf
        <div class="row px-3">
            <div class="col">
                <label for="title">{{ __('Title*') }}</label>
                <input id="title" class="form-control" type="text" required>
            </div>
        </div>
    </form> --}}
</div>