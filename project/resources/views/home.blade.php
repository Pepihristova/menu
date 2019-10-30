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
                    <input type="number" name="number">
                    <h2>Сума с която разполагате</h2>
                    <input type="number" name="price">
                    <h2>Меню</h2>
                    <select onsubmit="location = this.value;" id="menu" >
                        <option value="{{ route('onedegree_choice.index') }}">Едностепенно</option>
                        <option value="1">Двустепенно</option>
                        <option value="1">Тристепенно</option>
                        <option value="1">Четиристепенно</option>
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
  window.location = document.getElementById("menu").value; // JQuery:  $("#menu").val();
}

</script>