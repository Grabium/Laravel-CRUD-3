<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, inicial-scale=1.0"> 
  	<meta http-equiv="X-UA-Compatible" content="i-edge">
  	<title>Ver Produto</title>
  </head>
  <body>
    <h1>Escolha a operação:</h1>
    Crie ou busque um item para atualizar ou deletar<br />
    <button><a href="{{-- route('loadPageBuscarID') --}}">Buscar</a></button><br />
    <button><a href="{{ route('loadPageCriar') }}">Criar</a></button><br />
  </body>
</html>