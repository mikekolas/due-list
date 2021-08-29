{{-- t-crd stands for task card --}}
<div class="t-crd py-3 px-5">
    <div class="row d-flex align-items-center">
        <div class=" {{ $status ? 'task-completed' : '' }}">
            <div class=" font-weight-bold task">{{ $title }}</div>
        </div>
        <div class="flex-grow-1"></div>
        <div class="t-crd-due-date mr-5 t-crd-due-date-{{ today()->format('Y-m-d') > $dueDate ? 'overdue' : 'timely' }}">{{ $dueDate }}</div>
        <div class="t-crd-actions ml-auto">
            <a href="{{ route('tasks.updateStatus', $taskID) }}" id="t-crd-complete" class="px-1 {{ $status ? 't-completed' : '' }}">
                <i class="bi bi-check-square-fill"></i>
            </a>
            <a href="{{ route('tasks.edit', $taskID) }}" class="px-1 t-crd-edit">
                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="" class="px-1 t-crd-delete" data-toggle="modal" data-target="#deleteModal" data-title="{{ $title }}" data-id="{{ $taskID }}" data-type="task">
                <i class="bi bi-x-square-fill"></i>
            </a>
        </div>
    </div>
</div>