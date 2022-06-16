<a href="{{route('form.materail')}}">add materail</a>
<table class="table-light">
    <thead>
        <tr>
            <th>nom_materail</th>
            <th>slug</th>
            <th>description</th>
            <th>price</th>
            <th>en Stock</th>
            <th>image</th>
            <th>categorie</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($materail as $value)
        <tr>
            <th >{{$value->nom_materail}}</th>
            <th>{{$value->slug}}</th>
            <th>{{$value->description}}</th>
            <th>{{$value->price}}</th>
            <th>{{$value->inStock}}</th>
            <th>{{$value->image}}</th>
            <th>{{$value->categorie->title}}</th>
        </tr>
        @endforeach
    </tbody>
</table>