@extends('layouts.app')

@section('content')
<!doctype html>

<html lang="en">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">seleccion de actividades </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

          
                    <div class="d-flex">           
       <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Vendedor
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/Vendedor/viewCrearVendedor">Crear Vendedor Konecta</a>
          <a class="dropdown-item" href="/Vendedor/viewConsultarVendedor">Consultar Vendedores Konecta</a>
          
      </div>

      </div>
      
     
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Cliente
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/Vendedor/viewCrearCliente">Crear Cliente Konecta</a>
          <a class="dropdown-item" href="/Vendedor/viewConsultarCliente">Consultar Clientes Konecta</a>
          
      </div>
      
      
                </div>
            </div>
        </div>
    </div>
</div>
</html>

@endsection
