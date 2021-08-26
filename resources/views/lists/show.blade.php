@extends('layouts.app')

@section('content')
<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show">
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
    <div class="row justify-content-center">
        <div class="col-md">
            <x-card action="create" type="list"></x-card> {{-- TODO :title --}}
        </div>
    </div>
    {{-- Selected list tasks --}}
    <div class="row mt-5 justify-content-center">
        <div class="col">
            <x-task-card title="Taskname" status="1" dueDate="10-07-2021"></x-task-card>
        </div>
    </div>
</div>
@endsection
