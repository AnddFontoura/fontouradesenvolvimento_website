@extends('layouts.website')

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <a class="btn btn-success" href="{{ url('admin/news') }}"> Listar Notícias </a>
        </div>
        
        <div class="col-md-12">
            <form action="{{ url('admin/news/save') }}@if(isset($news)){!! '/' . $news->id !!}@endif" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h1> Cadastro de Notícias </h1>
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
                            <span> Categoria da Notícia </span>
                            <select class='select2 form-control' name='news_category_id' required> 
                                @foreach($newsCategories as $newsCategory)
                                    <option value="{{ $newsCategory->id }}"> {{ $newsCategory->name }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <span> Nome da Notícia </span>
                            <input class="form-control" type="text" maxlength="250" name="title" required value="@if(isset($news)){{ $news->name }}@else{{ old('name') }}@endif">
                        </div>

                        <div class="form-group mb-3">
                            <span> Descrição da Notícia </span>
                            <textarea id="summernote" class="form-control" name="description" required>@if(isset($news)){{ $news->description }}@else{{ old('description') }}@endif</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <span> Imagem do cabeçalho </span>
                            <input class="form-control" type="file" name="header_image">
                        </div>

                        <div class="form-group mb-3">
                            <span> Imagem do rodapé </span>
                            <input class="form-control" type="file" name="footer_image">
                        </div>
                    </div>

                    <div class="card-footer">
                        <input type="submit" class="btn @if(isset($news)) btn-primary @else btn-success @endif" value="@if(isset($news)) {!! 'Atualizar' !!}@else{!! 'Cadastrar' !!}@endif Notícias">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
