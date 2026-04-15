<?php
include "../../config/config.php";
include "../../includes/auth.php";
include "../../data/Dados.php";
include "../../includes/header.php";
include "../../includes/menu.php";

if ($_POST) {
    $novaConta = [
        "descricao" => $_POST["descricao"],
        "valor"     => $_POST["valor"],
        "tipo"      => $_POST["tipo"]
    ];
    array_push($contas, $novaConta);
}
?>




<form method="POST">
    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao">
    </div>
    <div class="mb-3">
        <label class="form-label">Valor</label>
        <input type="number" class="form-control" name="valor">
    </div>
    <select name="tipo" class="form-control">
        <option value="Pagar">Pagar</option>
        <option value="Receber">Receber</option>
    </select>
    <button class="btn btn-success">Cadastrar</button>
</form>

<?php include "../../includes/footer.php"; ?>