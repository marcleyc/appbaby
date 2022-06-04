@extends('layouts.aaa')


<!---------------------------------------------------------- C O N T E U D O -->
@section('content')

<div class="modal fade" id="exampleModalE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelE">Editar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       
      <div class="modal-body">
        <form class="row g-3" action="/historico-editar-api/{{$historico->id}}" method="POST">
          @csrf
            <div>
              <input type="hidden" class="form-control" name="id" value="{{$historico->id}}">
            </div>
            
            <div>
              <input type="text" class="form-control" name="idc" value="{{$historico->idc}}">
            </div>

            <div>
              <label class="form-label">Data</label>
              <input type="text" class="form-control" name="datah" value="{{$historico->datah->format('d/m/Y')}}">
            </div>
            
            <div>
              <label for="inputEmail4" class="form-label">Histórico</label>
              <input type="text" class="form-control" name="descricao" value="{{$historico->descricao}}">
            </div>    
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection  