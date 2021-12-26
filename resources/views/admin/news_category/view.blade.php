@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h1> Categoria de Notícias </h1>
                    </div>

                    <div class="card-body">
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
        </div>
    </div>
@endsection
