@extends('layouts.app')
@section('content')
@if(!is_null($random))

<table border="1" bgcolor="white">
	<tr>
		<td>Меню №</td>
		<td>Салата</td>
		<td>Напитка</td>
		<td>Цена на човек</td>
	</tr>
	<tr>
		<td>{{$random->id}}</td>
		<td>{{$random->salad->name}}</td>
		<td>{{$random->drink->name}}</td>
		<td>{{$random->price}}</td>
	</tr>
</table>

<form method="post" action="{{ action('MenuOptionsController@store', ['current_menu_price' => $price, 'number_people' => $number, 'menu_one_id' => NULL, 'menu_two_id' => $random->id, 'menu_three_id' => NULL, 'menu_four_id' => NULL ]) }}" >
	{{ csrf_field() }}
	<button type="submit" class="btn btn-danger">Приеми</button>
</form>
@else
	<h1>В този ресторант няма подходящо за вас меню!</h1>
	<a href="{{url()->previous()}}" >Върни се обратно</a>
@endif
@endsection
