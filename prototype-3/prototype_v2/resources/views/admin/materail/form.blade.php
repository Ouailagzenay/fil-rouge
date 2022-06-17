@extends('layouts.adminApp')
@section('content')

<form id="formSubmit" method="POST" action="{{Url('/admin/add/materail')}}">
    @csrf
    <div class="col-md-6">
        <label for="" class="form-label">Material name</label>
        <input type="text" name="nom_materail" class="form-control" placeholder="material name">
    </div>
    <div class="col-md-6">
        <label  for="" class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control" placeholder="slug">
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Description</label>
        <input type="text" name="description" class="form-control" placeholder="description">
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Max price</label>
        <input type="text" name="max_price" class="form-control" placeholder="Max price">
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Min price</label>
        <input type="text" name="min_price" class="form-control" placeholder="Min price">
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Image</label>
        <input type="text" name="image" class="form-control" placeholder="Image">
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Categorie</label>
    <select class="form-select" name="categorie_id" id="">
        <option selected>select categorie</option>
        @foreach ($categories as $value)
            <option value="{{$value->id}}">{{$value->title}}</option>
        @endforeach
    </select>
    </div>
    
    <div class="col-12">
        <button type="submit" class="btn btn-primary mt-3">Add</button>
    </div>
</form>
@endsection
