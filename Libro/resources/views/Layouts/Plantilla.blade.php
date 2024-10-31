<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap"   rel="stylesheet">
    <title>Plantilla</title>
</head>
<body style="height: 100%">
{{-- inicia el navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-blueviolet text-center " style="background-color: blueviolet; height:10%"> 
        <div class="container-fluid">
            <a class="navbar-brand" href="/">{{__('Libreria Otaku') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutaform')?'text-warning':'' }}" aria-current="page" href="/registro" >{{__('Registro') }}</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    @yield('contenido')
    
<footer class="bg-dark text-white pt-4">
    <div class="container">
    
        <div class="text-center">
            <h5 class="text-uppercase">{{__('Libreria Otaku') }}</h5>
            <p>{{__('Descubre el mejor contenido de literatura japonesa, mangas y más') }}.</p>
            <p>&copy; {{__('Libreria Otaku') }}, {{ date('Y') }}</p>{{-- Logica sacada de chat, entendida que llamamos una funcion de php para sacar el dia, mes y año --}}
        </div>
    </div>
</footer>
</body>
</html>