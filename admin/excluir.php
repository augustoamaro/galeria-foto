<?php
if (excluirPagina($pagina) and ($pagina != 'admin')){
    $mensagem = "Pagina <strong>$pagina</strong> excluída com sucesso";
    $paginas = obterPaginas();
}
include 'admin/listagem.php';
