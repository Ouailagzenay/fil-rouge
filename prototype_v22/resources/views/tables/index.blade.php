@extends('layouts.app')

@section('content')
<div class="wrapper">
  <!-- Header Section Start -->
  <header class="header--section">
      <!-- Header Navbar Start -->
      <div class="header--navbar navbar text-white">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                      <span class="sr-only">Toggle Navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

                  <!-- Logo Start -->
                  <div class="header--logo navbar-brand">
                      <a href="index.html"><img src="img/logo.png" alt=""></a>
                  </div>
                  <!-- Logo End -->
              </div>

              <div id="headerNav" class="navbar-collapse collapse">
                  <!-- Header Nav Links Start -->
                  <ul class="header--nav-links nav nav-links fw--400 text-uppercase float--right" data-trigger="scrollspy">
                      <li class="active"><a href="#banner" data-trigger="scroll">Home</a></li>
                      <li><a href="#about" data-trigger="scroll">About Me</a></li>
                      <li><a href="#services" data-trigger="scroll">Services</a></li>
                      <li><a href="{{route('Categories')}}" class="btn btn-primary">reserve now</a></li>
                      @guest
                      @if (Route::has('login'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
                      <li><a href="#contact" data-trigger="scroll">Contact</a></li>
                      
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<span class="caret"></span></a>

                          <ul class="dropdown-menu">
                              <li><a href="work-single.html">Work Single</a></li>
                              <li><a href="blog.html">Blog</a></li>
                              <li><a href="blog-details.html">Blog Details</a></li>
                              <li><a href="404.html">404</a></li>
                              <li><a href="coming-soon.html">Coming Soon</a></li>
                          </ul>
                      </li>
                  </ul>
                  <!-- Header Nav Links End -->
              </div>
          </div>
      </div>
      <!-- Header Navbar End -->
  </header>
  <!-- Header Section End -->

  <!-- Page Header Start -->
  <section class="page--header pt--190 pb--140 text-center" data-bg-img="{{asset('img/home/hedare.png')}}">
      <div class="container">
          <div class="title ff--primary">
              <h2 class="h1 text-primary">detail categorie</h2>
          </div>
      </div>
  </section>
  <!-- Page Header End -->


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