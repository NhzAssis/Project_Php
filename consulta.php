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
    <link rel="stylesheet" type="text/css" href="css/painel.css">
    <title>Consultas</title>
</head>

<body>
        <h1> Consultas</h1>
        <ht><br>
        <form action="" method="POST">
            <div class="search-box">
                <input type="text" name="filtro" placeholder="Nome do paciente...">
                <a class= "sarch-btn" href=""></a>
            </div>
    </form>
        <?php
        echo "$registros registros encontrados";

        while ($exibirRegistros = mysqli_fetch_array($consultaBD)) {
            $nome = $exibirRegistros[0];
            $consulta = $exibirRegistros[1];
            $medico = $exibirRegistros[2];
            $data_consulta = $exibirRegistros[3];

            echo "<article>";

            echo "$nome<br>";
            echo "$consulta<br>";
            echo "$medico<br>";
            echo "$data_consulta<br>";

            echo "</article>";
        }
        ?>
    </div>
    </div>
</body>

</html>