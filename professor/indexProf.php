<?php
include_once '../php_action/db_connect.php';
include_once '../includes/header.php';
include_once '../includes/message.php';
?>


<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100 result">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">CrudPHP</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="../index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Aluno</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active" href="">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Professores</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../aula/indexAula.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Aulas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../presenca/indexPresenca.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Presença</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here..">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
             
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="mx-4">
      <div class="card-body pt-sm-3 pt-0 overflow-auto ml-6" style="margin-left: 25px; ">
        <div class="card" style="padding: 15px;">
          <div class="pb-0 p-2">
            <div class="d-flex justify-content-between">
              <h6 class="mb-2">Professores</h6>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table  ">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>Telefone</th>
                  <th>Idade</th>
                </tr>
              </thead>
              <tbody>
                <?php

                function formatarCPF($cpf)
                {
                  $cpf = preg_replace('/\D/', '', $cpf);
                  return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf);
                }

                function formatarTelefone($telefone)
                {
                  $telefone = preg_replace('/\D/', '', $telefone);
                  return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $telefone);
                }

                $sql = "SELECT * FROM professores";
                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) > 0) :

                  while ($dados = mysqli_fetch_array($resultado)) :
                ?>


                    <tr>
                      <td style="padding: 12px 24px"><?php echo $dados['nome']; ?></td>
                      <td><?php echo formatarCPF($dados['cpf']); ?></td>
                      <td><?php echo formatarTelefone($dados['telefone']); ?></td>
                      <td style="padding-left: 32px"><?php echo $dados['idade']; ?></td>


                      <td><a href="editarProf.php?id=<?php echo $dados['idProfessores'] ?>" class="btn btn-floating orange"><i class="material-icons">edit</i></a></td>

                      <td>
                        <form action="../php_action/professores/deleteProf.php" method="POST">
                          <input type="hidden" name="idProfessores" value="<?php echo $dados['idProfessores']; ?>">
                          <button type="submit" name="btn-deletar" class="btn "><a href="#modal<?php echo $dados['idProfessores']; ?>" class="btn-floating red modal-trigger"><i style="color: black;" onmouseover="this.style.color='red'" onmouseout="this.style.color='black'" class="material-icons">delete</i></button>
                        </form>
                      </td>


                    </tr>
                  <?php
                  endwhile;
                else : ?>

                  <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>

                <?php
                endif;
                ?>

              </tbody>
            </table>

          </div>
        </div>



        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          Adicionar professor
        </button>

        <!-- Modal -->
        <!-- Modal structure -->
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastre um professor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="form2" action="../php_action/professores/createProf.php" method="POST">
                  <input type="text" name="nome" id="nome" class="form-control" placeholder="Name" aria-label="Name">
                  <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" aria-label="CPF">
                  <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Telefone" aria-label="Telefone">
                  <input type="text" name="idade" id="idade" class="form-control" placeholder="Idade" aria-label="Idade">
                  <div class="text-center">
                    <div class="modal-footer">
                      <button id="form2" type="submit" name="btn-cadastrar" class="btn btn-secondary">Cadastrar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>


        <script>
          function showModal(event) {
            
            var button = event.target;
            var recipient = button.getAttribute('data-whatever');

            var modal = document.getElementById('exampleModal');
            var modalTitle = modal.querySelector('.modal-title');
            var modalInput = modal.querySelector('.modal-body input');

            modalTitle.textContent = 'Cadastre Professor ';

            modal.style.display = 'block';
          }

          function closeModal(event) {
            var modal = document.getElementById('exampleModal');
            modal.style.display = 'none';
          }

          var modalButtons = document.querySelectorAll('[data-toggle="modal"]');

          modalButtons.forEach(function(button) {
            button.addEventListener('click', showModal);
          });

          var closeButton = document.querySelector('.modal .close');
          closeButton.addEventListener('click', closeModal);

          window.addEventListener('click', function(event) {
            var modal = document.getElementById('exampleModal');
            if (event.target == modal) {
              closeModal();
            }
          });
        </script>


        <!--   Core JS Files   -->
        <script src="../assets/js/Jquery/jQuery.js"></script>
        <script src="../assets/js/Jquery/script.js"></script>

        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="../assets/js/plugins/chartjs.min.js"></script>
        <script>
          var ctx1 = document.getElementById("chart-line").getContext("2d");

          var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

          gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
          gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
          gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
          new Chart(ctx1, {
            type: "line",
            data: {
              labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
              datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#5e72e4",
                backgroundColor: gradientStroke1,
                borderWidth: 3,
                fill: true,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                maxBarThickness: 6

              }],
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              plugins: {
                legend: {
                  display: false,
                }
              },
              interaction: {
                intersect: false,
                mode: 'index',
              },
              scales: {
                y: {
                  grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [5, 5]
                  },
                  ticks: {
                    display: true,
                    padding: 10,
                    color: '#fbfbfb',
                    font: {
                      size: 11,
                      family: "Open Sans",
                      style: 'normal',
                      lineHeight: 2
                    },
                  }
                },
                x: {
                  grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                    borderDash: [5, 5]
                  },
                  ticks: {
                    display: true,
                    color: '#ccc',
                    padding: 20,
                    font: {
                      size: 11,
                      family: "Open Sans",
                      style: 'normal',
                      lineHeight: 2
                    },
                  }
                },
              },
            },
          });
        </script>
        <script>
          var win = navigator.platform.indexOf('Win') > -1;
          if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
              damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
          }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>

<?php
include_once '../includes/footer.php';
?>