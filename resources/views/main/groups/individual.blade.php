@extends('main.layout')

@section('content')

	<h1> {{ $g->name }}</h1>


	<h3>Group members: </h3>
	@foreach ($users as $user)
		<li> <a href="{{ url('users/' . $user->user->slug) }}">{{$user->user->name}} {{$user->user->surname}} </a></li>
	@endforeach

	some data here later on :)

@stop