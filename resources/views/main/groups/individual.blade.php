@extends('main.layout')

@section('content')

	<h1> {{ $g->name }}</h1>


	<h3>Group members: </h3>
	@foreach ($users as $user)
		<li> {{$user->user->name}} {{$user->user->surname}}</li>
	@endforeach

	some data here later on :)

@stop