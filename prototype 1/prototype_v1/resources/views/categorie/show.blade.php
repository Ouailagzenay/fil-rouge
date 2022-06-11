@extends('layouts.app')

@section('content')

    
<div class="container bootdey">
  <div class="col-md-12">
  <section class="panel ">
        <div class=" row panel-body">
          <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{$categories->image1}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{$categories->image2}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{$categories->image3}}" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            </div>
            <div class="col-md-6">
                <h4 class="pro-d-title my-4">
                    <a href="#" class="">
                      {{$categories->title}}
                    </a>
                </h4>
                <p class="my-5">
                  {{$categories->description}}
                </p>
                
                <div class="m-bot15"> <strong>Price : </strong> <span class="amount-old">${{$categories->max_price}}</span>  <span class="pro-price"> ${{$categories->min_price}}</span></div>
                
                <p>
                    <a href="{{route('prodact.categorie',$categories->slug)}}" class="btn btn-round btn-danger my-5" ><i class="fa fa-shopping-cart"></i>Next</a>
                </p>
            </div>
        </div>
    </section>
    </div>
    </div>

@endsection
