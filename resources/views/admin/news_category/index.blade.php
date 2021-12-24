@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-10 offset-1 mb-3">
                <a href="{{ url('news-category/form') }}" class="btn btn-primary"> Cadastrar Categoria de Notícias </a>
            </div>

            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h1> Categoria das Notícias </h1>
                    </div>

                    <div class="card-body">
                        @if(session('messageSuccess'))
                            <div class="alert alert-success"> {{ session('messageSuccess') }} </div>
                        @endif

                        @if(session('messageWarning'))
                            <div class="alert alert-warning"> {{ session('messageWarning') }} </div>
                        @endif

                        @if(count($newsCategories) == 0)
                            <div class="alert alert-danger"> Nenhuma categoria de notícias cadastrada </div>
                        @else
                            <table class='table table-striped'>
                                <thead>
                                    <tr>
                                        <th scope="col"> ID </th>
                                        <th scope="col"> NOME </th>
                                        <th scope="col" style="text-align: right"> OPÇÕES </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($newsCategories as $newCategory)
                                        <tr>
                                            <td>{{ $newCategory->id }}</td>
                                            <td>{{ $newCategory->name }}</td>
                                            <td style="text-align: right">
                                                <a href="{{ url('news-category/view') }}/{{ $newCategory->id }}" class="btn btn-warning"> <i class="far fa-eye"></i> </a>
                                                <a href="{{ url('news-category/form') }}/{{ $newCategory->id }}" class="btn btn-primary"> <i class="far fa-edit"></i> </a>
                                                <a href="{{ url('news-category/delete') }}/{{ $newCategory->id }}" class="btn btn-danger"> <i class="far fa-trash-alt"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>

                    @if(!$newsCategories->links())
                    <div class="card-footer">
                        {{ $newsCategories->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
