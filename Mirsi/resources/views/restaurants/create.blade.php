@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('restaurants.store') }}">
	{!! Form::open(['route' => ['restaurants.store']]) !!}
	<label>Restaurant name</label>
	{!!Form::text('restaurant_name',null)!!}
	{!!Form::submit('Click me')!!}
	{!! Form::close() !!}
@endsection