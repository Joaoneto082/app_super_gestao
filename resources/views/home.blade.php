@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Heronildes Junior and Bootstrap contributors">
  <title>Template Base - Prefeitura de Mossoró</title>
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  <!-- Custom styles for this template -->
  <link href="assets/css/offcanvas.css" rel="stylesheet">

  <!-- left aside doc-->
  <link href="assets/css/docs.css" rel="stylesheet">

  <!-- main style-->
  <link href="style.css" rel="stylesheet">


</head>
<body class="bg-light">

<!--Main Nav-->
<nav class="navbar navbar-expand-lg fixed-top cor-primaria-background navbar-dark py-1" aria-label="Main navigation">
  <div class="container-fluid">

    <a class="navbar-brand" href="#"><img src="assets/img/main-logo.png" alt=""></a>
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
          <a class="nav-link" href="{{route('list')}}">Listagem</a>
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
            <a href="#" class="nav-right-btn"><i class="bi-person"></i></a> <!-- Autentição de usuario-->
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!--/Main Nav-->

<!--Bottom Nav-->
<nav id="bottom-navbar" class="d-lg-none d-md-block navbar fixed-bottom cor-primaria-background navbar-dark py-1" aria-label="Main navigation">
  <div class="container-fluid">

<!--    <a class="navbar-brand" href="#"><img src="assets/img/main-logo.png" alt=""></a>-->

    <div class="w-100" id="">
      <div class="d-flex justify-content-around list-unstyled">
        <a href="#" class="btn btn-default shadow-none" title="Teste"><i class="bi bi-upc-scan"></i></a>
        <a id="action-button" href="#" class="btn shadow-none" title="Teste"><i class="bi bi-plus"></i></a>
        <a href="#" class="btn btn-default shadow-none" title="Teste"><i class="bi bi-person"></i></a>
      </div>
    </div>
  </div>
</nav>
<!--/Bottom Nav-->



<div class="nav-scroller bg-body shadow-sm">
  <nav class="nav nav-underline" aria-label="Secondary navigation">
    <a class="nav-link active" aria-current="page" href="#">Painel</a>
    <a class="nav-link" href="{{route('mensagem')}}">
      Mensagens
      <span class="badge bg-light text-dark rounded-pill align-text-bottom">27</span>
    </a>
    <a class="nav-link" href="{{route('menu')}}">Menu item x</a>
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


