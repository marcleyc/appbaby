@extends('layouts.aaa')


<!---------------------------------------------------------- C O N T E U D O -->
@section('content')
  <div class="p-2"></div>
  <div class ="container" id="recibo">
  <h1 style="text-align: center;">Cadastro do cliente</h1>
<form class="row g-3" action="/cliente-cadastro-api" method="POST">
@csrf
    <!-- 2 COLUNAS ------------------------------------------------------------------------- -->  
      <div class="col-md-9">
        <label for="inputEmail4" class="form-label">Nome</label>
        <input type="text" class="form-control" id="inputEmail4" name="nome">
      </div>
      <div class="col-md-2">
        <label for="inputPassword4" class="form-label">Data início</label>
        <input type="date" class="form-control" id="inputPassword4" name="data" required>
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
        <input type="date" class="form-control" id="id" name="nascimento" required>
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
@endsection  

