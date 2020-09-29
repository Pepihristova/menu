@extends('layouts.app')
@section('content')
<table border="1" bgcolor="white">
	<tr>
		<td colspan="8">Ресторант: {{$menu->restaurant->name}}</td>
	</tr>
	<tr>
		<td>Салата</td>
		<td>Напитка</td>
		<td>Основно</td>
		<td>Десерт</td>
		<td>Цена на човек</td>
		<td>Брой</td>
		<td>Обща цена</td>
		<td>Бакшиш</td>

	</tr>
	<tr>
		<td>{{$menu->salad->name}}</td>
		<td>
			@if(is_null($menu_one_id))
				{{$menu->drink->name}}
			@else
				-
			@endif
		</td>
		<td>
			@if(!is_null($menu_three_id))
				{{$menu->main->name}}
			@elseif(!is_null($menu_four_id))
				{{$menu->main->name}}
			@else
				-
			@endif
		</td>
		<td>
			@if(!is_null($menu_four_id))
				{{$menu->dessert->name}}
			@else
				-
			@endif
		</td>
		
		<td>{{$menu->price}}</td>
		<td>{{$number}}</td>
		<td>{{$menu->price * $number}}</td>
		<td>{{$menu->price * $number * 0.05}}</td>

	</tr>
</table>
@endsection
