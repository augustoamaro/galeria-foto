<?php
    require_once './biblioteca.php';
    startSession();
    $paginas = obterPaginas();
?>
<div class="masthead">
    <h3 class="text-muted">Site da turma de sisnet</h3>
    <h5>Bem Vindo
        <?php echo obterUsuarioLogado() ?>
    </h5>
    <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
        aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
            <?php
                foreach ($paginas as $codigo => $pagina) {
                    if ($codigo == $codigoSelecionado) {
                        $css = "active";
                    } else {
                        $css = "";
                    }
                    
                    echo "<li class='nav-item  {$css}'><a class='nav-link' href='?p={$codigo}'>{$pagina['menu']}</a></li>";
                }

                if(isset($_SESSION[SESSION_LOGIN])) {
            ?>
                <form action="logoff.php" method="POST">
                    <button type="submit" class="btn btn-danger">Logoff</button>
                </form>
            <?php } ?>
            </ul>
        </div>
    </nav>
</div>