@extends('layouts.main')
@section('title', 'Contact')

@section('content')
	<div class="contact-form row flex">
		
		<h2>Contact</h2>

		@if (Session::has('success'))
			<span>{{ Session::get('success')}}</span>
		@endif

		{{ Form::open(array('action' => 'ContactController@index'))}}

			<ul class="errors">
				@foreach ($errors->all('<li>:message</li>') as $message)
					{{ $message }}
				@endforeach
			</ul>

			{{ Form::label('name', 'Name:')}}
			{{ Form::text('name')}}

			{{ Form::label('email', 'Email:')}}
			{{ Form::email('email')}}

			{{ Form::label('message', 'Message:')}}
			{{ Form::textarea('message')}}

			<div class="hide">
			{{ Form::label('address', 'Address:', array('class' => 'address-form'))}}
			{{ Form::textarea('address', '', array('class' => 'address-form'))}}
			</div>

			{{ Form::submit('Send')}}

		{{ Form::close() }}

	</div>
@stop