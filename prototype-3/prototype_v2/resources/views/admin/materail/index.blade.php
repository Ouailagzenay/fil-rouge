<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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