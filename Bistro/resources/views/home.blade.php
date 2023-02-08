
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                     @foreach ($plats as $plat)
                     

                        <div class="card" style="width: 18rem;">
                            <img src="/images/{{$plat->image}}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $plat->name }}</h5>
                            <p class="card-text">{{ $plat->Description }}</p>
                            <a class="btn btn-primary">{{ $plat->price }}</a>
                        </div>
                        </div> 
                     @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
