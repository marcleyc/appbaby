@extends('layouts.aaa')

@section('jquery')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script> 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
@endsection
  
@section('content')
  <div style="padding:10px"> <a class="btn btn-sm btn-outline-primary" href="/cliente-cadastro">Cadastrar</a> </div>

  <div class="container">    
    <table id="example" class="display" style="width:80%">
          <thead>
              <tr>
                <th>id</th>
                <th>data</th>
                <th>nome</th>
                <th></th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                <th>id</th>
                <th>nome</th>
                <th>início</th>
                <th></th>
              </tr>
          </tfoot>
           
        <tbody>
            @foreach ($clientes as $cliente)   
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->data->format('d/m/Y')}}</td>
                <td>{{$cliente->nome}}</td>
                <td>
                  <a class="btn btn-sm btn-outline-primary" href="/historicos/{{$cliente->id}}">His</a>
                  <a class="btn btn-sm btn-outline-primary" href="/cliente-editar/{{$cliente->id}}">Edt</a>
                  <a class="btn btn-sm btn-outline-primary" href="/cliente-deletar-api/{{$cliente->id}}">Del</a>
                </td>  
            </tr> 
            @endforeach 
        </tbody>
               
      </table>
    </div> 
@endsection    
  
  <!-- --------------------------------------border-collapse:collapse;------------------------------------------- -->

@section('style')  
  <style type="text/css">
      body {font-family:Verdana; padding: 10px}
      #table{width:100%; border:solid 1px; text-align:left; border-radius: 25px;}
      #table tbody tr{border:solid 1px;height:5px;cursor:pointer;}
      #table tbody td{border:1px solid red; padding: 5px; border-radius: 25px;}
      #table thead{background:beige;}
      #table thead th:nth-child(1){width:100px;}
      #table input{color:navy; width:100%;}
      tfoot {display: table-header-group;}
  </style> 
@endsection

@section('scripts')
  <script>
         $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#example tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        } );
    
        // DataTable
        var table = $('#example').DataTable({
            initComplete: function () {
                // Apply the search
                this.api().columns().every( function () {
                    var that = this;
     
                    $( 'input', this.footer() ).on( 'keyup change clear', function () {
                        if ( that.search() !== this.value ) {
                            that
                                .search( this.value )
                                .draw();
                        }
                    } );
                } );
            }
        });
        $('#datatableId tfoot tr').appendTo('#datatableId thead');
     
    } );
  </script>
@endsection