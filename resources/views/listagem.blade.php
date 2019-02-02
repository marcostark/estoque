
@extends('principal')

@section('conteudo')
    <h1>Listagem de produtos</h1>

    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Tamanho</th>
            <th>Opções</th>
        </tr>

        @foreach($produtos as $p)
        <tr class="{{ $p->quantidade <= 2 ? 'danger' : '' }}">
            <td>{{ $p->nome }}</td>
            <td>{{ $p->valor }}</td>
            <td>{{ $p->descricao }}</td>
            <td>{{ $p->quantidade }} </td>
            <td>{{ $p->tamanho }} </td>
            <td>
                <a href="/produtos/detalhe/{{$p->id}}">
                    <span class="glyphicon glyphicon-search" aria-hidden="true" >
                    Visualizar</span>
                </a> |

                <a href="/produtos/remove/{{$p->id}}">
                    <span class="glyphicon glyphicon-search" aria-hidden="true" >
                    Remover</span>
                </a> |
                <a href="{{action('ProdutoController@downloadPDF', $p->id)}}">
                    PDF
                </a>
            </td>
        </tr>
        @endforeach
    </table>

@if(old('nome'))
    <div class="alert alert-success">
        Produto {{old('nome')}} adicionado com sucesso
    </div>
@endif
<h4>
    <span class="label label-danger pull-right">
        Um ou menos itensn no estoque </span>
</h4>
@stop
