<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Editar Profesor</title>
  </head>
  <body>


     <div class="card border-info  "  style=" margin-top: 20px; "   >

  <div class="card-header bg-primary  text-white"> 
    Editar Vendedor
  </div>


{!! Form::model($user, [
    'method' => 'PUT',
    'route' => ['usuario.update', $user->id]
]) !!}

<div class="form-group">

{!! Form::label('name', 'name', ['class' => 'control-label']) !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

  <div class="form-group">

{!! Form::label('email', 'email', ['class' => 'control-label']) !!}
{!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

{!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
{!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<div>
{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

</div>
{!! Form::close() !!}


</select>

  
  <div  class="text-center" style="margin-top: 30px; ">
<a href="/Escuela" class="btn btn-primary btn-lg">Editar Materia</a>
<a href="/Escuela" class="btn btn-primary btn-lg">Cancelar</a>


</div>
<label for="exampleInputPassword1">   </label>
<label for="exampleInputPassword1">   </label>

  </div>
  
  </div>

</form>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @section('content')
  </body>
</html>