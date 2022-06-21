@extends('layouts.app')
@section('link')
<link rel="stylesheet" href="{{asset('css/cart.css')}}">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
@endsection


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
                      <li><a href="#blog" data-trigger="scroll">Blog</a></li>
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

    


<div class="container padding-bottom-3x mb-1">
  <!-- Alert-->
  <div class="alert alert-info alert-dismissible fade show text-center" style="margin-bottom: 30px;"><span class="alert-close" data-dismiss="alert"></span><img class="d-inline align-center" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIuMDAzIDUxMi4wMDMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4wMDMgNTEyLjAwMzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjE2cHgiPgo8Zz4KCTxnPgoJCTxnPgoJCQk8cGF0aCBkPSJNMjU2LjAwMSw2NGMtNzAuNTkyLDAtMTI4LDU3LjQwOC0xMjgsMTI4czU3LjQwOCwxMjgsMTI4LDEyOHMxMjgtNTcuNDA4LDEyOC0xMjhTMzI2LjU5Myw2NCwyNTYuMDAxLDY0eiAgICAgIE0yNTYuMDAxLDI5OC42NjdjLTU4LjgxNiwwLTEwNi42NjctNDcuODUxLTEwNi42NjctMTA2LjY2N1MxOTcuMTg1LDg1LjMzMywyNTYuMDAxLDg1LjMzM1MzNjIuNjY4LDEzMy4xODQsMzYyLjY2OCwxOTIgICAgIFMzMTQuODE3LDI5OC42NjcsMjU2LjAwMSwyOTguNjY3eiIgZmlsbD0iIzUwYzZlOSIvPgoJCQk8cGF0aCBkPSJNMzg1LjY0NCwzMzMuMjA1YzM4LjIyOS0zNS4xMzYsNjIuMzU3LTg1LjMzMyw2Mi4zNTctMTQxLjIwNWMwLTEwNS44NTYtODYuMTIzLTE5Mi0xOTItMTkycy0xOTIsODYuMTQ0LTE5MiwxOTIgICAgIGMwLDU1Ljg1MSwyNC4xMjgsMTA2LjA2OSw2Mi4zMzYsMTQxLjE4NEw2NC42ODQsNDk3LjZjLTEuNTM2LDQuMTE3LTAuNDA1LDguNzI1LDIuODM3LDExLjY2OSAgICAgYzIuMDI3LDEuNzkyLDQuNTY1LDIuNzMxLDcuMTQ3LDIuNzMxYzEuNjIxLDAsMy4yNDMtMC4zNjMsNC43NzktMS4xMDlsNzkuNzg3LTM5Ljg5M2w1OC44NTksMzkuMjMyICAgICBjMi42ODgsMS43OTIsNi4xMDEsMi4yNCw5LjE5NSwxLjI4YzMuMDkzLTEuMDAzLDUuNTY4LTMuMzQ5LDYuNjk5LTYuNGwyMy4yOTYtNjIuMTQ0bDIwLjU4Nyw2MS43MzkgICAgIGMxLjA2NywzLjE1NywzLjU0MSw1LjYzMiw2LjY3Nyw2LjcyYzMuMTM2LDEuMDY3LDYuNTkyLDAuNjQsOS4zNjUtMS4yMTZsNTguODU5LTM5LjIzMmw3OS43ODcsMzkuODkzICAgICBjMS41MzYsMC43NjgsMy4xNTcsMS4xMzEsNC43NzksMS4xMzFjMi41ODEsMCw1LjEyLTAuOTM5LDcuMTI1LTIuNzUyYzMuMjY0LTIuOTIzLDQuMzczLTcuNTUyLDIuODM3LTExLjY2OUwzODUuNjQ0LDMzMy4yMDV6ICAgICAgTTI0Ni4wMTcsNDEyLjI2N2wtMjcuMjg1LDcyLjc0N2wtNTIuODIxLTM1LjJjLTMuMi0yLjExMi03LjMxNy0yLjM4OS0xMC42ODgtMC42NjFMOTQuMTg4LDQ3OS42OGw0OS41NzktMTMyLjIyNCAgICAgYzI2Ljg1OSwxOS40MzUsNTguNzk1LDMyLjIxMyw5My41NDcsMzUuNjA1TDI0Ni43LDQxMS4yQzI0Ni40ODcsNDExLjU2MywyNDYuMTY3LDQxMS44NCwyNDYuMDE3LDQxMi4yNjd6IE0yNTYuMDAxLDM2Mi42NjcgICAgIEMxNjEuOSwzNjIuNjY3LDg1LjMzNSwyODYuMTAxLDg1LjMzNSwxOTJTMTYxLjksMjEuMzMzLDI1Ni4wMDEsMjEuMzMzUzQyNi42NjgsOTcuODk5LDQyNi42NjgsMTkyICAgICBTMzUwLjEwMywzNjIuNjY3LDI1Ni4wMDEsMzYyLjY2N3ogTTM1Ni43NTksNDQ5LjEzMWMtMy40MTMtMS43MjgtNy41MDktMS40NzItMTAuNjg4LDAuNjYxbC01Mi4zNzMsMzQuOTIzbC0zMy42NDMtMTAwLjkyOCAgICAgYzQwLjM0MS0wLjg1Myw3Ny41ODktMTQuMTg3LDEwOC4xNi0zNi4zMzFsNDkuNTc5LDEzMi4yMDNMMzU2Ljc1OSw0NDkuMTMxeiIgZmlsbD0iIzUwYzZlOSIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" width="18" height="18" alt="Medal icon">&nbsp;&nbsp;With this purchase you will earn <strong>290</strong> Reward Points.</div>
  <!-- Shopping Cart-->
  <div class="table-responsive shopping-cart">
      <table class="table">
          <thead>
              <tr>
                  <th>Product Name</th>
                  <th class="text-center">Quantity</th>
                  <th class="text-center">Subtotal</th>
                  <th class="text-center">Discount</th>
                  
              </tr>
          </thead>
          @foreach ($items as $item)
          <tbody> 
              <tr>
                  <td>
                      <div class="product-item">
                          <a class="product-thumb" href="#"><img src="https://via.placeholder.com/220x180/9932CC/000000" alt="Product"></a>
                          <div class="product-info">
                              <h4 class="product-title"><a href="#">{{$item->name}}</a></h4><span><em></em> -</span>
                          </div>
                      </div>
                  </td>
                  <td class="text-center">
                    <div class="col-md-12">
                      <form action="" method="post">
                        
                        @csrf
                        @method('put')
                          
                          
                          <div class="row">
                            <div class="col-md-3">
                              {{$item->name}}
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
                  </td>
                  <td class="text-center text-lg text-medium">{{$item->price}}</td>
                  <td class="text-center">—</td>
                  <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="" data-original-title="Remove item"><i class="fa fa-trash"></i></a></td>
              </tr>
          </tbody>
          @endforeach
      </table>
  </div>
  <div class="shopping-cart-footer">
      <div class="column text-lg">Subtotal: <span class="text-medium">${{Cart::total();}}</span></div>
  </div>
  <div class="shopping-cart-footer">
      <div class="column"><a class="btn btn-success" href="{{route('comende')}}">Checkout</a></div>
  </div>
</div>
    
@endsection