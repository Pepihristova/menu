@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
 
                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                    <a href="{{url('admin/routes')}}">Admin1234</a>
                    @else
                    <div class=”panel-heading”>Normal User</div>
                    <h2>Брой хора в групата</h2>
                    <input type="number" name="number" id="number">
                    <h2>Сума с която разполагате</h2>
                    <input type="number" name="price" id="price">
                    <h2>Меню</h2>
                    <select onsubmit="location = this.value;" id="menu" >
                        <option value="{{ route('onedegree_choice.index') }}">Едностепенно</option>
                        <option value="{{ route('twodegree_choice.index') }}">Двустепенно</option>
                        <option value="{{ route('threedegree_choice.index') }}">Тристепенно</option>
                        <option value="{{ route('fourdegree_choice.index') }}">Четиристепенно</option>
                    </select>
                    <button type="submit" onclick="gotosite()">Update project</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript">
    function gotosite() {
        var query = document.getElementById("menu").value;
        var pr = document.getElementById('price').value;
        var num = document.getElementById('number').value;
        console.log(query+'?price='+ pr +'?number=' + num)
        var string_url = "?price=" + pr + '&number=' + num;
        window.location = query+string_url; // JQuery:  $("#menu").val();
}

</script>