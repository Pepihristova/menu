@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('onedegree.store') }}">
	{!! Form::open(['route' => ['onedegree.store']]) !!}
	<label>Salad name</label>
	{!! Form::select('salad_id', $salads_arr) !!}
	<label>Price</label>
	{!!Form::text('price',null)!!}
	<label>Restaurant name</label>
	{!! Form::select('restaurant_id', $restaurants_arr) !!}
	{!!Form::submit('Click me')!!}
	{!! Form::close() !!}
@endsection