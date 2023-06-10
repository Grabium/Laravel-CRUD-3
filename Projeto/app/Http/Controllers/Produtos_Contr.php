<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class Produtos_Contr extends Controller
{
    public function loadPageBuscarID(){
        return view('/produtos/buscarID');
    }
    
    public function buscarID(Request $request){
         $produto = Produto::findOrFail($request->id);
         return view('/produtos/edicao', compact('produto'));
    }

    public function index(){
        $todos = Produto::all();
        return $todos;
    }
  
    public function atualizar(Request $request, $id){

        
        $produto = Produto::findOrFail($id);
        $produto->update([
                'nome'       => $request->nome,
                'custo'      => $request->custo,
                'preco'      => $request->preco,
                'quantidade' => $request->quantidade
          ]);
          $statusOperacao = 'atualizado';
          $produto = Produto::findOrFail($request->id);
          return view('/produtos/resultado', compact('produto', 'statusOperacao'));
    }

    public function loadPageCriar(){
        return view('/produtos/criar');
    }
      
    public function criar(Request $request){
        
        
        $produtoCriado = $request;
        Produto::create([
            'nome'=>$request->nome,
            'custo'=>$request->custo,
            'preco'=>$request->preco,
            'quantidade'=>$request->quantidade,
        ]);
        
        $statusOperacao = 'criado'; 
        //$produtoCriado = Produto::findOrFail($produtoCriado);//talvez tenha que escluir esta informacao.
        //dd($produtoCriado);
        return view('/produtos/resultado', compact('produtoCriado', 'statusOperacao'));
    }

    public function loadPageDeletar(Request $request, $id){

        $produto = $request;
        return view('/produtos/confirmarDelete', compact('produto', 'id'));
    }
  
    public function deletar(Request $request, $id){
        $produto = Produto::findOrFail($id);
        //$produtoDeletado = ['nome'=>$produto->nome, 'ident'=>$produto->id];
        //dd($produtoDeletado);
        $produto->delete();
        $statusOperacao = 'deletado';
        return view('/produtos/resultado', compact('statusOperacao'));
    }
}
