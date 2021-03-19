@extends('master')

@section('title', 'Llista de projectes')

@section('content')

    <h3>{{$project->name}}</h3><br>
    <a href="/task/create">Create new task</a><br>

    <h5>Tasks: </h5>
    <ul>
        @foreach($project->tasks as $task)
            <li><a href="/task/{{$task->id}}/edit">Edit</a> | <b>{{$task->name}}:</b> {{$task->description}}</li>
        @endforeach
    </ul>



@endsection