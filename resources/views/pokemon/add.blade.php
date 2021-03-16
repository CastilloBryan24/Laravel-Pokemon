<form action="/pokemon-store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Photo</label>
      <input type="file" name="src" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nom</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Niveau</label>
      <input type="number" name="level" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Type</label>
        <select class="form-control" id="exampleFormControlSelect1" name="type_id">
            @foreach ($type as $item)
                <option value="{{$item->id}}">{{$item->type}}</option>
            @endforeach
        </select>  
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>