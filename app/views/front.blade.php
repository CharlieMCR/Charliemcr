
@extends('layouts.front')
@section('title', '')
@section('content')
	<div class="front">
	<div class="one col s4">
		<h1>Hi, I'm Charlie</h1>
		<h2>A Web Developer in Manchester</h2>
		<p>This is my Portfolio, Curriculum vitae and other snippets showcasing my work.</p>
	</div>
	</div>
	<div class="wrapper">
	@include('projects.projects')
	</div>
@stop
