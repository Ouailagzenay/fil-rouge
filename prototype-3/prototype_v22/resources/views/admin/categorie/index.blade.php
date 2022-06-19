@extends('layouts.adminApp')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Categories
    </div>
    <div class="card-body">
        <table class="table" id="worksTable">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>slug</th>
                    <th>Description</th>
                    <th>Max_price</th>
                    <th>Min_price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $value)
                <tr>
                    <th class="col" >{{$value->title}}</th>
                    <th class="col">{{$value->slug}}</th>
                    <th class="col-3">{{$value->description}}</th>
                    <th class="col">{{$value->max_price}}</th>
                    <th class="col">{{$value->min_price}}</th>
                    <th class="col">{{$value->image}}</th>
                    <th class="col"> 
                        <a href="{{route('edit.categorie', $value->id)}}">Edit</a>
                        <form action="{{url('/admin/delet/categorie',$value->id )}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">delete</button>
                        </form>
                    </th>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
