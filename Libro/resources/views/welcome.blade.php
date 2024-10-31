@extends('layouts.plantilla')
@section('titulo','Libro')
@section('contenido')

<div class="d-flex flex-column justify-content-center align-items-center text-center full-height" style="height: 100vh">
    <h1 class="display-1" style="font-family: 'Noto Sans JP', sans-serif; ">{{__('Bienvenido A la Libreria Otaku') }}!</h1>

</div>
<div class="container my-5">
    <div class="noticia-literaria p-4" style="background-color: #f8f9fa; border: 1px solid #ddd; border-radius: 8px;">
        <h2 class="h4 mb-3">{{ __('Noticia Literaria') }}</h2>
        <p>
            {{ __('Explora nuestra última colección de mangas y novelas ligeras que están revolucionando el mundo de la literatura. ¡Encuentra tus próximos favoritos aquí!') }}
        </p>
        <img src="<?= asset('images/Mangas.jpeg') ?>" alt="Libreria otaku"> <br>

        <small class="text-muted">{{ __('Publicado el ') }}{{ date('d-m-Y') }}</small>{{-- reutilizacion de echo --}}
    </div>
</div>

@endsection