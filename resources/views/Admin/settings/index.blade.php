@extends('adminlte::page')

@section('title', 'Configurações')

@section('content_header')
    <h1>Configurações</h1>
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

@if (session('warning'))
<div class="alert alert-success">
    {{session('warning')}}
</div>
@endif

    <div class="card">
        <form class="form-horizontal" action="{{route('settings.save')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">Título do site</label>
                    <div class="col-sm-10">
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="title" value="{{$settings['title']}}">
                        {{-- <span class="error invalid-feedback">Por favor, insira seu nome completo.</span> --}}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">Sub-título do site</label>
                    <div class="col-sm-10">
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="subtitle" value="{{$settings['subtitle']}}">
                        {{-- <span class="error invalid-feedback">Por favor, insira seu nome completo.</span> --}}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">E-mail para contato</label>
                    <div class="col-sm-10">
                        <input class="form-control @error('name') is-invalid @enderror" type="email" name="email" value="{{$settings['email']}}">
                        {{-- <span class="error invalid-feedback">Por favor, insira seu nome completo.</span> --}}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">Cor do fundo</label>
                    <div class="col-sm-2">
                        <input class="form-control @error('name') is-invalid @enderror" type="color" name="bgcolor" value="{{$settings['bgcolor']}}">
                        {{-- <span class="error invalid-feedback">Por favor, insira seu nome completo.</span> --}}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">Cor do texto</label>
                    <div class="col-sm-2">
                        <input class="form-control @error('name') is-invalid @enderror" type="color" name="textcolor" value="{{$settings['textcolor']}}">
                        {{-- <span class="error invalid-feedback">Por favor, insira seu nome completo.</span> --}}
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input class="btn btn-success float-right" type="submit" value="Salvar">
            </div>
        </form>
    </div>
@endsection
