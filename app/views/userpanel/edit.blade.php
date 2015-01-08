@extends('layouts.dashboard')
@section('title', '')
@section('content')

<h2>Edit {{ $project->name }}</h2>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}
<div class="row dashboard contact-form">
{{ Form::model($project, array('route' => array('userpanel.dashboard.update', $project->id), 'method' => 'PUT', 'files'=>true )) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('url', 'URL') }}
        {{ Form::text('url', Input::old('url'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('github', 'Github') }}
        {{ Form::text('github', Input::old('github'), array('class' => 'form-control')) }}
    </div>

    <div>
        Existing file name: {{ $project->img }}
    </div>
    <div class="form-group">
        {{ Form::label('removeImage', 'Delete existing image') }}
        {{ Form::checkbox('removeImage') }}
    </div>
    <div class="form-group">
        {{ Form::label('file', 'File') }}
        {{ Form::file('file')}}
    </div>
    {{ Form::selectRange('rating', 1, 5, Input::old('rating')); }}

    {{ Form::submit('Update the Project!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
</div>
@stop