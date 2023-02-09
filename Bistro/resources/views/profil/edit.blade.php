@extends('profil.layout')
@section('content')
<div class="card">
    <div class="card-header">Edit Profil</div>
    <div class="card-body">

        <form action="{{ url('/profil'. '/' .$profils->id) }}" method="post" enctype="multipart/form-data">
             @csrf
            @method("PATCH")
           
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$profils->name}}" class="form-control"></br>
            <label>email</label></br>
            <input type="text" name="Description" id="Description" value="{{$profils->email}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>
<div class="card">
    <div class="card-header">Edit Password</div>
    <div class="card-body">

        <form action="{{ url('/profil'. '/' .$profils->id) }}" method="post" enctype="multipart/form-data">
             @csrf
            @method("PATCH")
           
            <label>Last Password</label></br>
            <input type="text" name="name" id="name" value="" class="form-control"></br>
            <label>New Password</label></br>
            <input type="text" name="NewPassword" id="NewPassword" value="" class="form-control"></br>
            <label>Confirm Password</label></br>
            <input type="text" name="ConfirmPassword" id="ConfirmPassword" value="" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>
@stop