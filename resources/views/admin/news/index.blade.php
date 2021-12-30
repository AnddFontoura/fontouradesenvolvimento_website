@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1 mb-3">
                <a href="{{ url('news') }}" class="btn btn-primary"> Cadastrar Notícias </a>
            </div>

            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h1> Notícias </h1>
                    </div>

                    <div class="card-body">
                        @if(session('messageSuccess'))
                            <div class="alert alert-success"> {{ session('messageSuccess') }} </div>
                        @endif

                        @if(session('messageWarning'))
                            <div class="alert alert-warning"> {{ session('messageWarning') }} </div>
                        @endif

                        @if(count($news) == 0)
                            <div class="alert alert-danger"> Nenhuma notícia cadastrada </div>
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
                                    @foreach($news as $new)
                                        <tr>
                                            <td>{{ $new->id }}</td>
                                            <td>{{ $new->name }}</td>
                                            <td style="text-align: right">
                                                <a href="{{ url('news/view') }}/{{ $new->id }}" class="btn btn-warning"> <i class="far fa-eye"></i> </a>
                                                <a href="{{ url('news/form') }}/{{ $new->id }}" class="btn btn-primary"> <i class="far fa-edit"></i> </a>
                                                <div class="btn btn-danger" id="deleteNews" data-id="{{ $new->id }}"> <i class="far fa-trash-alt"></i> </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>

                    @if(!$news->links())
                    <div class="card-footer">
                        {{ $news->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
<script>
    $('#deleteNews').on('click', function() {
        var id = $(this).data('id');

        Swal.fire({
            title: "Atenção!",
            text: "Você está prestes a deletar essa notícia, você tem certeza que deseja continuar?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, continuar'
        }).then((result) => {
            if (result.value) {
                var request = $.ajax({
                    url: "{{ url('news/delete/') }}" + "/" +id,
                    method: "POST",
                    data: { id : id },
                    dataType: "json"
                });

                request.done(function() {
                    Swal.fire({
                        title: 'Pronto!',
                        text: 'A alteração foi realizada com sucesso',
                        type: 'success',
                        buttons: true,
                    })
                        .then((buttonClick) => {
                            if (buttonClick) {
                                location.reload();
                            }
                        });
                });

                request.fail(function( ) {
                    Swal.fire(
                        'Erro',
                        'Algum problema aconteceu, certifique-se de que a conexão com a internet esteja OK e que você esteja logado no sistema.',
                        'error'
                    )
                });
            } else if (result.dismiss === 'cancel') {
                Swal.fire(
                    'Operação Cancelada',
                    'Nenhuma alteração foi realizada.',
                    'error'
                )
            }
        });
    });
</script>
@endsection
