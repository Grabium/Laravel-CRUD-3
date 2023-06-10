<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, inicial-scale=1.0"> 
  	<meta http-equiv="X-UA-Compatible" content="i-edge">
  	<title>Deletar Produto</title>
  </head>
  <body>
    <h4>Tem certeza de que deseja DELETAR o item n° {{ $produto->id }} ?</h4>
    <form action="{{ route('deletar',['id'=>$produto->id]) }}" method="post">
      @csrf
      <label for="">Nome</label><br />
      <input type="text" name="nome" value="{{ $produto->nome }}"><br />
      <button>Excluir</button>
    </form>
    <br />
    <button><a href="{{ route('home') }}">Home</a></button>
  </body>
</html>