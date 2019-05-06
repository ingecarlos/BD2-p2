<!-- productoindex.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Producto</title>
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

    <a href="{{url('producto')}}" class="btn btn-default">productos</a>
    <a href="{{url('usuario')}}" class="btn btn-default">usuarios</a>
    <br>
    <a href="{{url('producto/add')}}" class="btn btn-success">Crear Producto</a>
    <br>
    <br>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($productos as $producto)
      <tr>
        <td>{{$producto->id}}</td>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->precio}}</td>
        <td>{{$producto->stock}}</td>

        <td><a href="{{action('productoController@edit', $producto->id)}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('productoController@destroy', $producto->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Borrar</button>
          </form>
        </td>
      </tr>
      @endforeach
      <tr>
        <td colspan="6">
          <form action="{{action('productoController@buscar')}}" method="post">
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