
@extends('layouts.dashboard')
@section('title', '')
@section('content')
    <h2>Projects</h2>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="dashboard">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Description</td>
            <td>Image Location</td>
            <!-- <td>Url</td> -->
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($projects as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ str_limit($value->description, $limit = 50, $end = '...') }}</td> 
            <td>{{ $value->img }}</td>
            <!-- <td>{{ $value->url }}</td> -->

            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <!-- show the project (uses the show method found at GET /projects/{id} -->
                <a href="{{ URL::to('userpanel/dashboard/' . $value->id) }}">{{ Form::button('Show') }}</a>

                <!-- edit this project (uses the edit method found at GET /projects/{id}/edit -->
                <a href="{{ URL::to('userpanel/dashboard/' . $value->id . '/edit') }}">{{ Form::button('Edit') }}</a>

                <!-- delete the project (uses the destroy method DESTROY /projects/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'userpanel/dashboard/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn delete')) }}
                {{ Form::close() }}

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@stop