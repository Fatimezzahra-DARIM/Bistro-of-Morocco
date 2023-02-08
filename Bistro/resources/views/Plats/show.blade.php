@extends('plats.layout')
@section('content')
<div class="card">
  <div class="card-header">plats Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title"><img src="/images/{{ $plats->image }}" alt="" width="200px"></h5>
        <h5 class="card-title">Name : {{ $plats->name }}</h5>
        <p class="card-text">Description : {{ $plats->Description }}</p>
        <p class="card-text">Price : {{ $plats->price }}</p>
  </div>
      
    </hr>
  
  </div>
</div>