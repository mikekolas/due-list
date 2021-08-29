@extends('layouts.app')

@section('content')
<div class="container">
    <div class="crd justify-content-center">
        <div class="c-body mx-4">
            <h2 class="row font-weight-bold mb-4">Welcome {{ $username }}</h2>
            <div class="row">
                <div class="col pr-5">
                    <span class="row mb-3 home-completed-tasks">{{ $totalCompletedTasks }} tasks completed</span>
                    <div class="row mb-2">
                        <div class="home-total-tasks-text">Total tasks</div>
                        <div class="home-total-tasks ml-auto">{{ $totalTasks }}</div>
                    </div>
                    <div class="row progress prg-style">
                        <div class="progress-bar bg-success" style="width: {{ round($totalCompletedTasks / $totalTasks, 2) * 100 }}%" role="progressbar" aria-valuenow="{{ $totalCompletedTasks }}" aria-valuemin="0" aria-valuemax="{{ $totalTasks }}"></div>
                    </div>
                </div>
                <div class="col pl-5">
                    <span class="row mb-3 home-completed-tasks">7 tasks overdue</span>
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
