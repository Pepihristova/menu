@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('onedegree.update', $menu->id) }}">
	{{ csrf_field() }}
	{{ method_field('PUT')}}
	<label>Salad name</label>
	{!! Form::select('salad_id', $salads_arr, $menu->salad->id) !!}
	<label>Price</label>
	<input type="text" name="price" value="{{ $menu->price }}">
	<label>Restaurant name</label>
	{!! Form::select('restaurant_id', $restaurants_arr, $menu->restaurant->id) !!}
	<input type="submit" name="submit" value="create" class="btn btn-success">
</form>
@endsection