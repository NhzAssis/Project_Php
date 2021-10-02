<?php   
session_start();
include('verifica_login.php');
?>

<h2>Bem vindo, 
    <?php echo $_SESSION['usuario']; ?>
</h2>
<h2><a href="logout.php">Sair</a></h2>
