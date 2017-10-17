<?php
if (isset($mensagem)){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Atenção!</strong> <?=$mensagem?>.
</div> 

<?php
}
?>


<?php
if (isset($mensagem2)){
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Atenção!</strong> <?=$mensagem2?>.
</div>    


<?php
}
?>


<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Índice</th>
            <th>Título</th>
            <th>Menu</th>
            <th>Arquivo de conteudo</th>
            <th>Ações</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach($paginas as $indice => $pagina){?>
        <tr>
            <td><?=$pagina['pontos']?></td>
            <td><?=$indice?></td>
            <td><?=$pagina['titulo']?></td>
            <td><?=$pagina['menu']?></td>
            <td><?=$pagina['conteudo']?></td>
    
            <td>
             
                <a href="?p=admin&acao=editar&pagina=<?=$indice?>" class="btn btn-primary"> Editar</a>
                <a href="?p=admin&acao=excluir&pagina=<?=$indice?>" class="btn btn-danger">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<a href="?p=admin&acao=adicionar" class="btn btn-success btn-lg">Adicionar Nova Página</a>