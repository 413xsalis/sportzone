@extends('administrador.Gestion_usuarios.layout')

@section('content')


<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi"></i> Gestion usuarios</h1>
        </div>
    </div>
              <table class="table caption-top">
  <caption> <h1>Usuarios</h1></caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


@endsection    
