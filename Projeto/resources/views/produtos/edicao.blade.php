<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, inicial-scale=1.0"> 
  	<meta http-equiv="X-UA-Compatible" content="i-edge">
  	<title>Edição do Produto</title>
  </head>
  <body>
    <h4>Altere ou delete o produto: {{ $produto->nome }}.</h4>
    <form action="{{ route('atualizar',['id'=>$produto->id]) }}" method="post">
      @csrf
      <label for="">Nome</label><br />
      <input type="text" name="nome" value="{{ $produto->nome }}"><br />
      <label for="">Custo</label><br />
      <input type="text" name="custo" value="{{ $produto->custo }}"><br />
      <label for="">Preço</label><br />
      <input type="text" name="preco" value="{{ $produto->preco }}"><br />
      <label for="">Quantidade</label><br />
      <input type="text" name="quantidade" value="{{ $produto->quantidade }}"><br />
      <input type="submit" value="Atualizar">
      <input type="submit" value="Deletar" formaction="{{ route('loadPageDeletar',['id'=>$produto->id]) }}" method="get">
    </form>
    <br />
    <button><a href="{{ route('home') }}">Início</a></button>
  </body>
</html>