@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> categorie</div>
                <div class="row row justify-content-center">
                <div class="col-md-2 ">
                     <a href="{{route('Categories')}}" class="btn btn-primary">reserve now</a>
                    </div> 
                </div>
                
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
