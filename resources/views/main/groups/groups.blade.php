@extends('main.layout')

@section('content')
@foreach ($groups as $group)
	<li> <a href="{{ url('groups/' . $group->id) }}"> {{ $group->name }}</a></li>
@endforeach
@stop