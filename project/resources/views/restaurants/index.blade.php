@extends('layouts.app')
<table class="table table-bordered" border="1">
	@foreach( $restaurants as $restaurant )
		<tr>
			<td>
				<a href="{{ route('restaurants.show', $restaurant->id)}}">{{$restaurant->name}}</a>
			</td>
			<td>
				<a href="{{ route('restaurants.edit', $restaurant->id) }}" class="btn btn-warning">update</a>
			</td>
			<td>
				<form method="POST" action="{{ route('restaurants.destroy', $restaurant->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" >Delete</button>
				</form>
					
			</td>
		</tr>
	@endforeach
	
</table>
<a href="{{ route('restaurants.create') }}">Create Restaurant</a>
<a href="{{ route('choose_menu') }}">Add to the menu</a>
