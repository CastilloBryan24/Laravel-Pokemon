@foreach ($pokemon as $item)
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nom</h5>
            <h5 class="card-title">Type</h5>
            <h5 class="card-title">Niveau</h5>
            <a href="#" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-primary">Delete</a>
        </div>
    </div>
@endforeach