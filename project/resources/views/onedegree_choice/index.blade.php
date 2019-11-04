@extends('layouts.app')
@section('content')
<ul>
	<li>{{$random->id}}</li>
	<li>{{$random->salad->name}}</li>
	<li>{{$random->price}}</li>
	<li>{{$random->restaurant->name}}</li>
	<li>{{$price}}</li>
	<li>{{$number}}</li>
	<li>{{$price_for_one}}</li>
	<li>{{$restaurant_id}}</li>
</ul>

	<form method="post" action="{{ action('MenuOptionsController@store', ['current_menu_price' => $price, 'number_people' => $number, 'menu_one_id' => $random->id, 'menu_two_id' => NULL, 'menu_three_id' => NULL, 'menu_four_id' => NULL ]) }}" >
					{{ csrf_field() }}
					<button type="submit" class="btn btn-danger">Приеми</button>
				</form>

	<form method="post" action="{{ action('MenuOptionsController@partly', ['current_menu_price' => $price, 'menu_one_id' => $random->id, 'menu_two_id' => NULL, 'menu_three_id' => NULL, 'menu_four_id' => NULL ]) }}" >
					{{ csrf_field() }}
					<input type="number" name="accepted">
					<button type="submit" class="btn btn-danger">Изпрати</button>
				</form>
@endsection
