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
            <th>action</th>
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
            <th> 
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