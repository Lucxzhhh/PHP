<?php
include "../config/config.php";
include "../includes/auth.php";
include "../data/Dados.php";
include "../includes/header.php";
include "../includes/menu.php";
?>

<div class="container">
    <h1>Bem-vindo, <?php echo $_SESSION["usuario"]; ?>!</h1>
</div>

<?php include "../includes/footer.php"; ?>