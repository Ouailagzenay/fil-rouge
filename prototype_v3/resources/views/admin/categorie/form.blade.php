@extends('layouts.adminApp')
@section('content')

<form id="formSubmit" method="POST" action="{{Url('/admin/add/categorie')}}">
    @csrf
    <div class="col-md-6">
        <label for="" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Title">
    </div>
    <div class="col-md-6">
        <label  for="" class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control" placeholder="Slug">
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Description</label>
        <input type="text" name="description" class="form-control" placeholder="Description">
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
    
    <div class="col-12">
        <button type="submit" class="btn btn-primary mt-3">Add</button>
    </div>
</form>
@endsection

