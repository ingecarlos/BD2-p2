<!-- usuarioedit.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Editar Usuario</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{action('usuarioController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nombres">Nombres:</label>
            <input type="text" class="form-control" name="nombres" value="{{$usuario->nombres}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="apellidos">Apellidos:</label>
            <input type="text" class="form-control" name="apellidos" value="{{$usuario->apellidos}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="edad">Edad:</label>
            <input type="text" class="form-control" name="edad" value="{{$usuario->edad}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nickname">Nickname:</label>
            <input type="text" class="form-control" name="nickname" value="{{$usuario->nickname}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" value="{{$usuario->password}}">
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>