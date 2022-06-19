@extends('layouts.adminApp')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Materail
    </div>
    <div class="card-body">
        <table class="table" id="worksTable">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>in Stock</th>
                    <th>Categorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materail as $value)
                <tr>
                    <th class="col">{{$value->image}}</th>
                    <th class="col" >{{$value->nom_materail}}</th>
                    <th class="col">{{$value->slug}}</th>
                    <th class="col-3">{{$value->description}}</th>
                    <th class="col">{{$value->price}}</th>
                    <th class="col">{{$value->inStock}}</th>
                    <th>{{$value->categorie->title}}</th>
                    <th class="col d-flex flex-row justify-content-evenly"> 
                        <div>
                            <a href="{{route('edit.materail', $value->id)}}" class="btn btn-success">Edit</a>
                        </div>
                        <form action="{{url('/admin/delet/materail',$value->id )}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </th>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection