@extends('adminlte::page')

@section('title', 'Novo Usuário')

@section('content_header')
    <h1>Novo Usuário</h1>
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
        <div class="card-body">
            <form class="form-horizontal" action="{{route('users.store')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">Nome completo</label>
                    <div class="col-sm-10">
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}">
                        <span class="error invalid-feedback">Por favor, insira seu nome completo.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">E-mail</label>
                    <div class="col-sm-10">
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}">
                        <span class="error invalid-feedback">Por favor, insira um endereço de e-mail válido.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">Senha</label>
                    <div class="col-sm-10">
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password">
                        <span class="error invalid-feedback">Por favor, sua senha deve ter mais de 4 caracteres.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">Confirmação da senha</label>
                    <div class="col-sm-10">
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation">
                        <span class="error invalid-feedback">Por favor, tenha certeza que digitou a mesma senha.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for=""></label>
                    <div class="col-sm-10">
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <input class="btn btn-success float-right" type="submit" value="Cadastrar">
        </div>
    </div>
@endsection
