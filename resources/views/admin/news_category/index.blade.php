@extends('layouts.website')

@section('content')
    <div class="row">

        <div class="col-md-12 mb-3">
            <a href="{{ url('admin/news-category/form') }}" class="btn btn-primary"> Cadastrar Categoria de Notícias </a>
        </div>

        <div class="col-md-12">
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
                                            <a href="{{ url('admin/news-category/view') }}/{{ $newCategory->id }}" class="btn btn-warning"> <i class="far fa-eye"></i> </a>
                                            <a href="{{ url('admin/news-category/form') }}/{{ $newCategory->id }}" class="btn btn-primary"> <i class="far fa-edit"></i> </a>
                                            <div class="btn btn-danger deleteNewsCategory" id="" data-id="{{ $newCategory->id }}"> <i class="far fa-trash-alt"></i> </div>
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
@endsection

@section('page_js')
<script>
    $('.deleteNewsCategory').on('click', function() {
        var id = $(this).data('id');

        Swal.fire({
            title: "Atenção!",
            text: "Você está prestes a deletar dessa categoria, você tem certeza que deseja continuar?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, continuar'
        }).then((result) => {
            if (result.value) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var request = $.ajax({
                    url: "{{ url('admin/news-category/delete') }}",
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
