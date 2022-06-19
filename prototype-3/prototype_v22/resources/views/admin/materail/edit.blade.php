<form method="POST" action="{{Url('/admin/edit/materail',$materail->id)}}">
    @csrf
    @method('put')
    <div>
        <label for="">Title</label>
        <input type="text" name="nom_materail" value="{{$materail->nom_materail}}" class="form-control" placeholder="Title">
    </div>
    <div>
        <label for="">slug</label>
        <input type="text" name="slug" class="form-control" value="{{$materail->slug}}" placeholder="slug">
    </div>
    <div>
        <label for="">description</label>
        <input type="text" name="description" class="form-control" value="{{$materail->description}}" placeholder="description">
    </div>
    <div>
        <label for="">price</label>
        <input type="text" name="price" class="form-control" value="{{$materail->price}}" placeholder="price">
    </div>
    <div>
        <label for="">en Stock</label>
        <input type="text" name="inStock" class="form-control" value="{{$materail->inStock}}" placeholder="enStock">
    </div>
    <div>
        <label for="">image</label>
        <input type="text" name="image" class="form-control" value="{{$materail->image}}" placeholder="image">
    </div>
    <select name="categorie_id" id="">
        @foreach ($categories as $value)
            <option value="{{$value->id}}">{{$value->title}}</option>
        @endforeach
    </select>
    <div>
        
        <button type="submit">submit</button>

</form>
