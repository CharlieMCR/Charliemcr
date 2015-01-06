@extends('layouts.main')
@section('title', 'Projects')

@section('content')
	@foreach($projects as $key => $value)
            <div class="row project-row">
	            <h2 class="">{{ $value->name }}</h2>
				<div class="project-img">
				@if ($value->img == true)
					<img src="/img/projects/{{ $value->img }}" alt="">
				@endif
				</div>
				<p>{{ $value->description }}</p>
            </div>
    @endforeach
@stop