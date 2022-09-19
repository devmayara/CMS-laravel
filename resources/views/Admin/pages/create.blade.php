@extends('adminlte::page')

@section('title', 'Nova Página')

@section('content_header')
    <h1>Nova Página</h1>
@endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <ul>
                <h5>
                    <i class="icon fas fa-ban"></i>
                    Atenção!
                </h5>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <form class="form-horizontal" action="{{route('pages.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">Título</label>
                    <div class="col-sm-10">
                        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{old('title')}}">
                        <span class="error invalid-feedback">Por favor, insira o título.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">Corpo</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="body">{{old('body')}}</textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input class="btn btn-success float-right" type="submit" value="Criar">
            </div>
        </form>
    </div>
@endsection
