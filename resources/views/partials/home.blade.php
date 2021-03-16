<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Type</th>
        <th scope="col">Show</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pokemons as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->type_id}}</td>
                <td><a href="/pokemon-show/{{$item->id}}" class="btn btn-primary">Show</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>