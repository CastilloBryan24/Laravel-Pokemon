    <div class="card" style="width: 18rem;">
        <img src="{{asset('storage/img/'.$show->src)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$show->name}}</h5>
            <h5 class="card-title">{{$show->type_id}}</h5>
            <h5 class="card-title">{{$show->level}}</h5>
            <a href="#" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-primary">Delete</a>
        </div>
    </div>