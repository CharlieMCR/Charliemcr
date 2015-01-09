
@extends('layouts.front')
@section('title', '')
@section('content')
	<div class="front flex">
		<div class="front-inner">
			<h2>Hi, I'm Charlie</h2>
			<h3>A Web Developer in Manchester</h3>
			<p>This is my Portfolio, Curriculum vitae and other snippets showcasing my work.</p>
		</div>
			<div class="down"><span class="chevron"></span></div>
	</div>
	<div class="wrapper">
		<div class="row flex">
			@include('projects.project_list')
		</div>
@stop