<div class="container-xxl my-md-4 bd-layout">

    <div class="container d-md-none collapsed mt-2">
      <div class="card bg-white p-2">

        <button class="btn bd-sidebar-toggle d-md-none py-0 px-1 ms-3 order-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-expand" fill="currentColor" viewBox="0 0 16 16">
            <title>Expand</title>
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zM7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10z"></path>
          </svg>

          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-collapse" fill="currentColor" viewBox="0 0 16 16">
            <title>Collapse</title>
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zm7-8a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 4.293V.5A.5.5 0 0 1 8 0zm-.5 11.707l-1.146 1.147a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 11.707V15.5a.5.5 0 0 1-1 0v-3.793z"></path>
          </svg>

        </button>

      </div>
    </div>

    <aside class="bd-sidebar">
      <nav class="bd-links collapse" id="bd-docs-nav" aria-label="Docs navigation"><ul class="list-unstyled mb-0 py-3 pt-md-1">
        <li class="mb-1">
          <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#getting-started-collapse" aria-expanded="true" aria-current="true">
            Dashboard
          </button>

          <div class="collapse show" id="getting-started-collapse">
            <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="{{route('dashboard')}}" class="d-inline-flex align-items-center rounded active" aria-current="page">Dashboard</a></li>

            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#customize-collapse" aria-expanded="false">
            Forms
          </button>

          <div class="collapse" id="customize-collapse">
            <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="{{route('formulario')}}" class="d-inline-flex align-items-center rounded">Overview</a></li>

            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#layout-collapse" aria-expanded="false">
            Menu item 3
          </button>

          <div class="collapse" id="layout-collapse">
            <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="{{url('usuarios')}}" class="d-inline-flex align-items-center rounded">Lista de Usuarios</a></li>

            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#content-collapse" aria-expanded="false">
            Menu item 4
          </button>

          <div class="collapse" id="content-collapse">
            <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="{{url('cursos')}}" class="d-inline-flex align-items-center rounded">Lista de Cursos</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#forms-collapse" aria-expanded="false">
            Menu item 5
          </button>

          <div class="collapse" id="forms-collapse">
            <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="d-inline-flex align-items-center rounded">Overview</a></li>

            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#components-collapse" aria-expanded="false">
            Menu item 6
          </button>

          <div class="collapse" id="components-collapse">
            <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="d-inline-flex align-items-center rounded">Subitem 1</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#helpers-collapse" aria-expanded="false">
            Menu item 7
          </button>

          <div class="collapse" id="helpers-collapse">
            <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="d-inline-flex align-items-center rounded">Subitem 2</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#utilities-collapse" aria-expanded="false">
            Menu item 8
          </button>

          <div class="collapse" id="utilities-collapse">
            <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="d-inline-flex align-items-center rounded">Subitem 3</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#extend-collapse" aria-expanded="false">
            Menu item 9
          </button>

          <div class="collapse" id="extend-collapse">
            <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="d-inline-flex align-items-center rounded">Subitem 4</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#about-collapse" aria-expanded="false">
            Menu item 10
          </button>

          <div class="collapse" id="about-collapse">
            <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="d-inline-flex align-items-center rounded">Subitem 5</a></li>
            </ul>
          </div>
        </li>
        <li class="my-3 mx-4 border-top"></li>
        <li>
          <a href="#" class="d-inline-flex align-items-center rounded">
            Link standalone
          </a>
        </li>
      </ul>
      </nav>

    </aside>


    <main class="container">
      <!--  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">-->
      <!--    <div class="lh-1">-->
      <!--      <h1 class="h6 mb-0 text-white lh-1">Título de Mensagem</h1>-->
      <!--      <small>Conteúdo de mensagem</small>-->
      <!--    </div>-->
      <!--  </div>-->

      <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
        <strong>Título</strong> Conteúdo de um alerta.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

      <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Atualizações Recentes</h6>
        <div class="d-flex text-muted pt-3">
          <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
               xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
               preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
            <rect width="100%" height="100%" fill="#007bff"/>
            <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
          </svg>

          <p class="pb-3 mb-0 small lh-sm border-bottom">
            <strong class="d-block text-gray-dark">@username</strong>
            Some representative placeholder content, with some information about this user. Imagine this being some sort of
            status update, perhaps?
          </p>
        </div>
        <div class="d-flex text-muted pt-3">
          <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
               xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
               preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
            <rect width="100%" height="100%" fill="#e83e8c"/>
            <text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text>
          </svg>

          <p class="pb-3 mb-0 small lh-sm border-bottom">
            <strong class="d-block text-gray-dark">@username</strong>
            Some more representative placeholder content, related to this other user. Another status update, perhaps.
          </p>
        </div>
        <div class="d-flex text-muted pt-3">
          <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
               xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
               preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
            <rect width="100%" height="100%" fill="#6f42c1"/>
            <text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text>
          </svg>

          <p class="pb-3 mb-0 small lh-sm border-bottom">
            <strong class="d-block text-gray-dark">@username</strong>
            This user also gets some representative placeholder content. Maybe they did something interesting, and you
            really want to highlight this in the recent updates.
          </p>
        </div>
        <small class="d-block text-end mt-3">
          <a href="#">Ver Todos</a>
        </small>
      </div>

      <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Exemplos de contato</h6>
        <div class="d-flex text-muted pt-3">
          <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
               xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
               preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
            <rect width="100%" height="100%" fill="#007bff"/>
            <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
          </svg>

          <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
            <div class="d-flex justify-content-between">
              <strong class="text-gray-dark">Full Name</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block">@username</span>
          </div>
        </div>
        <div class="d-flex text-muted pt-3">
          <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
               xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
               preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
            <rect width="100%" height="100%" fill="#007bff"/>
            <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
          </svg>

          <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
            <div class="d-flex justify-content-between">
              <strong class="text-gray-dark">Full Name</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block">@username</span>
          </div>
        </div>
        <div class="d-flex text-muted pt-3">
          <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
               xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
               preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
            <rect width="100%" height="100%" fill="#007bff"/>
            <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
          </svg>

          <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
            <div class="d-flex justify-content-between">
              <strong class="text-gray-dark">Full Name</strong>
              <a href="#">Follow</a>
            </div>
            <span class="d-block">@username</span>
          </div>
        </div>
        <small class="d-block text-end mt-3">
          <a href="#">Ver todos</a>
        </small>
      </div>
    </main>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/offcanvas.js"></script>
<script>

</script>

</body>
</html>

@endsection
