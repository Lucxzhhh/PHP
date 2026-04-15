<?php
include "config/config.php";
include "data/Dados.php";

$erro = "";

if ($_POST) {
    foreach ($usuarios as $user) {
        if (
            $_POST["usuario"] == $user["usuario"] &&
            $_POST["senha"] == $user["senha"]
        ) {
            $_SESSION["usuario"] = $user["usuario"];
            $_SESSION["perfil"] = $user["perfil"];
            header("Location: pages/dashboard.php");
            exit;
        }
    }
    $erro = "Usuário ou senha inválidos!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card p-4 shadow-lg" style="width: 25rem;">
            <h3 class="text-center mb-4">Login</h3>
            <form method="POST">

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter your email" required
                        name="usuario">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password" required
                        name="senha">
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label for="rememberMe" class="form-check-label">Remember me</label>
                </div>

                <?php if ($erro != "") { ?>
                    <div class="alert alert-danger"><?php echo $erro; ?></div>
                <?php } ?>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <div class="text-center mt-3">
                <a href="#" class="text-decoration-none">Forgot password?</a><br>
                <span>Don't have an account? <a href="#" class="text-decoration-none">Register</a></span>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>