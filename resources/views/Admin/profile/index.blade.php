@extends('adminlte::page')

@section('title', 'Meu Perfil')

@section('content_header')
    <h1>Meu Perfil</h1>
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
        <form class="form-horizontal" action="{{route('profile.save')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">Nome completo</label>
                    <div class="col-sm-10">
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$user->name}}">
                        <span class="error invalid-feedback">Por favor, insira seu nome completo.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">E-mail</label>
                    <div class="col-sm-10">
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{$user->email}}">
                        <span class="error invalid-feedback">Por favor, insira um endereço de e-mail válido.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">Nova senha</label>
                    <div class="col-sm-10">
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password">
                        <span class="error invalid-feedback">Por favor, sua senha precisa de pelo menos 4 caracteres.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="">Confirmação da senha</label>
                    <div class="col-sm-10">
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation">
                        <span class="error invalid-feedback">Por favor, tenha certeza que digitou a mesma senha.</span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input class="btn btn-success float-right" type="submit" value="Salvar">
            </div>
        </form>
    </div>
@endsection
