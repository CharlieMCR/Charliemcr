
@extends('layouts.front')
@section('title', '')
@section('content')
	<div class="front">
		<div class="one col s4">
			<h2>Hi, I'm Charlie</h2>
			<h3>A Web Developer in Manchester</h3>
			<p>This is my Portfolio, Curriculum vitae and other snippets showcasing my work.</p>
		</div>
	</div>
	<div class="wrapper">
		<div class="project row">
			@include('projects.project_list')
		</div>
	</div>
@stop
