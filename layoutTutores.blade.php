
<!DOCTYPE html>

<html lang="pt-br" data-bs-theme="dark">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/cyborg/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head> 
<body>
    <div class="container">
        <div class="container">
            <header class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="{{route(name: 'home') }}" class="nav-link">Home</a></li> <!--fazer para apontar nos tutores -->
                    <li class="nav-item"><a href="{{route('tutores.index') }}" class="nav-link">Listar os tutores</a></li>
                    <li class="nav-item"><a href="{{route(name: 'tutores.create')}}" class="nav-link">Adicionar um tutor</a></li>
                    <li class="nav-item"><a href="{{route(name: 'petshop.create')}}" class="nav-link">Adicionar um animal</a></li>
                </ul>
            </header>
        </div>

      @yield('content')
      
        <div class="container">
            <footer class="py-3 my-4">
                
                <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
            </footer>
        </div>
    </div>
</body>

</html>


