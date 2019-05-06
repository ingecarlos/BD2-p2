<!-- usuarioindex.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Usuarios</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

    <a href="{{url('usuario/add')}}" class="btn btn-success">Crear Usuario</a>
    <br><br>

    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Edad</th>
        <th>Nickname</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($usuarios as $usuario)
      <tr>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->nombres}}</td>
        <td>{{$usuario->apellidos}}</td>
        <td>{{$usuario->edad}}</td>
        <td>{{$usuario->nickname}}</td>

        <td><a href="{{action('usuarioController@edit', $usuario->id)}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('usuarioController@destroy', $usuario->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Borrar</button>
          </form>
        </td>
      </tr>
      @endforeach
      <tr>
        <td colspan="6">
          <form action="{{action('usuarioController@buscar')}}" method="post">
            @csrf
            <input type="text" class="form-control" name="buscar" placeholder="busqueda..." >
            <button class="btn btn-danger" type="submit">Buscar</button>
          </form>  
        </td>
      </tr>
    </tbody>
  </table>
  </div>
  </body>
</html>