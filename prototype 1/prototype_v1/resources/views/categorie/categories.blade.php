@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">categorie</div>
                <div class="row">
                    @foreach ($categorie as $value)
                      
                
                 <div class="col-md-4 my-4"> 
                  <div class="card black"  style="width: 18rem;">
                    <img src="{{$value->image1}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">${{$value->max_price}}</h5>
                      <h5 class="card-title">${{$value->min_price}}</h5>
                      <p class="card-text">{{$value->title}}</p>
                      <a href="{{route('categorie.show', $value->slug)}}" class="btn btn-primary">More</a>
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
@endsection