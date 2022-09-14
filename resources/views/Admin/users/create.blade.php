@extends('adminlte::page')

@section('title', 'Novo Usuário')

@section('content_header')
    <h1>Novo Usuário</h1>
@endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h4>
                    <i class="icon fas fa-ban"></i>
                    Atenção!
                </h4>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form-horizontal" action="{{route('users.store')}}" method="POST">
        @csrf
        <div class="box-bode">
            <div class="form-group">
                <div class="row">
                    <label class="col-sm-2 control-label" for="">Nome Completo</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="name" value="{{old('name')}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-sm-2 control-label" for="">E-mail</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="{{old('email')}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-sm-2 control-label" for="">Senha</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" name="password">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-sm-2 control-label" for="">Confirmação da Senha</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" name="password_confirmation">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-sm-2 control-label" for=""></label>
                    <div class="col-sm-10">
                        <input class="btn btn-success" type="submit" value="Cadastrar">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
