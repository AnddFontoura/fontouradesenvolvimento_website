@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1">
                <form action="{{ url('news-category/save') }}@if(isset($newsCategory)){!! '/' . $newsCategory->id !!}@endif" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1> Cadastro de Categoria das Notícias </h1>
                        </div>

                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group mb-3">
                                <span> Nome da Categoria </span>
                                <input class="form-control" type="text" maxlength="250" name="name" required value="@if(isset($newsCategory)) {{ $newsCategory->name }} @else {{ old('name') }} @endif">
                            </div>

                            <div class="form-group mb-3">
                                <span> Descrição da Categoria </span>
                                <textarea id="summernote" class="form-control" name="description" required> @if(isset($newsCategory)) {{ $newsCategory->description }} @else {{ old('description') }} @endif </textarea>
                            </div>

                            <div class="form-group mb-3">
                                <span> Icone </span>
                                <input class="form-control" type="text" maxlength="250" name="icon_image" value="@if(isset($newsCategory)) {{ $newsCategory->icon_image }} @else {{ old('icon_image') }} @endif">
                            </div>

                            <div class="form-group mb-3">
                                <span> Nome da Categoria </span>
                                <input class="form-control" type="file" name="image_path">
                            </div>
                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn @if(isset($newsCategory)) btn-primary @else btn-success @endif" value="@if(isset($newsCategory)) {!! 'Atualizar' !!}@else{!! 'Cadastrar' !!}@endif Categoria de Notícias">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
