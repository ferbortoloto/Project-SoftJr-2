<?php
include_once '../php_action/db_connect.php';
include_once '../includes/header.php';
include_once '../includes/message.php';

$idCursoSelecionado = isset($_POST['idCurso']) ? $_POST['idCurso'] : '';
$idAulaSelecionada = isset($_POST['idAulas']) ? $_POST['idAulas'] : '';
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
                    <a class="nav-link " href="../professor/indexProf.php">
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
                    <a class="nav-link active" href="">
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

        <div class=" mx-4">
            <div class="card-body pt-sm-3 pt-0 overflow-auto ml-6" style="margin-left: 25px; ">
                <div class="card" style="padding: 15px;">
                    <div class="pb-0 p-2">
                        <div class="d-flex flex-column justify-content-between">
                            <h3 class="light">Selecionar Aula</h3>
                            <form id="form4" action="indexPresenca.php" method="POST">
                                <!-- Seletor de Curso -->
                                <div class="input-field col s12">
                                    <select id="form4" style="width: 40%;" class="form-select form-select-lg" name="idCurso" id="idCurso" onchange="handleCourseChange(event, this)">
                                        <option  value="" disabled selected>Escolha o curso</option>
                                        <?php
                                        $sqlCurso = "SELECT idCurso, nomeCurso FROM curso";
                                        $resultadoCurso = mysqli_query($connect, $sqlCurso);
                                        while ($curso = mysqli_fetch_assoc($resultadoCurso)) {
                                            $selected = ($idCursoSelecionado == $curso['idCurso']) ? 'selected' : '';
                                            echo '<option value="' . htmlspecialchars($curso['idCurso']) . '"' . $selected . '>' . htmlspecialchars($curso['nomeCurso']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <!-- Seletor de Aula -->
                                <?php if (!empty($idCursoSelecionado)) : ?>
                                    <div class="input-field col s12">
                                        <select id="form4" style="width: 40%;" class="form-select form-select-lg" name="idAulas" id="idAulas" onchange="handleCourseChange(event, this)">
                                            <option value="" disabled selected>Escolha a aula</option>
                                            <?php
                                            $sqlAula = "SELECT idAulas, tituloAula FROM aulas WHERE idCurso = '$idCursoSelecionado'";
                                            $resultadoAula = mysqli_query($connect, $sqlAula);
                                            while ($aula = mysqli_fetch_assoc($resultadoAula)) {
                                                $selected = ($idAulaSelecionada == $aula['idAulas']) ? 'selected' : '';
                                                echo '<option value="' . htmlspecialchars($aula['idAulas']) . '"' . $selected . '>' . htmlspecialchars($aula['tituloAula']) . '</option>';
                                            }
                                            ?>
                                        </select>
                                    
                                    </div>
                                <?php endif; ?>
                            </form>


                            <?php if (!empty($idAulaSelecionada)) : ?>
                                <h3 class="light">Registrar Presença dos Alunos</h3>
                                <form action="../php_action/presencas/createPresenca.php" method="POST">

                                    <input type="hidden" name="idCurso" value="<?php echo htmlspecialchars($idCursoSelecionado); ?>">
                                    <input type="hidden" name="idAulas" value="<?php echo htmlspecialchars($idAulaSelecionada); ?>">

                                    <?php
                                    $queryAlunos = "
        SELECT a.idAluno, a.nome, p.idAulas IS NOT NULL AS presente
        FROM alunos AS a
        INNER JOIN matricula AS m ON a.idAluno = m.idAluno
        LEFT JOIN presenca AS p ON a.idAluno = p.idAluno AND p.idAulas = '$idAulaSelecionada'
        WHERE m.idCurso = '$idCursoSelecionado';";

                                    $resultadoAlunos = mysqli_query($connect, $queryAlunos);

                                    if ($resultadoAlunos !== false) {
                                        while ($aluno = mysqli_fetch_assoc($resultadoAlunos)) {
                                            $checked = $aluno['presente'] ? 'checked' : '';
                                            echo '<p>';
                                            echo '<label>';
                                            echo "<input type=\"checkbox\" name=\"presenca[{$aluno['idAluno']}]\" {$checked} />";
                                            echo '<span>' . htmlspecialchars($aluno['nome']) . '</span>';
                                            echo '</label>';
                                            echo '</p>';
                                        }
                                    } else {
                                        echo "Erro na consulta ao banco de dados: " . mysqli_error($connect);
                                    }
                                    ?>

                                    <button type="submit" name="btn-registrar-presenca" class="btn">Salvar Presença</button>
                                </form>
                            <?php endif ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>


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