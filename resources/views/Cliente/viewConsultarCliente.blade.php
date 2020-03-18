
@extends('layouts.app')

@section('content')
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Consultar Vendedor</title>
  </head>
  <body>
  

     <div class="card border-info  "  style=" margin-top: 20px; "   >
  <div class="card-header bg-primary  text-white"> 
    Consultar Clientes
  </div>
  <div class="card-body text-center  ">
  
  <table class="table">
  <thead>
    <tr>
  
      
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">documento</th>
      <th scope="col">acciones</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($clients as $client)
    <tr>
    
      <td>{{$client->id }}</td>
      <td>{{$client->name }}</td>
      <td>{{$client->document }}</td>
      <td>
      <a href="{{ route('cliente.show', $client->id) }}" class="btn btn-info">Ver</a>;
      <a href="{{ route('cliente.edit', $client->id) }}" class="btn btn-warning">Editar</a>
    </td>
     
    </tr>
    @endforeach
  </tbody>
</table>



  </div>
  <div  class="text-center" style="margin-top: 30px; ">

  <a href="/home" class="btn btn-primary btn-lg">Home</a>


</div>
<br/>
<br/>
</div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
@endsection
