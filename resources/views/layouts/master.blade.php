<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Evaluación</title>
</head>
<body>
    @section ('header')
    <div class="container">
    <!-- As a link -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gestion de Stock</a>

            <ul class="nav">
            <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('Producto.create')}}">Registrar producto</a>
                </li>      
                <li class="nav-item">
                    <a class="nav-link" href="{{route('buscar')}}">Buscar productos</a>
                </li>
                <li class="nav-item">
                    <form action="login" method="POST">
                    @csrf
                   <button class="nav-link" type="submit">Cerrar Sesión</button>
                   </form>
                </li>
                

            </ul>
        </div>
    </nav>
    @show
    <div>
        @yield('content')
        
    </div>
    @section('footer')
    </div> 

</body>
</html>
    @show
</body>
</html>