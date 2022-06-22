@extends('layouts.aaa')


<!---------------------------------------------------------- C O N T E U D O -->
@section('content')
  <div class="p-2"></div>
  <div class ="container" id="recibo">
  <h1 style="text-align: center;">Histórico</h1>
<form class="row g-3" action="/historico-editar-api/{{$historico->id}}" method="POST">

    <!-- 2 COLUNAS ------------------------------------------------------------------------- -->
      <div class="col-md-12">        
        <input type="hidden" class="form-control" name="idc" value="{{$historico->idc}}">
      </div>

      <div class="col-md-12">
        <label for="inputPassword4" class="form-label">Data início</label>
        <input type="text" class="form-control" name="datah" value="{{$historico->datah->format('Y-m-d')}}">
      </div>

      <div class="col-md-12">
        <label class="form-label">Histórico</label>
        <textarea style="height: 100px" type="textarea" class="form-control" name="historico">{{$historico->descricao}}</textarea>
      </div>

    
    <!-- ENVIAR ------------------------------------------------------------------------- -->
      <div class="col-12">              
        <a class="btn btn-success" href=" {{route('historicos', ['id'=> $historico->idc])}}">Fechar</a>       
      </div>

    </div>

</form>


@endsection  