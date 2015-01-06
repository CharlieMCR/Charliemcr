@extends('layouts.dashboard')
@section('title', '')
@section('content')

<h1>Showing {{ $project->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $project->name }}</h2>
        <p>
            <strong>Description:</strong> {{ $project->description }}<br>
            <strong>Image Location:</strong> {{ $project->img }}<br>
            <strong>Url:</strong> {{ $project->url }}
        </p>
    </div>
@stop