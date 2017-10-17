<?php

require_once './biblioteca.php';

startSession();
$paginas = obterPaginas();

$p = filter_input(INPUT_GET, 'p');
$codigoSelecionado = isset($paginas[$p]) ? $p : 'home';
$paginaSelecionada = isset($paginas[$codigoSelecionado]) ? $paginas[$codigoSelecionado] : $paginas['home'];

if($codigoSelecionado == "admin")
    verificaUsuarioLogado();

definirPaginaNavegada($codigoSelecionado);
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?= $paginaSelecionada['titulo'] ?>
    </title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/justified-nav.css" rel="stylesheet">
    <link href="static/css/image-gallery.css" rel="stylesheet">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'.wyswyg' });</script>
  </head>
<body>
    <div class="container">
      <?php include_once 'header.php' ?>
      <div class="row">
        <div class="col-lg-12">
          <h2>
            <?= $paginaSelecionada['titulo'] ?>
          </h2>
          <?php
            include($paginaSelecionada['conteudo'])
          ?>
        </div>
      </div>
      <footer class="footer">
        <p>&copy; 2017 Alunos de Sisnet inc.</p>
      </footer>
    </div>
</body>
</html>