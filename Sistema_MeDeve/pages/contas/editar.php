<?php
include "../../config/config.php";
include "../../includes/auth.php";
include "../../data/Dados.php";
include "../../includes/header.php";
include "../../includes/menu.php";

$id = $_GET["id"];
$conta = $contas[$id];
if ($_POST) {
    $contas[$id]["descricao"] = $_POST["descricao"];
    $contas[$id]["valor"] = $_POST["valor"];
    $contas[$id]["tipo"] = $_POST["tipo"];
}
?>

<form method="post">
    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao" value="<?php echo $conta['descricao']; ?>">
    </div>
    <div class=" mb-3">
        <label class="form-label">Valor</label>
        <input type="number" class="form-control" name="valor" value="<?php echo $conta['valor'] ?>">
    </div>
    <select name="tipo" class="form-control">
        <option value="Pagar" <?php if ($conta['tipo'] == 'Pagar')
            echo 'selected'; ?>>Pagar</option>
        <option value="Receber" <?php if ($conta['tipo'] == 'Receber')
            echo 'selected'; ?>>Receber</option>
    </select>
    <button class="btn btn-primary">Salvar</button>
</form>

<?php include "../../includes/footer.php"; ?>