<?php
    $db = require_once('db.php');
?>
<?php include('alert.php') ?>
<div class="form-group">
    <a href="index.php?p=galeria&acao=incluir" class="btn btn-primary">Nova imagem</a>
</div>
<div class="image-gallery">
    <table class="table table-striped table-inverse">
        <thead>
            <tr>
                <th>#</th>
                <th>Imagem</th>
                <th>Nome</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $db->query('SELECT * FROM imagens');
            while($row = $result->fetch_array()){
            ?>
            <tr>
                <td>#<?php echo $row["id"] ?></td>
                <td class="text-center">
                    <img src="uploads/<?php echo $row["name"] ?>" alt="">
                </td>
                <td><?php echo $row["name"] ?></td>
                <td class="text-center">
                    <a href="##" class="btn btn-primary">Editar</a>
                    <a href="galeria/excluir-imagem.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php
            }
            ?>
            <?php if($result->num_rows == 0) { ?>
            <tr>
                <td colspan="4" class="text-center">Nenhuma imagem cadastrada.</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>