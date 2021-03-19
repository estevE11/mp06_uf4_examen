@extends('master')

@section('title', 'Editor de projecte')

@section('content')
<form action="/project" method="POST" id="project-data">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="inpt-name" name="name">
            </div>
        </div>
    </div>
    <button class="btn btn-success" type="submit" form="project-data">Create</button>
</form>
@endsection