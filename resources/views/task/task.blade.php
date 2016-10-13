@extends('layout.default')

@section('content')
    @foreach($tasks as $task)
        <h2>{{$task->title}}</h2>
        <p>{{$task->description}}</p>
    @endforeach
@stop