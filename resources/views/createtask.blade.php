@extends('master')

@section('title', 'Editor de projecte')

@section('content')
<form action="/task" method="POST" id="task-data">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="">Project ID</label>
                <input type="number" class="form-control" id="inpt-proj" name="project_id">
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="inpt-name" name="name">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="inpt-desc" name="description">
            </div>
            <div class="form-group">
                <label for="">Completed</label>
                <input type="number" class="form-control" id="inpt-desc" name="completed">
            </div>
        </div>
    </div>
    <button class="btn btn-success" type="submit" form="task-data">Create</button>
</form>
@endsection