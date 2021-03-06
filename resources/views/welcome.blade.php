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
      <a class="btn btn-outline-primary" href="index.html">Clientes</a>
      <a class="btn btn-outline-primary" href="index.html">Cadastro</a>
      <a class="btn btn-outline-primary" href="historico.html">Histórico</a>
      </div>
    </a>
  <!-- /div -->
</nav>

<!---------------------------------------------------------- C O N T E U D O -->

<div class="p-2"></div>
<div class ="container" id="recibo">
<h1 style="text-align: center;">Cadastro do cliente</h1>
<form class="row g-3" action="/cadastrar" method="POST">
@csrf
  <!-- 2 COLUNAS ------------------------------------------------------------------------- -->  
    <div class="col-md-9">
      <label for="inputEmail4" class="form-label">Nome</label>
      <input type="text" class="form-control" id="inputEmail4" name="nome">
    </div>
    <div class="col-md-2">
      <label for="inputPassword4" class="form-label">Data início</label>
      <input type="date" class="form-control" id="inputPassword4" name="data">
    </div>
    <div class="col-md-1">
      <label for="inputPassword4" class="form-label">Cód Cliente</label>
      <input type="text" class="form-control" id="inputPassword4" disabled="disabled" name="id">
    </div>

  <!-- 1 COLUNA ------------------------------------------------------------------------- --> 
    <div class="col-12">
      <label for="inputAddress" class="form-label">Endereço</label>
      <input type="text" class="form-control" id="inputAddress" name="morada">
    </div>  
  
  <!-- 4 COLUNAS ------------------------------------------------------------------------- --> 
    <div class="col-md-3">
      <label for="inputCity" class="form-label">Data de nascimento</label>
      <input type="date" class="form-control" id="id" name="nascimento">
    </div>
    <div class="col-md-3">
      <label for="inputCity" class="form-label">Idade</label>
      <input type="text" class="form-control" id="id" name="idade">
    </div>
    <div class="col-md-3">
      <label for="inputCity" class="form-label">Indicação</label>
      <input type="text" class="form-control" id="id" name="indicacao">
    </div>
    <div class="col-md-3">
      <label for="inputCity" class="form-label">N.º de sessões</label>
      <input type="text" class="form-control" id="id" name="qtdsessoes">
    </div>

  <!-- 4 COLUNAS ------------------------------------------------------------------------- --> 
    <div class="col-md-3">
      <label for="inputState" class="form-label">Escolaridade</label>
      <select id="inputState" class="form-select" name="escolaridade">
        <option selected>Escolha...</option>
        <option>Mestrado</option>
        <option>Superior</option>
        <option>Secundário</option>
      </select>
    </div>
    <div class="col-md-3">
      <label for="inputCity" class="form-label">Telefone</label>
      <input type="text" class="form-control" id="id" name="telefone">
    </div>
    <div class="col-md-4">
      <label for="inputCity" class="form-label">email</label>
      <input type="email" class="form-control" id="id" name="email">
    </div>
    <div class="col-md-2">
      <label for="inputCity" class="form-label">NIF</label>
      <input type="text" class="form-control" id="id" name="nif">
    </div>
    <div class="col-md-12">
      <label for="inputCity" class="form-label">Agregado familiar</label>
      <input type="text" class="form-control" id="id" name="familiar">
    </div>
  
  <!-- 1 COLUNA ------------------------------------------------------------------------- --> 
    <div class="col-12">
      <label for="inputAddress" class="form-label">Queixa principal</label>
      <input type="text" class="form-control" id="inputAddress" name="queixa">
    </div>
  
  <!-- ENVIAR ------------------------------------------------------------------------- -->
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

  </div>

</form>
  
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
