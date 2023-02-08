@extends('plats.layout')
@section('content')
<div class="card">
  <div class="card-header">Plats Page</div>
  <div class="card-body">
      
      <form action="{{ url('plat') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Image</label></br>
        <input type="file" class="form-control" required name="image">
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="Description" id="Description" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop