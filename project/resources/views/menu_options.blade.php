@extends('layouts.app')
@section('content')

	//switch cases
	One:
	<p>{{$random->id}}</p>
	<p>{{$random->salad->name}}</p>
	<p>{{$random->price}}</p>
	<p>{{$random->restaurant->name}}</p>
	<p>{{$price}}</p>
	<p>{{$number}}</p>
	<p>{{$price_for_one}}</p>

	Two:
	<p>{{$random->id}}</p>
	<p>{{$random->salad->name}}</p>
	<p>{{$random->price}}</p>
	<p>{{$random->restaurant->name}}</p>
	<p>{{$random->drink->name}}</p>
	<p>{{$price}}</p>
	<p>{{$number}}</p>
	<p>{{$price_for_one}}</p>

	Three:
	<p>{{$random->id}}</p>
	<p>{{$random->salad->name}}</p>
	<p>{{$random->price}}</p>
	<p>{{$random->restaurant->name}}</p>
	<p>{{$random->drink->name}}</p>
	<p>{{$random->main->name}}</p>
	<p>{{$price}}</p>
	<p>{{$number}}</p>
	<p>{{$price_for_one}}</p>

	Four:
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
@endsection
