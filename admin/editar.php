<?php
$pagina = filter_input(INPUT_GET, 'pagina');
?>

<form action="?p=admin&acao=confirmar_edicao" method="post">
  <input type='hidden' value='<?=$pagina?>' name='identificador'/>  
    <div class="form-group">
      <label for="titulo">Título</label>
      <input type="text" class="form-control" name="titulo" id="titulo" 
      value="<?=$paginas[$pagina]['titulo']?>">
    </div>
    <div class="form-group">
      <label for="menu">Menu</label>
      <input type="text" class="form-control" name="menu" id="menu" 
      value="<?=$paginas[$pagina]['menu']?>">
    </div>
    <div class="form-group">
      <label for="conteudo">Página de conteúdo</label>
      <!-- <textarea class="wyswyg" name="conteudo" id="conteudo"><?=$paginas[$pagina]['conteudo']?></textarea> -->
      <input type="text" class="form-control" name="conteudo" id="conteudo" value="<?=$paginas[$pagina]['conteudo']?>">
    </div>
      <div class="form-group">
      <label for="pontos">pontos</label>
      <input type="text" class="form-control" name="pontos" id="pontos" 
      value="<?=$paginas[$pagina]['pontos']?>">
    </div>
  <button type="submit" class="btn btn-primary">Editar</button>
  <a href="?p=admin&acao=listar" class="btn btn-default">Voltar</a>
</form>