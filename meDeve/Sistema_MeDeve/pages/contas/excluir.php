<?php
include "../../config/config.php";
include "../../includes/auth.php";
include "../../data/Dados.php";
include "../../includes/header.php";
include "../../includes/menu.php";

$id = $_GET["id"];
unset($contas[$id]);
header("Location: listar.php");
?>