@extends('master')

@section('title', 'Editor de projecte')

@section('content')
<form action="/task/{{$task->id}}" method="POST" id="task-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="">Project ID</label>
                <input type="number" class="form-control" id="inpt-proj" name="project_id" value="{{$task->project_id}}">
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="inpt-name" name="name" value="{{$task->name}}">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="inpt-desc" name="description" value="{{$task->description}}">
            </div>
            <div class="form-group">
                <label for="">Completed</label>
                <input type="number" class="form-control" id="inpt-desc" name="completed" value="{{$task->completed}}">
            </div>
        </div>
    </div>
    <button class="btn btn-success" type="submit" form="task-data">Edit</button>
</form>
@endsection