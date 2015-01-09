@extends('layouts.main')
@section('title', 'Projects')

@section('content')
	@foreach($projects as $key => $value)
            <div class="row project-row flex">
	            <h2 class="">{{link_to_route('projects.show', $value->name, $value->name)}}</h2>
				<div class="project-img">
					@if ($value->img == true)
					<a href="{{route('projects.show', $value->name)}}"><img src="/img/projects/{{ $value->img }}" alt="{{ $value->img }}"></a>
	 				@endif
				</div>
				<p>{{ $value->description }}</p>
				{{ HTML::link('//' . $value->url, $value->url, array('class' => 'project-link'))}}
            </div>
    @endforeach
@stop