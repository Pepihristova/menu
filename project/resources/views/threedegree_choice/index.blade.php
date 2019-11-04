@extends('layouts.app')
@section('content')
<table border="1" bgcolor="white">
	<tr>
		<td>Меню №</td>
		<td>Салата</td>
		<td>Напитка</td>
		<td>Основно</td>
		<td>Цена на човек</td>
	</tr>
	<tr>
		<td>{{$random->id}}</td>
		<td>{{$random->salad->name}}</td>
		<td>{{$random->drink->name}}</td>
		<td>{{$random->main->name}}</td>
		<td>{{$random->price}}</td>
	</tr>
</table>

<form method="post" action="{{ action('MenuOptionsController@store', ['current_menu_price' => $price, 'number_people' => $number, 'menu_one_id' => NULL, 'menu_two_id' => NULL, 'menu_three_id' => $random->id, 'menu_four_id' => NULL ]) }}" >
	{{ csrf_field() }}
	<button type="submit" class="btn btn-danger">Приеми</button>
</form>

<form method="post" action="{{ action('MenuOptionsController@partly', ['number_people' => $number,'current_menu_price' => $price, 'menu_one_id' => $random->id, 'menu_two_id' => NULL, 'menu_three_id' => NULL, 'menu_four_id' => NULL ]) }}" >
	{{ csrf_field() }}
	<input type="number" name="accepted">
	<button type="submit" class="btn btn-danger">Изпрати</button>
</form>
@endsection
