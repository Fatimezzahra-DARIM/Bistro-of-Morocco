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
            <input type="text" name="email" id="email" value="{{$profils->email}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>
<div class="card">
    @if(session('flash_message'))
        <h1>{{session('flash_message') }}</h1>
    @elseif(session('error_message'))
        <h1> {{ session('error_message') }}</h1>
    @endif
    <div class="card-header">Edit Password</div>
    <div class="card-body">

        <form action="{{ route('update-password') }}" method="post">
             @csrf
            @method("PUT")
           
            <label>Last Password</label></br>
            <input type="text" name="oldPassword" id="oldPassword" value="" class="form-control"></br>
            <label>New Password</label></br>
            <input type="text" name="newPassword" id="newPassword" value="" class="form-control"></br>
            <label>Confirm Password</label></br>
            <input type="text" name="confirmPassword" id="confirmPassword" value="" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
            @error('confirmPassword')
            {{$message}}
            @enderror
        </form>

    </div>
</div>
@stop