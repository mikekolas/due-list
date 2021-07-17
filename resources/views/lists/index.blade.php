@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-6">
            <x-cardWidget >

            </x-cardWidget>
        </div>
        <div class="col-xl-3 col-lg-6">
            <x-cardWidget >

            </x-cardWidget>
        </div>
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
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> --}}
    </div>
    {{-- Selected list tasks --}}
    <div class="row mt-5 justify-content-center">
        <div class="col">
            <x-task-card title="Taskname" status="1" dueDate="10-07-2021"></x-task-card>
        </div>
    </div>
</div>
@endsection
