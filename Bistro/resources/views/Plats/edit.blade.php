@extends('plats.layout')
@section('content')
<div class="card">
    <div class="card-header">Edit Plats Page</div>
    <div class="card-body">

        <form action="{{ url('plat/' .$plats->id) }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$plats->id}}" id="id" />
            <label>Image</label></br>
            <input type="file" value="{{$plats->image}}" class="form-control"  name="image">
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$plats->name}}" class="form-control"></br>
            <label>Description</label></br>
            <input type="text" name="Description" id="Description" value="{{$plats->Description}}" class="form-control"></br>
            <label>Price</label></br>
            <input type="text" name="price" id="price" value="{{$plats->price}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>
@stop