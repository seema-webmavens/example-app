@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                  
                <h1>Home Page</h1>

              </div>

            <div class="card ">
               <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

 <br><br>
<div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;"></h4>
                <center><h1 class="text-light bg-dark display-5 ">Our Products</h1><center>
            </div><br>
            <div class="row">

                @foreach($products as $product)
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-7">
                            <img class="img-fluid mb-8 mb-sm-2" src="{{ asset('storage/'.$product->photo) }}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h5><a href="#">{{ $product->name  }}</a></h5>
                            <h4>Rs.{{ $product->price  }}</h4>
                            <p class="m-0">{{ $product->description }}</p>
                            <h4></h4>
                           

                        
 
                        
                           <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
 <hr/>            
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>

        </div>
    </div>
</div>
 <br><br> <br><br> <br><br> <br><br> <br><br> <br><br>
@endsection
