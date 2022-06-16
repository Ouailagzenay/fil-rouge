<form method="POST" action="{{Url('/admin/edit/categorie',$categorie->id)}}">
    @csrf
    @method('put')
    <div>
        <label for="">Title</label>
        <input type="text" name="title" value="{{$categorie->title}}" class="form-control" placeholder="Title">
    </div>
    <div>
        <label for="">slug</label>
        <input type="text" name="slug" class="form-control" value="{{$categorie->slug}}" placeholder="slug">
    </div>
    <div>
        <label for="">description</label>
        <input type="text" name="description" class="form-control" value="{{$categorie->description}}" placeholder="description">
    </div>
    <div>
        <label for="">price</label>
        <input type="text" name="max_price" class="form-control" value="{{$categorie->max_price}}" placeholder="max_price">
    </div>
    <div>
        <label for="">en Stock</label>
        <input type="text" name="min_price" class="form-control" value="{{$categorie->min_price}}" placeholder="min_price">
    </div>
    <div>
        <label for="">image</label>
        <input type="text" name="image" class="form-control" value="{{$categorie->image}}" placeholder="image">
    </div>
    
    
        
        <button type="submit">submit</button>

</form>
