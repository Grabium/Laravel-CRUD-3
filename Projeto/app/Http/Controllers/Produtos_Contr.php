<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class Produtos_Contr extends Controller
{
    public function loadPageEncontrar(){
        return view('buscarID');
    }
    
    public function encontrar(Request $request){
         $produto = Produto::findOrFail($request->id);
         //$statusOperacao = 'encontrado';
         return view('edicao', compact('produto'));//, 'statusOperacao'));
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
          return view('resultado', compact('produto', 'statusOperacao'));
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
  
    public function deletar(Request $request){
        $produto = Produto::findOrFail($request->id);
        $produtoDeletado = ['nome'=>$produto->nome, 'id'=>$produto->id];
        $produto->delete();
        $statusOperacao = 'deletado';
        return view('resultado', compact('produtoDeletado', 'statusOperacao'));
    }
}
