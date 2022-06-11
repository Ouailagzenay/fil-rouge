
@extends('layouts.app')

@section('content')

    
<div class="container bootdey">
  <div class="col-md-12">
    @foreach ($items as $item)
   
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
                  <img src="{{$item->options->image}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{$item->options->image2}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="" class="d-block w-100" alt="...">
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
                    {{$item->name}}
                  </a>
              </h4>
              <p class="my-3">
                  
              </p>
              <div class="product_meta my-4">
                <div class="col-md-12">
                  <form action="" method="post">
                    
                    @csrf
                    @method('put')
                      
                      
                      <div class="row">
                        <div class="col-md-3">
                          {{$item->options->nom_material}}
                        </div>
                      <div class="col-md-3">
                      <input type="number" name="qty" id="qty"
                        value="{{$item->qty}}" 
                        placeholder="Quantite"
                        max="{{$item->inStock}}"
                        min="1" 
                      style="width: 143px
                      " class="form-control">
                      </div>
                    <div class="col-md-3 ">
                      <button type="submit" class="btn btn-outline-secondary"><i class="fa-solid fa-pen-to-square"></i></button>
                    </div>
                  </div>
                  </form>
                </div>
                  
              </div>
              <div class="m-bot15"> <strong>Price : </strong><span class="pro-price"> ${{Cart::total();}}</span></div>
              <p>
                  <a href="" class="btn btn-round btn-danger my-5" ><i class="fa fa-shopping-cart"></i>Next</a>
              </p>
          </div>
            
            
        </div>
        <h1></h1>
    </section>
    @endforeach
    </div>
    </div>

@endsection
