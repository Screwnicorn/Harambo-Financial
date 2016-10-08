@extends('main.layout')

@section('content')

<h3> All Groups</h3>
@foreach ($groups as $group)
	<li> <a href="{{ url('groups/' . $group->slug) }}"> {{ $group->name }}</a></li>
@endforeach
@stop