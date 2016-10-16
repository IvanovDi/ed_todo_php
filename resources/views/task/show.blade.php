@extends('layout.default')

@section('content')
    <h1 style="color: #2ab27b; text-align: center;">Task</h1>
    <h2>{{$task->title}}</h2>
    <p>{{$task->description}}</p>
@stop