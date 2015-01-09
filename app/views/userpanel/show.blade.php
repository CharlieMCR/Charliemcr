@extends('layouts.dashboard')
@section('title', '')
@section('content')
    <div class="row flex">
		<h2 class="">{{ $project->name }}</h2>
		
		<div class="project-img">
		@if ($project->img == true)
			<img src="/img/projects/{{ $project->img }}" alt="{{ $project->name }}">
		@endif
		</div>
		{{ HTML::link('//' . $project->url, $project->url)}}
		<p>{{ $project->description }}</p>
		{{ HTML::link('//' . $project->github, $project->github)}}
		<p>Rating: {{ $project->rating }}</p>
	</div>
@stop