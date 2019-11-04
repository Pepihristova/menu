@extends('layouts.app')

@section('content')
<center><h3>Choose what kind of menu you want to add</h3></center>
<center><select onchange="location = this.value;">
	<option value="{{ route('onedegree.index') }}">Едностепенно меню</option>
	<option value="{{ route('twodegree.index') }}">Двустепенно меню</option>
	<option value="{{ route('threedegree.index') }}">Тристепенно меню</option>
	<option value="{{ route('fourdegree.index') }}">Четиристепенно меню</option>
</select></center>
@endsection