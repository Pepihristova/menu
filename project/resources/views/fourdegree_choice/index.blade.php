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

@endsection
