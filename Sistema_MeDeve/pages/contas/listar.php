<?php
include "../../config/config.php";
include "../../includes/auth.php";
include "../../data/Dados.php";
include "../../includes/header.php";
include "../../includes/menu.php";


?>

     <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($contas as $conta) { ?>
        <tr>
            <td><?php echo $conta["descricao"]; ?></td>
            <td>R$ <?php echo $conta["valor"]; ?></td>
            <td><?php echo $conta["tipo"]; ?></td>
        </tr>
    <?php } ?>
</tbody>
    </table>
<?php
include "../../includes/footer.php";
?>