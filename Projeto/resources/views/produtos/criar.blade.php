<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, inicial-scale=1.0"> 
  	<meta http-equiv="X-UA-Compatible" content="i-edge">
  	<title>Criação de Produto</title>
  </head>
  <body>
    <h4>Preencha os campos abaixo:</h4>
    <form action="{{ route('criar') }}" method="POST">
        @csrf
        <label for="">Nome</label><br />
        <input type="text" name="nome"><br />
        <label for="">Custo</label><br />
        <input type="text" name="custo"><br />
        <label for="">Preço</label><br />
        <input type="text" name="preco"><br />
        <label for="">Quantidade</label><br />
        <input type="text" name="quantidade"><br />
        <button>Salvar</button>
    </form>
    <br />
    <button><a href="{{ route('home') }}">Cancelar</a></button>
  </body>
</html>