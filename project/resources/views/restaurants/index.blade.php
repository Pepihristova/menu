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
					<button type="submit" class="btn btn-danger">DELETE</button>
				</form>
					
			</td>
		</tr>
	@endforeach
	
</table>
@foreach($restaurants as $restaurant)
        <label class="checkbox-inline">
            <p><input type="checkbox" id="restaurant_id" name="restaurant_id[]" value="{{$restaurant->id}}"> {{$restaurant->name}}</p>
        </label>
    @endforeach 
    <h2>Брой хора</h2>
    <input type="number" name="people" min="1">
    <h2>Сума с която разполагате</h2>
    <input type="number" name="price" min="1">
    <h2>Степен на менюто</h2>
    <input type="number" name="price" min="1">

<a href="{{ route('restaurants.create') }}">Create Room</a>
