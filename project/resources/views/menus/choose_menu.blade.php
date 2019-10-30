@extends('layouts.app')

@section('content')
<center><h3>Choose what kind of menu you want to add</h3></center>
<center><select onchange="location = this.value;">
	<option value="{{ route('onedegree.index') }}">Едностепенно меню</option>
	<a href=""><option>Двустепенно меню</option></a>
	<a href=""><option>Тристепенно меню</option></a>
	<a href=""><option>Четиристепенно меню</option></a>
</select></center>
@endsection