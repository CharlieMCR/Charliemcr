@extends('layouts.main')
@section('title', 'About')
@section('view', $viewName)

@section('content')
	<div class="row skill-row flex">
		{{-- $title --}}
		{{-- studly_case($viewName) --}}
		<h2>Charlie Mcr</h2>
		<p>Hello, I am a Web Developer in Manchester. I am constantly developing my skill set, looking to learn new frameworks, improving workflows and design patterns.</p>
		<p>I would like to put these skills to use in a role that challenges me and allows me to further develop my skill set. </p>
	</div>
	<div class="row skill-row flex">
		<h2>Skills</h2>
		<ul>
	        <li>HTML5</li>
	        <li>CSS3</li>
	        <li>Javascript</li>
	        <li>PHP</li>
	        <li>MySQL</li>
	    </ul>
	    <ul>
	    	<li>JQuery</li>
	    	<li>Wordpress</li>
	    	<li>Laravel</li>
	    </ul>
    </div>
	<div class="row skill-row flex">
		<h2>Workflow</h2>
		<ul>
	        <li>Text Editor - Sublime Text</li>
	        <li>CSS Pre-processor - Sass</li>
	        <li>Version control - Git</li>
	        <li>Linux - Bash</li>
	    </ul>
    </div>
@stop