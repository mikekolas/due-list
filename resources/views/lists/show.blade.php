@extends('layouts.app')

@section('content')
<div class="container">
    @if (session()->has('message') && session()->has('type'))
        <div class="alert alert-{{ session()->get('type') }} alert-dismissible fade show">
            <ul>
                <li>{{ session()->get('message') }}</li>
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-xl-3 col-lg-6">
            <x-cardWidget >

            </x-cardWidget>
        </div>
        <div class="col-xl-3 col-lg-6">
            <x-cardWidget >

            </x-cardWidget>
        </div>
    </div>
    <div class="row mb-5 justify-content-center">
        <div class="col-md">
            <x-card action="create" type="task" :object="$toDoList"></x-card> {{-- TODO :title --}}
        </div>
    </div>
    {{-- Selected list tasks --}}
    @foreach ($tasks as $task)
        <div class="row mt-3 justify-content-center">
            <div class="col">
                <x-task-card :title="$task->title" :status="$task->status" :taskID="$task->id" :dueDate="$task->dueDate"></x-task-card>
            </div>
        </div>
    @endforeach
</div>
@endsection
