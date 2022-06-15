@extends('layouts.app')
@section('link')
@endsection
@section('content')

        <!-- Pricing Section Start -->
        <section id="pricing" class="section pt--70 pb--80">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <h2 class="h1 ff--primary text-primary">Price List</h2>

                    <p>categorie</p>
                </div>
                <!-- Section Title End -->
                <!-- Pricing Items Start -->
                <div class="pricing--items owl-carousel" data-owl-margin="30" data-owl-dots="true" data-loop="false" data-owl-responsive='{"0": {"items": 1}, "551": {"items": 2}, "992": {"items": 3}}'>
                    @foreach ($categorie as $value)
                    <!-- Pricing Item Start -->
                    <div class="pricing--item">
                        <div class="amount">
                            <img src="{{$value->image1}}" alt="">
                        </div>

                        <div class="title text-uppercase">
                            <h3 class="h2">${{$value->max_price}}-${{$value->min_price}}</h3>
                        </div>
                        <div class="features">
                            <ul class="nav">
                                <li>{{$value->title}}</li>
                                <li>Lorem ipsum dolor sit amet consect</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipisicing elit</li>
                                <li>Lorem ipsum dolor sit</li>
                            </ul>
                        </div>

                        <div class="action">
                            <a href="{{route('categorie.show', $value->slug)}}" class="btn btn-default">Order Now</a>
                        </div>
                    </div>
                    <!-- Pricing Item End -->
                    @endforeach

                </div>
                <!-- Pricing Items End -->
            </div>
        </section>
        <!-- Pricing Section End -->

        <!-- Footer Section Start -->
        <footer class="footer--section pt--50 pb--50 text-center bg-dark">
            <div class="container">
                <!-- Footer Social Start -->
                <div class="footer--social">
                    <ul class="nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- Footer Social End -->

                <!-- Footer Copyright Start -->
                <div class="footer--copyright text-lighter fw--500">
                    <p>Copyright &copy; <a href="#">TheGraphy</a>. All Rights Reserved.</p>
                </div>
                <!-- Footer Copyright End -->
            </div>
        </footer>
        <!-- Footer Section End -->
    </div>
    <!-- Wrapper End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#" class="btn btn-default"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <!-- Back To Top Button End -->
  <!-- ==== Plugins Bundle ==== -->
  <script src="{{asset('js/plugins.min.js')}}"></script>

  <!-- ==== Main Script ==== -->
  <script src="{{asset('js/main.js')}}"></script>





@endsection


