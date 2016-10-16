@extends('layout.default')

@section('content')

 <h1 style="text-align: center; color: red">TODO</h1>
 <p style="color: #2ab27b"><b>{{$test}}</b></p>

 {!! Form::open(['route' => 'task.store', 'method' => 'post']) !!}
 {!! Form::label('title') !!}
 {!! Form::text('title', null, [
 'required',
 'type' => 'text',
 'class' => 'form-control'
 ]) !!}
 {!! Form::label('description') !!}
 {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

 {!! Form::submit('New Task') !!}
 {!! Form::close() !!}

@stop