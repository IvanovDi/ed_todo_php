@extends('layout.default')

@section('content')

    <h1 style="color: #1f648b; text-align: center">TODO</h1>

    <h2 style="color: #2a88bd; text-align: center;">{{$auth->name}}</h2>
    <h2 style="color: #2a88bd; text-align: center;">{{$auth->email}}</h2>

    <p style="color: #2ab27b"><b>{{$test}}</b></p>

    {!! Form::open(['route' => 'task.create', 'method' => 'get', 'class' => 'btn']) !!}
        {!! Form::submit('Create New Task') !!}
    {!! Form::close() !!}

    @foreach($tasks as $task)
        <p><a href="{{route('task.show', $task)}}">{{$task->title}}</a></p>
    @endforeach
    {!! $tasks->render() !!}
@stop