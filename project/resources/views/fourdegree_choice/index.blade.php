@extends('layouts.app')
@section('content')
<p>{{$random->id}}</p>
<p>{{$random->salad->name}}</p>
<p>{{$random->price}}</p>
<p>{{$random->restaurant->name}}</p>
<p>{{$random->drink->name}}</p>
<p>{{$random->main->name}}</p>
<p>{{$random->dessert->name}}</p>
<p>{{$price}}</p>
<p>{{$number}}</p>
<p>{{$price_for_one}}</p>
<form method="post" action="{{ action('MenuOptionsController@store', ['current_menu_price' => $price, 'number_people' => $number, 'menu_one_id' => NULL, 'menu_two_id' => NULL, 'menu_three_id' => NULL, 'menu_four_id' => $random->id ]) }}" >
					{{ csrf_field() }}
					<button type="submit" class="btn btn-danger">Приеми</button>
				</form>

	<form method="post" action="{{ action('MenuOptionsController@partly', ['number_people' => $number,'current_menu_price' => $price, 'menu_one_id' => $random->id, 'menu_two_id' => NULL, 'menu_three_id' => NULL, 'menu_four_id' => NULL ]) }}" >
					{{ csrf_field() }}
					<input type="number" name="accepted">
					<button type="submit" class="btn btn-danger">Изпрати</button>
				</form>
@endsection
