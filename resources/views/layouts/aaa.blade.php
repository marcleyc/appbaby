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
    
    <!-- CSS Datatables -->
    <link href="https:///cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/img/logoBaby.png')}}" type="image">
   
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>  

@yield('jquery')

  <body>
<!----------------------------------------------------------------- M E N U -->    
<nav class="navbar navbar-light bg-white shadow-sm p-2">
  <!-- div class="container" -->
    <a class="navbar-brand" href="#">
      <img src="https://www.psicologaadrianalevindo.pt/assets/images/logo-163x163.png" alt="" width="40" height="40">
      <div>
      <a class="btn btn-outline-primary" href="{{route('clientes')}}">Clientes</a>
      <a class="btn btn-outline-primary" href="{{route('clientecriar')}}">Cadastro</a>
      <a class="btn btn-outline-primary" href="/">Relatórios</a>
      </div>
    </a>
  <!-- /div -->
</nav>

<!---------------------------------------------------------- C O N T E U D O -->

@yield('content')

@yield('style')

<!-------------------------------------------------------------- F O O T E R -->    
<footer class="pt-4 my-md-5 pt-md-5 border-top p-2">
    <div class="row">
        <div class="col-12 col-md">
            <img class="mb-2" src="{{asset('assets/img/logo_mtech_t.png')}}" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; MyTech 2022</small>
        </div>          
    </div>
</footer>

<!------------------------------------------S C R I P T -->
@yield('scripts')   


</body>
</html>

