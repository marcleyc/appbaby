<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Marcley">
 
    <title>appBaby</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap CSS JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Favicons -->
    <link rel="shortcut icon" href="logomarca.png" type="image">
   
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">

  </head>
  <body>
<!----------------------------------------------------------------- M E N U -->    
<nav class="navbar navbar-light bg-white shadow-sm p-2">
  <!-- div class="container" -->
    <a class="navbar-brand" href="#">
      <img src="logomarca.png" alt="" width="40" height="40">
      <div>
      <a class="btn btn-outline-primary" href="/">Clientes</a>
      <a class="btn btn-outline-primary" href="/cliente-cadastro">Cadastro</a>
      <a class="btn btn-outline-primary" href="/cliente-editar/1">Relatórios</a>
      </div>
    </a>
  <!-- /div -->
</nav>

<!---------------------------------------------------------- C O N T E U D O -->

<div class="p-2"></div>
<div class ="container" id="recibo">
<button type="submit">Adicionar</button> 
<div>
  <h1 style="text-align: center;">Cadastro do cliente</h1>
</div>

<!- --------------------------------------------------------------------------------- ->
  <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Data</th>
      <th scope="col">Nickname</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clientes as $cliente)
    <tr>
      <th scope="row">{{$cliente->id}}</th>
      <td class="col-sm-2">{{$cliente->nome}}</td>
      <td class="col-sm-2">{{$cliente->data->format('d/m/Y')}}</td>
      <td class="col-sm-6">@mdo</td>
    </tr>
    @endforeach    
  </tbody>
</table>
<!- --------------------------------------------------------------------------------- -> 

<table class="table table-borderless" class="row g-1 b-0">
  <caption>Lista de usuários</caption>
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Data início</th>
      <th scope="col">Cód Cliente</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clientes as $cliente)
    <tr>
      <td class="col-sm-6"><span class="form-control form-control-sm">{{$cliente->nome}}</span></td>
      <td class="col-sm-2"><span class="form-control form-control-sm">{{$cliente->data->format('d/m/Y')}}</span></td>
      <td class="col-sm-1"><span class="form-control form-control-sm">{{$cliente->id}}</span></td>
      <td class="col-sm-2">
        <a class="btn btn-sm btn-outline-primary" href="/cliente/{{$cliente->id}}">Historico</a>
        <a class="btn btn-sm btn-outline-primary" href="/cliente-editar/{{$cliente->id}}">Editar</a>
        <a class="btn btn-sm btn-outline-primary" href="/cliente-deletar-api/{{$cliente->id}}">Apagar</a>
      </td>  
    </tr>
    @endforeach
  </tbody>
</table>

<!- --------------------------------------------------------------------------------- ->
<div class="row g-1 b-0" method="GET">
    <div class="col-sm-8"><label class="form-label">Nome</label></div>
    <div class="col-sm-2"><label class="form-label">Data início</label></div>
    <div class="col-sm-1"><label class="form-label">Cód Cliente</label></div>
    <div class="col-sm-1"><label class="form-label"></label></div>
@foreach ($clientes as $cliente)
    <div class="col-sm-8"><input type="text" class="form-control form-control-sm"  name="nome" value="{{$cliente->nome}}"></div>
    <div class="col-sm-2"><input type="text" class="form-control form-control-sm" name="data" value="{{$cliente->data->format('d/m/Y')}}"></div>
    <div class="col-sm-1"><input type="text" class="form-control form-control-sm" disabled="disabled" name="id" value="{{$cliente->id}}"></div>
    <div class="col-sm-1"> <a class="btn btn-sm btn-outline-primary" href="/cliente-editar/{{$cliente->id}}">Editar</a></div>
@endforeach    
</div>

<!-------------------------------------------------------------- F O O T E R -->    
<footer class="pt-4 my-md-5 pt-md-5 border-top p-2">
    <div class="row">
        <div class="col-12 col-md">
            <img class="mb-2" src="logomarca.png" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; MyTech 2022</small>
        </div>          
    </div>
</footer>

<script>
    
</script>

</body>
</html>

<!--
<form class="row g-3" method="GET">
    <div class="col-sm-8"><label class="form-label">Nome</label></div>
    <div class="col-sm-2"><label class="form-label">Data início</label></div>
    <div class="col-sm-1"><label class="form-label">Cód Cliente</label></div>
    <div class="col-sm-1"><label class="form-label"></label></div>
@foreach ($clientes as $cliente)
    <div class="col-sm-8"><input type="text" class="form-control form-control-sm"  name="nome" value="{{$cliente->nome}}"></div>
    <div class="col-sm-2"><input type="text" class="form-control form-control-sm" name="data" value="{{$cliente->data->format('d/m/Y')}}"></div>
    <div class="col-sm-1"><input type="text" class="form-control form-control-sm" disabled="disabled" name="id" value="{{$cliente->id}}"></div>
    <div class="col-sm-1"> <a class="btn btn-sm btn-outline-primary" href="/cliente-editar/{{$cliente->id}}">Editar</a></div>
@endforeach    
</form>
->
