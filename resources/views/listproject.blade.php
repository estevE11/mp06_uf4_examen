@extends('master')

@section('title', 'Llista de projectes')

@section('content')

    <a href="/project/create">Create new project</a><br>
    @foreach($projects as $project)
        <a href="/project/{{$project->id}}">{{$project->name}}</a> | <a href="/project/{{$project->id}}/edit">edit</a>
        <form action="/project/{{$project->id}}" method="POST" id="delete-data">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mr-4" type="submit" form="delete-data">
                delete
            </button>
        </form>
        <br>
    @endforeach
@endsection