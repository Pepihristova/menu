@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('restaurants.update', $restaurant->id) }}">
	{{ csrf_field() }}
	{{ method_field('PUT')}}
	<label>Restaurant name</label>
	<input type="text" name="restaurant_name" value="{{ $restaurant->name }}">
	<input type="submit" name="submit" value="create" class="btn btn-success">
</form>
@endsection