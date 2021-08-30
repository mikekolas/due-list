@extends('layouts.app')

@section('content')
<div class="container">
    <div class="crd justify-content-center">
        <div class="c-body mx-4">
            <h2 class="row font-weight-bold mb-4">Welcome {{ $username }}</h2>
            <div class="row">
                <div class="col-lg px-3 mx-3">
                    <span class="row mb-3 home-completed-tasks">{{ $totalCompletedTasks }} {{ $totalCompletedTasks == 1 ? 'task' : 'tasks' }} completed</span>
                    <div class="row mb-2">
                        <div class="home-total-tasks-text">Total tasks</div>
                        <div class="home-total-tasks ml-auto">{{ $totalTasks }}</div>
                    </div>
                    <div class="row mb-2 progress prg-style">
                        <div class="progress-bar bg-success" style="width: {{ $tasksPercentage }}%" role="progressbar" aria-valuenow="{{ $tasksPercentage }}" aria-valuemin="0" aria-valuemax="{{ $totalTasks }}"></div>
                    </div>
                </div>
                <div class="col-lg px-3 mx-3">
                    <div class="row mb-3 home-completed-tasks">{{ $totalLists }} {{ $totalLists == 1 ? 'list' : 'lists' }} total</div>
                    {{-- <div class="row mb-2">
                        <div class="home-total-tasks-text">Total tasks</div>
                        <div class="home-total-tasks ml-auto">30</div>
                    </div>
                    <div class="row progress prg-style">
                        <div class="progress-bar bg-danger w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> --}}
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
