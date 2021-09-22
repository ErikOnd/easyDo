@extends('layout.layout')
@section('content')
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <h3 class="text-center text-primary">New Task</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('create.task') }}">
                            @csrf
                            <div class="d-flex justify-content-center">
                                <div class="col-auto mx-auto">
                                    <input type="text" id="newTask" class="form-control" placeholder="New Task">
                                </div>
                                <div class="col-auto">
                                 <span id="passwordHelpInline" class="form-text">
                             <input type="submit" value="Add new task" class="btn btn-outline-primary"/>
                                </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
