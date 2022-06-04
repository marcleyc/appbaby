@extends('layouts.aaa')


<!---------------------------------------------------------- C O N T E U D O -->
@section('content')
  <div class="p-2"></div>
  <div class ="container" id="recibo">
  <h1 style="text-align: center;">Cadastre o histórico do cliente </h1>
<form class="row g-3" action="/historico-editar-api/{{$historico->id}}" method="POST">
@csrf
    <!-- 2 COLUNAS ------------------------------------------------------------------------- -->
      <div class="col-md-12">        
        <input type="hidden" class="form-control" name="idc" value="{{$historico->idc}}">
      </div>

      <div class="col-md-12">
        <label for="inputPassword4" class="form-label">Data início</label>
        <input type="text" class="form-control" name="datah" value="{{$historico->datah->format('Y-m-d')}}">
      </div>

      <div class="col-md-12">
        <label for="inputPassword4" class="form-label">Histórico</label>
        <input type="text" class="form-control" name="descricao" value="{{$historico->descricao}}">
      </div>

    
    <!-- ENVIAR ------------------------------------------------------------------------- -->
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>

    </div>

</form>


@endsection  