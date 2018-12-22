<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaTamanhoNoProdutos extends Migration
{
    
    public function up()
    {
        // Como a tabela já existe, usa o table
        Schema::table('produtos', function($table){
            $table->string('tamanho', 100);
        });
    }

    
    public function down()
    {
        Schema::table('produtos', function($table){
            $table->dropColumn('tamanho');
        });
    }
}
