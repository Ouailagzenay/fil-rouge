 <form method="POST" action="{{Url('/add/categorie')}}">
        @csrf
        <div>
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div>
            <label for="">slug</label>
            <input type="text" name="slug" class="form-control" placeholder="slug">
        </div>
        <div>
            <label for="">description</label>
            <input type="text" name="description" class="form-control" placeholder="description">
        </div>
        <div>
            <label for="">max price</label>
            <input type="text" name="max_price" class="form-control" placeholder="enStock">
        </div>
        <div>
            <label for="">min price</label>
            <input type="text" name="min_price" class="form-control" placeholder="enStock">
        </div>
        <div>
            <label for="">image</label>
            <input type="text" name="image" class="form-control" placeholder="image">
        </div>
        
             
            <button type="submit">submit</button>

    </form>
