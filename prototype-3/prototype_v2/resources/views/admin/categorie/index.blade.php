<a href="{{route('form.categorie')}}">add categorie</a>
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
        @foreach ($categories as $value)
        <tr>
            <th >{{$value->title}}</th>
            <th>{{$value->slug}}</th>
            <th>{{$value->description}}</th>
            <th>{{$value->max_price}}</th>
            <th>{{$value->min_price}}</th>
            <th>{{$value->image}}</th>
            
        </tr>
        @endforeach
    </tbody>
</table>