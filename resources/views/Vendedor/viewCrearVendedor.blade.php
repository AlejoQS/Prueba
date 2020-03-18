@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<div class="card border-info  "  style=" margin-top: 20px; "   >

<div class="card-header bg-primary  text-white"> 
  Crear Vendedor
</div>
<div>
 {{ Form::open(['route' => 'usuario.store']) }}
  @method('post')
  
  <div class="form-group">

    
  </div>
    {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}


 <div class="form-group">
   {!! Form::label('email', 'Correo', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
  </div>

 <div class="form-group">
   {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
  </div>
 


  
  <div class="form-group text-center  ">
  
  {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

  </div>
  {!! Form::close() !!}

  </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <body>
    @endsection
    </html>