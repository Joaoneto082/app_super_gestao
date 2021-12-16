<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Heronildes Junior and Bootstrap contributors">
  <title>Formulário</title>
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  <!-- Custom styles for this template -->
  <link href="assets/css/offcanvas.css" rel="stylesheet">

  <!-- main style-->
  <link href="style.css" rel="stylesheet">


</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg fixed-top cor-primaria-background navbar-dark py-1" aria-label="Main navigation">
  <div class="container-fluid">

    <a class="navbar-brand" href="{{route('home')}}"><img src="assets/img/main-logo.png" alt=""></a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('dashboard')}}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Formulários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('list')}}">Listagem</a>
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


<div class="container-xxl my-md-4 bd-layout">


    <main class="container">
      <div class="card p-5">
        <section id="form-example" class="position-relative">
          <div class="container">
            <div class="col-md-6 offset-lg-3 offset-md-0 offset-sm-0">
              <form>
                <h2 class="text-center blue">
                  Elementos de Formulário
                </h2>

                <div class="">
                  <label>Nome</label>
                  <input type="text" class="form-control p-2"
                         placeholder="Nome Completo">
                </div>
                <div class="mt-3">
                  <label>Celular</label>
                  <input type="text" class="form-control p-2"
                         placeholder="99 99999-9999">
                </div>
                <div class="mt-3">
                  <label>Input desabilitado</label>
                  <input type="text" disabled="disabled" class="form-control disabled p-2"
                         placeholder="desabilitado">
                </div>
                <div class="mt-3">
                  <label>Textarea</label>
                  <textarea class="form-control" placeholder="Textarea"></textarea>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <label>Email</label>
                    <input type="email" class="form-control p-2"
                           placeholder="email@exemplo.com">
                  </div>
                  <div class="col">
                    <label>teste de altura</label>
                    <select class="form-select p-2" aria-label="Default select example">
                      <option selected>Valor Padrão Selecionado</option>
                      <option value="1">Um</option>
                      <option value="2">Dois</option>
                      <option value="3">Três</option>
                    </select>
                  </div>
                </div>
                <div class="mt-3">
                  <label>Categoria</label>
                  <select class="form-select p-2" aria-label="Default select example">
                    <option selected>Valor Padrão Selecionado</option>
                    <option value="1">Um</option>
                    <option value="2">Dois</option>
                    <option value="3">Três</option>
                  </select>
                </div>
                <button class="btn btn-default mt-3" type="submit">Enviar Inscrição</button>
              </form>
            </div>

          </div>


        </section>
      </div>


    </main>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/offcanvas.js"></script>
<script>

</script>

</body>
</html>