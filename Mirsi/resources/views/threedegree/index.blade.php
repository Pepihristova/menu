@extends('layouts.app')
<table class="table table-bordered" border="1">

	@foreach( $menus as $menu )
		<tr>
			<td>
				<a href="{{ route('threedegree.show', $menu->id)}}">{{$menu->salad->name}}</a>
			</td>
			<td>
				<a href="{{ route('threedegree.show', $menu->id)}}">{{$menu->price}}</a>
			</td>
			<td>
				<a href="{{ route('threedegree.show', $menu->id)}}">{{$menu->restaurant->name}}</a>
			</td>
			<td>
				<a href="{{ route('threedegree.show', $menu->id)}}">{{$menu->drink->name}}</a>
			</td>
			<td>
				<a href="{{ route('threedegree.show', $menu->id)}}">{{$menu->main->name}}</a>
			</td>
			<td>
				<a href="{{ route('threedegree.edit', $menu->id) }}" class="btn btn-warning">update</a>
			</td>
			<td>
				<form method="POST" action="{{ route('threedegree.destroy', $menu->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">DELETE</button>
				</form>
					
			</td>
		</tr>
	@endforeach
	
</table>

<a href="{{ route('threedegree.create') }}">Create Menu</a>


