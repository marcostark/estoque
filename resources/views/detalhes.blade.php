@extends('principal')

@section('conteudo')
    <h2>Detalhes de produto: {{$p->nome}}</h2>
    <ul>
        <li>Descrição: {{$p->descricao or 'Não possui descrição'}}</li>
        <li>Valor: {{$p->valor}}</li>
        <li>Quantidade: {{$p->quantidade}}</li>
    </ul>        
@stop
