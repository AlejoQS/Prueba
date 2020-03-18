<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>ver Venddor</title>
  </head>
  <body>
  

     <div class="card border-info  "  style=" margin-top: 20px; "   >

  <div class="card-header bg-primary  text-white"> 
    ver Vendedor
  </div>

<form>

<table class="table table-striped table-hover">
<tr>
    <td style="width: 200px;">id</td>
    <td>{{ $user->id }}</td>
  </tr>
  <tr>
    <td style="width: 200px;">Nombre</td>
    <td>{{ $user->name }}</td>
  </tr>

<tr>
  <td>Correo</td>
  <td>{{ $user->email}}</td>
</tr>
<tr>
<tr>
  <td>Password</td>
  <td>{{ $user->password}}</td>
</tr>
<tr>
  <td>Creado en</td>
  <td>{{ $user->created_at }}</td>
</tr>
<tr>
  <td>Actualizado en</td>
  <td>{{ $user->updated_at }}</td>
</tr>
</table>


</form>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>