@extends('layouts.dashboard')
@section('title', '')
@section('content')


<h1>Create a Project</h1>

<!-- if there are creation errors, they will show here -->
<div>{{ HTML::ul($errors->all()) }}</div>

{{ Form::open(array('url' => 'userpanel/dashboard', 'files'=>true)) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>
    <div>
        {{ Form::label('file', 'File') }}
        {{ Form::file('file')}}
    </div>

    {{ Form::submit('Create the Project!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@stop