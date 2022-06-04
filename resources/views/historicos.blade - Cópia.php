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
    <link rel="shortcut icon" href="logomarca10.png" type="image">
   
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">

  </head>
  <body>
<!----------------------------------------------------------------- M E N U -->    
<nav class="navbar navbar-light bg-white shadow-sm p-2">
  <!-- div class="container" -->
    <a class="navbar-brand" href="#">
      <img src="logomarca2.png" alt="" width="40" height="40">
      <div>
      <a class="btn btn-outline-primary" href="/">Clientes</a>
      <a class="btn btn-outline-primary" href="index.html">Cadastro</a>
      <a class="btn btn-outline-primary" href="historico.html">Histórico</a>
      </div>
    </a>
  <!-- /div -->
</nav>

<!---------------------------------------------------------- C O N T E U D O -->
<h2 style="text-align: center; color:#A020F0;">Histórico do Cliente</h2> 

<div class="p-2"></div>
  <div class ="container" id="recibo">
    <div style="border: 0px solid gray; border-radius: 25px; padding: 17px; margin: 8px; background-color:#E6E6FA;">  
    
    <form class="row g-0" action="/historico-deletar-api/}" method="POST">
      <!-- 2 COLUNAS ------------------------------------------------------------------------- -->  
        <div class="col-md-9">
          <label class="form-label">Nome</label>
          <input type="text" class="form-control form-control-sm"  name="nome" value="{{$cliente->nome}}">
        </div>
        <div class="col-md-2">
          <label class="form-label">Data início</label>
          <input type="text" class="form-control form-control-sm" name="data" value="{{$cliente->data->format('d/m/Y')}}">
        </div>
        <div class="col-md-1">
          <label class="form-label">Cód Cliente</label>
          <input type="text" class="form-control form-control-sm" disabled="disabled" name="id" value="{{$cliente->id}}">
        </div>

      <!-- 1 COLUNA ------------------------------------------------------------------------- --> 
        <div class="col-12">
          <label class="form-label">Endereço</label>
          <input type="text" class="form-control form-control-sm" name="idd" value="{{$cliente->morada}}">
        </div>  
      
      <!-- 4 COLUNAS ------------------------------------------------------------------------- --> 
        <div class="col-md-3">
          <label class="form-label">Data de nascimento</label>
          <input type="text" class="form-control form-control-sm" name="nascimento" value="{{$cliente->nascimento->format('d/m/Y')}}">
        </div>
        <div class="col-md-3">
          <label class="form-label">Indicação</label>
          <input type="text" class="form-control form-control-sm" name="indicacao" value="{{$cliente->indicacao}}">
        </div>
        <div class="col-md-3">
          <label class="form-label">N.º de sessões</label>
          <input type="text" class="form-control form-control-sm" name="qtdsessoes" value="{{$cliente->qtdsessoes}}">
        </div>

      <!-- 4 COLUNAS ------------------------------------------------------------------------- --> 
        <div class="col-md-3">
          <label class="form-label">Escolaridade</label>
          <input type="text" class="form-control form-control-sm" name="qtdsessoes" value="{{$cliente->escolaridade}}">
        </div>
        <div class="col-md-3">
          <label class="form-label">Telefone</label>
          <input type="text" class="form-control form-control-sm" name="telefone" value="{{$cliente->telefone}}">
        </div>
        <div class="col-md-4">
          <label class="form-label">email</label>
          <input type="email" class="form-control form-control-sm" name="email" value="{{$cliente->email}}">
        </div>
        <div class="col-md-2">
          <label class="form-label">NIF</label>
          <input type="text" class="form-control form-control-sm" name="nif" value="{{$cliente->nif}}">
        </div>
        <div class="col-md-12">
          <label class="form-label">Agregado familiar</label>
          <input type="text" class="form-control form-control-sm" name="familiar" value="{{$cliente->familiar}}">
        </div>
      
      <!-- --------------------------------------------------------------------QUEIXAS------------- --> 
        <div class="col-12">
          <label class="form-label">Queixa principal</label>
          <input type="text" class="form-control form-control-sm" name="queixa" value="{{$cliente->queixa}}">
        </div>
        </br>

    </div>
  </div>

<!------------------------------------------------------ Button trigger modal incluir -->
<div class="container">
  <div style="border: 1px solid gray; width: 50px; border-radius: 10px; padding: 10px; margin: 7px; background-color:#E6E6FA;">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Incluir </button>
  </div>
</div>

  <!-- -------------------------------------------------------------------HISTÓRICOS------------ -->  
    <div class="container" style="border-radius: 25px; padding: 5px;">
      @foreach ($historicos as $historico)     
      <div class="row g-1 b-0" style="border: 1px solid #E6E6FA; border-radius: 25px; padding: 17px; margin: 8px; background-color:#F8F8FF;">
        <div class="col-4">
          <label class="form-label">Data do histórico</label>
          <input type="text" class="form-control form-control-sm" name="datah" value="{{$historico->datah->format('d/m/Y')}}">
        </div>
        
        <div class="col-6" style="align-items: center;">
          <label class="form-label"></label>
          <div>
            <span> <a class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">editModal</a></span>                         
            <span> <a class="btn btn-sm btn-outline-primary" href="/historico-deletar-api/{{$historico->id}}/{{$historico->idc}}">Apagar</a></span>            
          </div>  
        </div>
      
        <div class="col-12" style="padding-bottom: 10px;">
          <article>
            <label class="form-label">Histórico</label>
            <input type="text" class="form-control form-control-sm" name="historico" value="{{$historico->descricao}}">
        </div>
      </div>  
      @endforeach
    </div>
  
</form>

<!-------------------------------------------------------------- M O D A L  Historico Incluir -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3" action="/historico-cadastro-api/" method="POST">
          @csrf
            <div>
              <input type="hidden" class="form-control" name="id" value="{{$cliente->id}}">
            </div>

            <div>
              <label class="form-label">Data</label>
              <input type="date" class="form-control" name="data">
            </div>
            
            <div>
              <label for="inputEmail4" class="form-label">Histórico</label>
              <input type="text" class="form-control" name="historico">
            </div>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-------------------------------------------------------------- M O D A L  Historico Editar -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3" action="/historico-cadastro-api/" method="POST">
          @csrf
            <div>
              <input type="hidden" class="form-control" name="id" value="{{$cliente->id}}">
            </div>

            <div>
              <label class="form-label">Data</label>
              <input type="date" class="form-control" name="data">
            </div>
            
            <div>
              <label for="inputEmail4" class="form-label">Histórico</label>
              <input type="text" class="form-control" name="historico">
            </div>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-------------------------------------------------------------- F O O T E R -->    
<footer class="pt-4 my-md-5 pt-md-5 border-top p-2">
    <div class="row">
        <div class="col-12 col-md">
            <img class="mb-2" src="mylogomarca.png" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; MyTech 2022</small>
        </div>          
    </div>
</footer>

<script>
    
</script>

</body>
</html>
