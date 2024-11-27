@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <a href="{{ url('/anuncio/create  ') }}" class="align-text-right my-3 btn btn-success btn-md active" role="button" aria-pressed="true" aria-label="Criar novo anúncio">CRIAR</a>

            @if (session('mensagem'))
            <div class="alert alert-success my-3">
                {{ session('mensagem') }}
            </div>
            @endif


            <!-- VALIDAÇÃO DE EXISTENCIA DE ANUNCIO -->
            @if ($anuncios->isEmpty())
                <div class="alert alert-warning">
                    Não há anúncios cadastrados.
                </div>
                
            @else
                <table class='table table-striped'>
                    <tr>
                        <thead>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Categoria</th>
                            <th class='text-center'>Ações</th>
                        </thead>
                    </tr>

                    <tbody>
                        @foreach($anuncios as $value)
                        <tr>
                            <td>{{ $value->id}}</td>
                            <td>{{ $value->titulo}}</td>
                            <td>{{ $value->categoria->nome}}</td>
                            <td class='d-flex justify-content-around'>
                                <a href="{{ url('/anuncio/' . $value->id) }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Visualizar</a>

                                <a href="{{ url('/anuncio/' . $value->id) . '/edit' }}" class="btn btn-warning btn-sm active" role="button" aria-pressed="true">Editar</a>

                                <form method='POST' action="{{ url('/anuncio/' . $value->id) }}" onsubmit="return ConfirmDelete()">
                                    @method('DELETE')
                                    @csrf
                                    <input type='submit' class='btn btn-danger btn-sm active' value='Excluir'>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    <tbody>
                </table>
            @endif
        </div>
    </div>
</div>


<script>
    function ConfirmDelete() {
        return confirm('Tem certeza que deseja excluir este registro?');
    }
</script>

@endsection