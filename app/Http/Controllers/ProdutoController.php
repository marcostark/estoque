<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use App\Produto;
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller {

    public function lista() {

        //$produtos = DB::select('select * from produtos');
        $produtos = Produto::all();
        return view('listagem')->with('produtos', $produtos);
    }

    //public function detalhe() {
    public function detalhe($id) {

        //$id = Request::route('id');
        //$produto = DB::select('select * from produtos where id = ? ', [$id]);
        $produto = Produto::find($id);

        return view('detalhes')->with('p', $produto);
        
    }

    public function novo() {
        return view('formulario');
    }

    public function adiciona(ProdutoRequest $request) {
        // Pegar as informações do formulario e salvar no banco de dados

        // 0.1
        // $nome = Request::input('nome');
        // $valor = Request::input('valor');
        // $quantidade = Request::input('quantidade');
        // $descricao = Request::input('descricao');
        //DB::insert('insert into produtos (nome, valor, descricao, quantidade) values (?,?,?,?)', 
        //array($nome, $valor, $descricao, $quantidade));

        //0.2
        // $produto = new Produto();
        // $produto->nome = Request::input('nome');
        // $produto->valor = Request::input('valor');
        // $produto->quantidade = Request::input('quantidade');
        // $produto->descricao = Request::input('descricao');
        // $produto->save();

        //0.3
        // $params = Request::all();
        // $produto = new Produto($params);  
        // $produto->save();        

        //0.4 - Criando o produto a partir de todos os dados da requisição
        Produto::create($request->all());

        return redirect('/produtos')->withInput();
    }

    //public function remove () {
    public function remove ($id) {
        
        // Pegando o id do produto na requisição
        //$id = Request::route('id');

        $produto = Produto::find($id);
        $produto->delete();

        //return redirect('/produtos');
        return redirect()->action('ProdutoController@lista');
    }
}