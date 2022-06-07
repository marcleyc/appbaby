@extends('layouts.aaa')

@section('content')

<!---------------------------------------------------------- C O N T E U D O -->

<div class="p-2"></div>
<div class ="container" id="recibo">
<h1 style="text-align: center;">Cadastro do cliente</h1>
<form class="row g-3" action="/cliente-editar-api/{{$cliente->id}}" method="POST">
  @csrf
  <!-- 2 COLUNAS ------------------------------------------------------------------------- -->  
    <div class="col-md-9">
      <label class="form-label">Nome</label>
      <input type="text" class="form-control"  name="nome" value="{{$cliente->nome}}">
    </div>
    <div class="col-md-2">
      <label class="form-label">Data início</label>
      <input type="text" class="form-control" name="data" value="{{$cliente->data->format('Y-m-d')}}">
    </div>
    <div class="col-md-1">
      <label class="form-label">Cód Cliente</label>
      <input type="text" class="form-control" disabled="disabled" name="id" value="{{$cliente->id}}">
    </div>

  <!-- 1 COLUNA ------------------------------------------------------------------------- --> 
    <div class="col-12">
      <label class="form-label">Endereço</label>
      <input type="text" class="form-control" name="morada" value="{{$cliente->morada}}">
    </div>  
  
  <!-- 4 COLUNAS ------------------------------------------------------------------------- --> 
    <div class="col-md-3">
      <label class="form-label">Data de nascimento</label>
      <input type="text" class="form-control" name="nascimento" value="{{$cliente->nascimento->format('Y-m-d')}}">
    </div>
    <div class="col-md-3">
      <label class="form-label">Idade</label>
      <input type="text" class="form-control" name="idade" value="" disabled="disabled">
    </div>
    <div class="col-md-3">
      <label class="form-label">Indicação</label>
      <input type="text" class="form-control" name="indicacao" value="{{$cliente->indicacao}}">
    </div>
    <div class="col-md-3">
      <label class="form-label">N.º de sessões</label>
      <input type="text" class="form-control" name="qtdsessoes" value="{{$cliente->qtdsessoes}}">
    </div>

  <!-- 4 COLUNAS ------------------------------------------------------------------------- --> 
    <div class="col-md-3">
      <label class="form-label">Escolaridade</label>
      <input type="text" class="form-control" name="escolaridade" value="{{$cliente->escolaridade}}">
    </div>
    <div class="col-md-3">
      <label class="form-label">Telefone</label>
      <input type="text" class="form-control" name="telefone" value="{{$cliente->telefone}}">
    </div>
    <div class="col-md-4">
      <label class="form-label">email</label>
      <input type="email" class="form-control" name="email" value="{{$cliente->email}}">
    </div>
    <div class="col-md-2">
      <label class="form-label">NIF</label>
      <input type="text" class="form-control" name="nif" value="{{$cliente->nif}}">
    </div>
    <div class="col-md-12">
      <label class="form-label">Agregado familiar</label>
      <input type="text" class="form-control" name="familiar" value="{{$cliente->familiar}}">
    </div>
  
  <!-- 1 COLUNA ------------------------------------------------------------------------- --> 
    <div class="col-12">
      <label class="form-label">Queixa principal</label>
      <input type="text" class="form-control" name="queixa" value="{{$cliente->queixa}}">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>

@endsection  
