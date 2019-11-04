@extends('layouts.app')
@section('content')
<table border="1">
	
<tr>
	<td>
		{{$price}}
	</td>
	<td>
		{{$number}}
	</td>
	<td>
		@if(!is_null($menu_one_id))
                     <td>{{$menu->salad->name}}</td>
                    @elseif(!is_null($menu_two_id))
                     <td>{{$menu_two->salad->name}}</td>
                     @elseif(!is_null($menu_three_id))
                     <td>{{$menu_three->salad->name}}</td>
                     @elseif(!is_null($menu_four_id))
                     <td>{{$menu_four->salad->name}}</td>
                    @endif
	</td>
	<td>
		@if(!is_null($menu_one_id))
                     <td>{{$menu->restaurant->name}}</td>
                    @elseif(!is_null($menu_two_id))
                     <td>{{$menu_two->restaurant->name}}</td>
                     @elseif(!is_null($menu_three_id))
                     <td>{{$menu_three->restaurant->name}}</td>
                     @elseif(!is_null($menu_four_id))
                     <td>{{$menu_four->restaurant->name}}</td>
                    @endif
	</td>
	
		</tr>
		</table>
@endsection
