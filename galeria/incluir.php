<?php include('alert.php') ?>
<form action="galeria/incluir-imagem.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="file" accept="image/*" name="arquivo" />
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Criar</button>
        <button class="btn btn-secondary" type="reset">Cancelar</button>
    </div>
</form>