@extends('principal')

@section('conteudo')
    <h2>Detalhes de produto: {{$produto->nome}}</h2>
    <ul>
        <li>Descrição: {{$produto->descricao or 'Não possui descrição'}}</li>
        <li>Valor: {{$produto->valor}}</li>
        <li>Quantidade: {{$produto->quantidade}}</li>
    </ul>
@stop
