@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('twodegree.store') }}">
	{!! Form::open(['route' => ['twodegree.store']]) !!}
	<label>Salad name</label>
	{!! Form::select('salad_id', $salads_arr) !!}
	<label>Price</label>
	{!!Form::text('price',null)!!}
	<label>Restaurant name</label>
	{!! Form::select('restaurant_id', $restaurants_arr) !!}
	<label>Drink name</label>
	{!! Form::select('drink_id', $drinks_arr) !!}
	{!!Form::submit('Click me')!!}
	{!! Form::close() !!}
@endsection