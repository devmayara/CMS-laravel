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

    <style>
        .tox-notifications-container{ display: none !important; }
    </style>

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
                        <textarea class="form-control bodyfield" name="body">{{old('body')}}</textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input class="btn btn-success float-right" type="submit" value="Criar">
            </div>
        </form>
    </div>

    <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js' referrerpolicy='origin'></script>
    <script>
        tinymce.init({
            selector: 'textarea.bodyfield',
            height:300,
            menubar: false,
            plugins:['link', 'table', 'image', 'autoresize', 'lists'],
            toolbar:'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | table | link image | bullist numlist',
            content_css:[
                '{{asset('assets/css/content.css')}}'
            ],
            images_upload_url:'{{route('imageupload')}}',
            images_upload_credentials: true
        });
    </script>

@endsection
