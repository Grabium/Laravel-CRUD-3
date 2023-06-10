<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, inicial-scale=1.0"> 
  	<meta http-equiv="X-UA-Compatible" content="i-edge">
  	<title>Concluído</title>
  </head>
  <body>
    @switch($statusOperacao)

      @case('atualizado')
    <h4>O produto {{ $produto->id }} foi atualizado.</h4>
    <label >ID:........... {{ $produto->id }} .</label><br />
    <label >Nome:......... {{ $produto->nome }} .</label><br />
    <label >Custo:........ R${{ $produto->custo }} .</label><br />
    <label >Preço:........ R${{ $produto->preco }} .</label><br />
    <label >Quantidade:... {{ $produto->quantidade }} .</label><br />    
    <br />
      @break
      @case('criado')
    <h4>Produto "{{ $produtoCriado->nome }}" criado com sucesso!.</h4>
    <!--<label >ID:........... {{-- $produtoCriado->id --}} .</label><br />-->
    <label >Nome:......... {{ $produtoCriado->nome }} .</label><br />
    <label >Custo:........ R${{ $produtoCriado->custo }} .</label><br />
    <label >Preço:........ R${{ $produtoCriado->preco }} .</label><br />
    <label >Quantidade:... {{ $produtoCriado->quantidade }} .</label><br /> 
      @break
      @case('deletado')
      
    <h4>O item foi DELETADO!.</h4>
 
      @break
    @endswitch
    <button><a href="{{ route('home') }}">Início</a></button>
  </body>
</html>