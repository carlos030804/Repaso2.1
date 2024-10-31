@extends('layouts.plantilla')
@section('titulo','Libro')
@section('contenido')


<div class="card font-monospace items-center">
    
    
    @if (session('exito'))
        <script>
            Swal.fire({
                text:'{!! session('exito') !!}',
                icon: "success"
            });
       </script>
    @endif
    

    <div class="card-header fs-5 text-center text-primary">
         {{__('Registro de Libros') }}
    </div>

    <div class="card-body text-justify">

        <form class="mb-3" action="/enviarLibro" method="POST">
            @csrf
            <div class="mb-3">
                <label for="isbn" class="form-label">{{__('ISBN') }}</label>
                <input type="number" class="form-control" min="0" name="txtISBN" id="isbn" value="{{old('txtISBN')}}">
                <small class="text-danger fst-bold">{{ $errors->first('txtISBN') }}</small>
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">{{__('Título') }}</label>
                <input type="text" class="form-control" name="txtTitulo" id="titulo" value="{{old('txtTitulo')}}">
                <small class="text-danger fst-bold">{{ $errors->first('txtTitulo') }}</small>
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">{{__('Autor') }}</label>
                <input type="text" class="form-control" name="txtAutor" id="autor" value="{{old('txtAutor')}}">
                <small class="text-danger fst-bold">{{ $errors->first('txtAutor') }}</small>
            </div>
            <div class="mb-3">
                <label for="paginas" class="form-label">{{__('Páginas') }}</label>
                <input type="number" class="form-control" name="txtPaginas" id="paginas" value="{{old('txtPaginas')}}">
                <small class="text-danger fst-bold">{{ $errors->first('txtPaginas') }}</small>
            </div>
            <div class="mb-3">
                <label for="año" class="form-label">{{__('Año') }}</label>
                <input type="number" class="form-control" name="txtAno" id="año" value="{{old('txtAno')}}">
                <small class="text-danger fst-bold">{{ $errors->first('txtAno') }}</small>
            </div>
            <div class="mb-3">
                <label for="editorial" class="form-label">{{__('Editorial') }}</label>
                <input type="text" class="form-control" name="txtEditorial" id="editorial" value="{{old('txtEditorial')}}">
                <small class="text-danger fst-bold">{{ $errors->first('txtEditorial') }}</small>
            </div>
            <div class="mb-3">
                <label for="emailEditorial" class="form-label">{{__('Email de Editorial') }}</label>
                <input type="email" class="form-control" name="txtEmailEditorial" id="emailEditorial" value="{{old('txtEmailEditorial')}}">
                <small class="text-danger fst-bold">{{ $errors->first('txtEmailEditorial') }}</small>
            </div>
    </div>

    <div class="card-footer text-muted">

    <div class="d-grid gap-2 mt-2 mb-1">
        <button type="submit" class="btn btn-success btn-sm"> {{__('Save Book') }}</button>
    </div>
</div>


@endsection