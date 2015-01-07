@extends('layouts.main')
@section('content')
<div class="row">
	<h2 class="">{{ $project->name }}</h2>
	{{ HTML::link('//' . $project->url, $project->url)}}
	<div class="project-img">
	@if ($project->img == true)
		<img src="/img/projects/{{ $project->img }}" alt="">
	@endif
	</div>
	<p>{{ $project->description }}</p>
</div>
@stop