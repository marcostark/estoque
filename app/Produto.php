<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // Não salvar as informações de tempo
    public $timestamps = false;

    // Configurar uma tabela de nome diferente do nome do modelo
    // A convensão do laravel usa o nome do modelo com inicial minuscula
    // e no plural para associar o nome das tabelas do banco de dados
    protected $table = 'produtos';

    //Informando quais campos poderão ser salvos no banco de dados
    // Qlqr outro valor passado na requisição será ignorado
    protected $fillable = 
        array('nome','valor','tamanho','descricao','quantidade');
}
