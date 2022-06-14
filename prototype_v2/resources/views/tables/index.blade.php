@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    @foreach ($product as $value)
                      <div class="col-md-4 my-4"> 
                        <div class="card black"  style="width: 18rem;">
                        <img src="{{asset($value->image)}} " class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$value->nom_materail}}</h5>
                      <p class="card-text">{{$value->price}}</p>
                      <div>
                        <form action="{{route('add.cart', $value->slug)}}" method="post">
                          @csrf
                          <div class="form-group">
                            <label for="qty" class="label-input">
                              quantité
                            </label>
                            <input type="number" name="qty" id="qty"
                              value="1" 
                              placeholder="Quantite"
                              max="{{$value->inStock}}"
                              min="1" 
                              class="form-group">
                          </div>
                          <div class="form-control">
                            <button type="submit">ajouter</button>
                          </div>
                        </form>
                      </div>
                      
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