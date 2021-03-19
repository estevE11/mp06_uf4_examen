@extends('master')

@section('title', 'Editor de projecte')

@section('content')
<form action="/project/{{$project->id}}" method="POST" id="project-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="inpt-name" name="name" value="{{$project->name}}">
            </div>
        </div>
    </div>
    <button class="btn btn-success" type="submit" form="project-data">Edit</button>
</form>
@endsection