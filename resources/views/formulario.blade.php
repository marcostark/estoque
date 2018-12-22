@extends('principal')

@section('conteudo')

@if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>    
@endif

   
<form action="/produtos/adiciona" method="post">
    {{-- <form action="/produtos/adiciona" method="POST"> --}}

{{-- <input type="hidden" name="_token" value=" {{ csrf__token() }} " /> --}}
    @csrf

    <div class="form-group" >
        <label for="">Nome</label>
        <input name="nome" type="text" class="form-control" />
    </div>

    <div class="form-group" >
        <label for="">Valor</label>
        <input name="valor" type="text" class="form-control" />
    </div>

    <div class="form-group" >
        <label for="">Quantidade</label>
        <input name="quantidade" type="text" class="form-control" />
    </div>

    <div class="form-group" >
        <label for="">Tamanho</label>
        <input name="tamanho" type="text" class="form-control" />
    </div>

    <div class="form-group" > 
        <label for="">Descrição</label>
        <input name="descricao" type="text" class="form-control" />
    </div>
    
    <button class="btn btn-primary btn-block" type="submit">Adicionar</button>
</form>
@stop