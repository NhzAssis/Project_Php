<?php
include_once("conexao.php");

$filtro = isset($_POST['filtro']) ? $_POST['filtro'] : "";
$sql = "SELECT nome, medico, consulta, data_consulta FROM usuario WHERE nome LIKE '$filtro%'";
$consultaBD = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consultaBD);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/consulta.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
    <style>
        body {
            background-color: #C0C0C0;
        }
    </style>

    <title>Consultas</title>
</head>

<body>
    <div class="container-fluid">
        <br><br><br>
        <div class="card" >
            <div class="card-header">
                Consultas
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="search-box">
                        <div class="form-row">
                            <div class="col-md">
                                <input class="form-control" type="text" name="filtro" placeholder="Nome do paciente...">
                            </div>

                            <div class="col-md">
                                <button class="btn btn-danger">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Medico</th>
                        <th>Consulta</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($exibirRegistros = mysqli_fetch_array($consultaBD)) {
                        $nome = $exibirRegistros[0];
                        $consulta = $exibirRegistros[1];
                        $medico = $exibirRegistros[2];
                        $data_consulta = $exibirRegistros[3];
                        echo "<tr>";
                        echo "<td>$nome</td>";
                        echo "<td>$consulta</td>";
                        echo "<td>$medico</td>";
                        echo "<td>$data_consulta</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json'
            }
        });
    })
</script>