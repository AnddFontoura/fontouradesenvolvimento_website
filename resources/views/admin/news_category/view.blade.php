@extends('layouts.website')

@section('content')
    <div class="row">
        
        <div class="col-md-12 mb-3">
            <a href="{{ url('admin/news-category/form') }}" class="btn btn-primary"> Cadastrar Categoria de Notícias </a>
            <a href="{{ url('admin/news-category') }}" class="btn btn-secondary"> Listar Categoria de Notícias </a>
        </div>

        <div class="col-md-12">
            <div class="blog-post">
                <h2 class="blog-post-title mb-3"> Categoria de Notícias </h2>
            
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                        <h3> Nome </h3>
                        <p> {{ $newsCategory->name }} </p>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                        <h3> Icone </h3>
                        <p> {{ $newsCategory->icon_image }} </p>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                        <h3> Imagem </h3>
                        <p> {{ $newsCategory->image_path }} </p>
                    </div>

                    <div class="col-12 mb-3">
                        <h3> Descrição </h3>
                        <p> {{ $newsCategory->description1 }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
