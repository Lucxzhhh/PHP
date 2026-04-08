<?php
$perfil = $_SESSION["perfil"];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a href="/MeDeve/Sistema_MeDeve/pages/dashboard.php" class="navbar-brand">Sistema Financeiro</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="/MeDeve/Sistema_MeDeve/pages/dashboard.php" class="nav-link">Dashboard</a>
            </li>
            <?php if ($perfil == "cliente") { ?>
                <li class="nav-item">
                    <a href="/MeDeve/Sistema_MeDeve/pages/contas/listar.php" class="nav-link">Minhas Contas</a>
                </li>
            <?php } ?>
            <?php if ($perfil == "empresa") { ?>
                <li class="nav-item">
                    <a href="/MeDeve/Sistema_MeDeve/pages/contas/listar.php" class="nav-link">Contas da Empresa</a>
                </li>
                <li class="nav-item">
                    <a href="/MeDeve/Sistema_MeDeve/pages/contas/cadastrar.php" class="nav-link">Cadastrar Conta</a>
                </li>
            <?php } ?>
            <?php if ($perfil == "proprietario") { ?>
                <li class="nav-item">
                    <a href="/MeDeve/Sistema_MeDeve/pages/contas/listar.php" class="nav-link">Todas as Contas</a>
                </li>
            <?php } ?>
            <li class="nav-item">
                <a href="/MeDeve/Sistema_MeDeve/logout.php" class="nav-link">Sair</a>
            </li>
        </ul>
    </div>
</nav>
