@extends('layouts.website')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1> Notícia </h1>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                            <h3> Imagem </h3>
                            <p> {{ $news->image_header }} </p>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                            <h3> Título </h3>
                            <p> {{ $news->title }} </p>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                            <h3> Descrição </h3>
                            <p> {{ $news->description }} </p>
                        </div>

                        <div class="col-12 mb-3">
                            <h3> Postado por: </h3>
                            <p> {{ $news->user->name }} </p>
                        </div>

                        <div class="col-12 mb-3">
                            <h3> Categoria: </h3>
                            <p> {{ $news->newsCategory->name }} </p>
                        </div>

                        <div class="col-12 mb-3">
                            <h3> Imagem do footer </h3>
                            <p> {{ $news->image_footer }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
