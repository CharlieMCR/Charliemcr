@extends('layouts.dashboard')
@section('title', '')
@section('content')


<h2>Create a Project</h2>

<!-- if there are creation errors, they will show here -->
<div>{{ HTML::ul($errors->all()) }}</div>

<div class="row dashboard contact-form">
{{ Form::open(array('url' => 'userpanel/dashboard', 'files'=>true)) }}

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
        {{ Form::label('file', 'File') }}
        {{ Form::file('file')}}
    </div>
    {{ Form::selectRange('rating', 1, 5, Input::old('rating')); }}

    {{ Form::submit('Create the Project!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
</div>

@stop