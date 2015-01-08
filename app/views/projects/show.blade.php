@extends('layouts.main')
@section('content')
<div class="row">
	<h2 class="">{{ $project->name }}</h2>
	
	<div class="project-img">
	@if ($project->img == true)
		<img src="/img/projects/{{ $project->img }}" alt="{{ $project->name }}">
	@endif
	</div>
	{{ HTML::link('//' . $project->url, $project->url)}}
	<p>{{ $project->description }}</p>
	{{ HTML::link('//' . $project->github, $project->github)}}
</div>
@stop