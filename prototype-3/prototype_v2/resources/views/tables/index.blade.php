@extends('layouts.app')

@section('content')

  <!-- Team Section Start -->
  <section id="team" class="section pt--70 pb--20">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section--title pb--50 text-center">
            <h2 class="h1 ff--primary text-primary">My Team</h2>
        </div>
        <!-- Section Title End -->

        <div class="row">
          @foreach ($product as $value)
            <div class="col-md-4 pb--60">
             
                <!-- Team Member Start -->
                <div class="team--member">
                    <div class="img">
                        <img src="{{asset($value->image)}}" alt="">
                    </div>

                    <div class="info">
                        <div class="name text-uppercase">
                            <h2 class="h4">{{$value->nom_materail}}</h2>
                        </div>

                        <div class="role fw--500">
                            <p>{{$value->price}}</p>
                        </div>

                        <div class="social">
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
                <!-- Team Member End -->
              
            </div>
            @endforeach


        </div>
    </div>
</section>
<!-- Team Section End -->
@endsection