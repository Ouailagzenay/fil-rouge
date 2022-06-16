<table class="table-light">
    <thead>
        <tr>
            <th>titel</th>
            <th>slug</th>
            <th>description</th>
            <th>max price</th>
            <th>min price</th>
            <th>image</th>
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