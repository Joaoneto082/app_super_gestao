<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Heronildes Junior and Bootstrap contributors">
  <title>Listagem</title>
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  <!-- Custom styles for this template -->

  <link href="assets/css/offcanvas.css" rel="stylesheet">

  <!-- left aside doc-->
  <link href="assets/css/docs.css" rel="stylesheet">

  <!--jQuery DataTable CDN-->
  <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">


  <!-- main style-->
  <link href="style.css" rel="stylesheet">


</head>
<body class="bg-light">

<!--Main Nav-->
<nav class="navbar navbar-expand-lg fixed-top cor-primaria-background navbar-dark py-1" aria-label="Main navigation">
  <div class="container-fluid">

    <a class="navbar-brand" href="{{route('home')}}"><img src="assets/img/main-logo.png" alt=""></a>
    <button class="navbar-toggler px-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('formulario')}}">Formulários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Listagem</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Outros</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="#">Cards</a></li>
            <li><a class="dropdown-item" href="#">Alerts</a></li>
            <li><a class="dropdown-item" href="#">Gráficos</a></li>
          </ul>
        </li>
      </ul>
      <div class="nav-right d-flex">
        <ul class="list-unstyled mb-0">
          <li class="list-inline-item text-white">
            <a href="#" class="nav-right-btn"><i class="bi-bell"></i></a>
          </li>
          <li class="list-inline-item text-white">
            <a href="#" class="nav-right-btn"><i class="bi-globe"></i></a>
          </li>
          <li class="list-inline-item text-white">
            <a href="#" class="nav-right-btn"><i class="bi-person"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!--/Main Nav-->

<!--Bottom Nav-->
<nav id="bottom-navbar" class="d-lg-none d-md-block navbar fixed-bottom cor-primaria-background navbar-dark py-1"
     aria-label="Main navigation">
  <div class="container-fluid">

    <!--    <a class="navbar-brand" href="#"><img src="assets/img/main-logo.png" alt=""></a>-->

    <div class="w-100" id="">
      <div class="d-flex justify-content-around list-unstyled">
        <a href="#" class="btn btn-default shadow-none" title="Teste"><i class="bi bi-upc-scan"></i></a>
        <a id="action-button" href="{{route('home')}}" class="btn shadow-none" title="Teste"><i class="bi bi-plus"></i></a>
        <a href="#" class="btn btn-default shadow-none" title="Teste"><i class="bi bi-person"></i></a>
      </div>
    </div>
  </div>
</nav>
<!--/Bottom Nav-->


<div class="nav-scroller bg-body shadow-sm">
  <nav class="nav nav-underline" aria-label="Secondary navigation">
    <a class="nav-link active" aria-current="page" href="#">Painel</a>
    <a class="nav-link" href="#">
      Mensagens
      <span class="badge bg-light text-dark rounded-pill align-text-bottom">27</span>
    </a>
    <a class="nav-link" href="#">Menu item x</a>
  </nav>
</div>

<div id="breadcumbs" class="">
  <div class="container-fluid">
    <div class="row-fluid py-2 d-flex">
      <div class="pull-left flex-grow-1">
        SEMAD <span>»</span> GETIC - Gerência de Tecnologia da Informação e Comunicação
      </div>

      <!--      <div class="text-right">-->
      <!--        <span class="">-->
      <!--          <span class="text-right">-->
      <!--            link-->
      <!--            <a href="#">link</a>-->
      <!--          </span>-->
      <!--        </span>-->
      <!--      </div>-->
    </div>

  </div>
</div>


<div class="container-xxl my-md-4">
  <main class="main-content container">
    <div class="row">
      <div class="card bg-white p-3">
        <table id="myTable" class="display">
          <thead>
          <tr>
            <th>Coluna 1</th>
            <th>Coluna 2</th>
            <th>Coluna 3</th>
            <th>Coluna 4</th>
            <th>Coluna 5</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>linha 1 Data 1</td>
            <td>linha 1 Data 2</td>
            <td>linha 1 Data 3</td>
            <td>linha 1 Data 4</td>
            <td>linha 1 Data 5</td>
          </tr>
          <tr>
            <td>linha 2 Data 1</td>
            <td>linha 2 Data 2</td>
            <td>linha 2 Data 3</td>
            <td>linha 2 Data 4</td>
            <td>linha 2 Data 5</td>
          </tr>
          <tr>
            <td>linha 3 Data 1</td>
            <td>linha 3 Data 2</td>
            <td>linha 3 Data 3</td>
            <td>linha 3 Data 4</td>
            <td>linha 3 Data 5</td>
          </tr>
          <tr>
            <td>linha 4 Data 1</td>
            <td>linha 4 Data 2</td>
            <td>linha 4 Data 3</td>
            <td>linha 4 Data 4</td>
            <td>linha 4 Data 5</td>
          </tr>
          <tr>
            <td>linha 5 Data 1</td>
            <td>linha 5 Data 2</td>
            <td>linha 5 Data 3</td>
            <td>linha 5 Data 4</td>
            <td>linha 5 Data 5</td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>

  </main>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--jQuery dataTable CDN-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<!--PTBR para jQuery dataTable-->
<!--<script src="//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"></script>-->


<script src="assets/js/offcanvas.js"></script>
<script src="assets/js/main.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
            }
        });
    });
</script>

</body>
</html>
