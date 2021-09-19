@extends('layout.layout')
@section('content')

    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <h3 class="text-center text-primary">Tasks</h3>
                    <div class="card-body">
                        @foreach($tasks as $task)
                            <li class="list-group-item">{{$task->task}}</li>
                        @endforeach
                    </div>
                    <div class="d-grid mx-auto">
                        <button type="button" class="btn btn-outline-primary">Add New Task</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
