@extends('layouts.app')
@section('content')
<table border="1">
	<td>
		{{$price}}
	</td>
	<td>
		{{$number}}
	</td>
	<td>
		{{$menu->salad->name}}
	</td>
	<td>
		{{$menu->restaurant->name}}
	</td>
	
</table>
@endsection
