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
          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Formulários</a>
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
      <div class="col-md-6 col-lg-3 col-xl">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col mt-0">
                <h5 class="card-title cor-primaria">Card 1</h5>
              </div>

              <div class="col-auto">
                <div class="avatar">
                  <div class="avatar-title rounded-circle cor-primaria-background">
                    <i class="bi bi-currency-dollar"></i>
                  </div>
                </div>
              </div>
            </div>
            <h1 class="">$25.300</h1>
            <div class="mb-0">
              <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>
              Comparação mês anterior
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 col-xl">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col mt-0">
                <h5 class="card-title cor-primaria">Card 2</h5>
              </div>

              <div class="col-auto">
                <div class="avatar">
                  <div class="avatar-title rounded-circle cor-primaria-background">
                    <i class="bi bi-cart"></i>
                  </div>
                </div>
              </div>
            </div>
            <h1 class="">12.514</h1>
            <div class="mb-0">
              <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.50% </span>
              Mais etc etc
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 col-xl">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col mt-0">
                <h5 class="card-title cor-primaria">Card 3</h5>
              </div>

              <div class="col-auto">
                <div class="avatar">
                  <div class="avatar-title rounded-circle cor-primaria-background">
                    <i class="bi bi-activity"></i>
                  </div>
                </div>
              </div>
            </div>
            <h1 class="">29.232</h1>
            <div class="mb-0">
              <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -4.25% </span>
              Menos etc etc
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 col-xl">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col mt-0">
                <h5 class="card-title cor-primaria">Card 4</h5>
              </div>

              <div class="col-auto">
                <div class="avatar">
                  <div class="avatar-title rounded-circle cor-primaria-background">
                    <i class="bi bi-currency-dollar"></i>
                  </div>
                </div>
              </div>
            </div>
            <h1 class="">$83.300</h1>
            <div class="mb-0">
              <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 8.35% </span>
              Mais etc etc
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-4 col-md-12 col-xxl-4 d-flex mt-4">
        <div class="card flex-fill w-100">
          <div class="card-header">
            <div class="card-actions float-end">
              <a href="#" class="me-1">
                <i class="bi bi-arrow-repeat"></i>
              </a>
              <div class="d-inline-block dropdown show">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                  <i class="bi bi-three-dots"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <h5 class="card-title mb-0">Gráfico de exemplo - pie</h5>
          </div>
          <div class="card-body py-3">
            <div class="chart chart-md">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                </div>
              </div>
              <canvas id="chartjs-dashboard-pie" style="display: block; height: 300px; width: 100%;" width="400"
                      height="200" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4 col-md-12 col-xxl-4 d-flex mt-4">
        <div class="card flex-fill w-100">
          <div class="card-header">
            <div class="card-actions float-end">
              <a href="#" class="me-1">
                <i class="bi bi-arrow-repeat"></i>
              </a>
              <div class="d-inline-block dropdown show">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                  <i class="bi bi-three-dots"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <h5 class="card-title mb-0">Gráfico de exemplo - doughnut</h5>
          </div>
          <div class="card-body py-3">
            <div class="chart chart-md">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                </div>
              </div>
              <canvas id="chartjs-dashboard-doughnut" style="display: block; height: 300px; width: 100%;" width="400"
                      height="200" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4 col-md-12 col-xxl-4 d-flex mt-4">
        <div class="card flex-fill w-100">
          <div class="card-header">
            <div class="card-actions float-end">
              <a href="#" class="me-1">
                <i class="bi bi-arrow-repeat"></i>
              </a>
              <div class="d-inline-block dropdown show">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                  <i class="bi bi-three-dots"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <h5 class="card-title mb-0">Gráfico de exemplo - barras</h5>
          </div>
          <div class="card-body py-3">
            <div class="chart chart-md">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                </div>
              </div>
              <canvas id="chartjs-dashboard-bar" style="display: block; height: 300px; width: 710px;" width="887"
                      height="375" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-12 col-md-12 col-xxl-12 d-flex mt-4">
        <div class="card flex-fill w-100">
          <div class="card-header">
            <div class="card-actions float-end">
              <a href="#" class="me-1">
                <i class="bi bi-arrow-repeat"></i>
              </a>
              <div class="d-inline-block dropdown show">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                  <i class="bi bi-three-dots"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <h5 class="card-title mb-0">Gráfico de exemplo - Linha</h5>
          </div>
          <div class="card-body py-3">
            <div class="chart chart-md">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                </div>
              </div>
              <canvas id="chartjs-dashboard-line" style="display: block; height: 300px; width: 710px;" width="887"
                      height="375" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
<script src="assets/js/offcanvas.js"></script>
<script src="assets/js/main.js"></script>
<script>


    // Gráfico de exemplo pie
    const ctx1 = document.getElementById('chartjs-dashboard-pie').getContext('2d');
    const myChart1 = new Chart(ctx1, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                fill: true,
                label: '#dataset 1',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 2
            },
                {
                    fill: true,
                    label: '#dataset 2',
                    data: [21, 12, 16, 5, 2, 5],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 2
                }
            ]

        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    // Gráfico de exemplo barras
    const ctx2 = document.getElementById('chartjs-dashboard-bar').getContext('2d');
    const myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                fill: true,
                label: '#dataset 1',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 2
            },
                {
                    fill: true,
                    label: '#dataset 2',
                    data: [21, 12, 16, 5, 2, 5],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 2
                }
            ]

        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Gráfico de exemplo doughnut
    const ctx3 = document.getElementById('chartjs-dashboard-doughnut').getContext('2d');
    const myChart3 = new Chart(ctx3, {
        type: 'doughnut',
        data: {
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                fill: true,
                label: '#dataset 1',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 2
            },
                {
                    fill: true,
                    label: '#dataset 2',
                    data: [21, 12, 16, 5, 2, 5],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 2
                }
            ]

        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Gráfico de exemplo - linha
    const ctx4 = document.getElementById('chartjs-dashboard-line').getContext('2d');
    const myChart4 = new Chart(ctx4, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                fill: true,
                label: '#dataset 1',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 2
            },
                {
                    fill: true,
                    label: '#dataset 2',
                    data: [21, 12, 16, 5, 2, 5],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 2
                }
            ]

        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


</script>

</body>
</html>
