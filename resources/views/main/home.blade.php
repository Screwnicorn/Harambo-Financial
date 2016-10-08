@extends('main.layout')

@section('content')

	<h3> My Groups Owned</h3>

	@foreach ($mygroupsowner as $myo)
		<li> <a href="{{ url('groups/' . $myo->slug ) }}">{{ $myo->name }} </a></li>
	@endforeach

	<h3>My groups joined</h3>
		@foreach ($mygroupsjoined as $myj)
			<li> <a href="{{ url('groups/' . $myj->group->slug ) }}">{{ $myj->group->name}} </a> </li>
		@endforeach

@stop