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

   
<form action="/login" method="get">
    {{-- <form action="/produtos/adiciona" method="POST"> --}}

{{-- <input type="hidden" name="_token" value=" {{ csrf__token() }} " /> --}}
    @csrf

    <div class="form-group" >
        <label for="">Email</label>
        <input name="email" type="text" class="form-control" />
    </div>

    <div class="form-group" >
        <label for="">Senha</label>
        <input name="password" type="password" class="form-control" />
    </div>

    <button class="btn btn-primary btn-block" type="submit">Login</button>
</form>
@stop