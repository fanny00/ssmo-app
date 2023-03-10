<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        <title>SSMO App - @yield('titulo')</title>
     
    </head>

    <body>
        <nav class="navbar navbar-expand-lg text-white navbar-dark bg-primary mb-5 p-3">
            <a class="navbar-brand" href="#">App @yield('titulo')</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('funcionarios.inicio') }}">Inicio</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('funcionarios.index') }}">Ver Funcionarios Funcionarios</a>
                  </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{ route('funcionarios.show') }}">Agregar Funcionarios</a>
                </li>

            </div>
        </nav>

          <main class="container">
           
            @yield('contenido')

        </main>
        
       <footer class="text-sm-center p-5">
          <hr>
          <span class="font-weight-light">SSMO APP</span> - Todos los derechos reservados {{ now()->year }}
       </footer>
    </body>
    
</html>
