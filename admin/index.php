<?php
        require_once '../biblioteca.php';
        
        $paginas = obterPaginas();
        $acao = filter_input(INPUT_GET, 'acao');
        $pagina = filter_input(INPUT_GET, 'pagina');

        if (is_null($acao)){
            $acao = "listar";
        }
        switch($acao){
            case "listar":
                	include_once 'listagem.php';
            break;
            case "editar":
                    include_once 'editar.php';
                    
                	$conteudo = filter_input(INPUT_POST,"conteudo");
                    $pontos = filter_input(INPUT_POST,"pontos");
                	
                    if($indice == null){
                        
                        $mensagem2 = "Você não preencheu o<strong>indíce</strong> corretamente";   
                        
                    }if($titulo == null){
                        
                        $mensagem2 = "Você não preencheu o <strong>título</strong> corretamente";   
                        
                    }if($menu == null){
                        
                        $mensagem2 = "Você não preencheu <strong>menu</strong> corretamente";   
                        
                    }if($conteudo == null){
                        
                        $mensagem2 = "Você não preencheu o <strong>conteúdo</strong> corretamente";   
                        
                    }
                
                
                    else{
                
                    $paginas[$indice] = array(
                    "titulo" => $titulo,
                    "menu" =>  $menu,
                    "conteudo" => $conteudo,
                    "pontos" => $pontos
                	);
                	salvarPaginas($paginas);
                	$mensagem = "Pagina <strong>$indice</strong> adicionada com sucesso ao grandioso banco de dados";
                	}
                
                    include_once 'listagem.php';
            break;
            case "confirmar_edicao":
                
                    $indice = filter_input(INPUT_POST,"identificador");
                	$titulo = filter_input(INPUT_POST,"titulo");
                	$menu = filter_input(INPUT_POST,"menu");
                	$conteudo = filter_input(INPUT_POST,"conteudo");
                    $pontos = filter_input(INPUT_POST,"pontos");
                	
                      if($indice == null){
                        
                        $mensagem2 = "Você não preencheu o<strong>indíce</strong> corretamente";   
                        
                    }if($titulo == null){
                        
                        $mensagem2 = "Você não preencheu o <strong>título</strong> corretamente";   
                        
                    }if($menu == null){
                        
                        $mensagem2 = "Você não preencheu <strong>menu</strong> corretamente";   
                        
                    }if($conteudo == null){
                        
                        $mensagem2 = "Você não preencheu o <strong>conteúdo</strong> corretamente";   
                        
                    }
                
                else{
                        
                   
                
                    $paginas[$indice] = array(
                    "titulo" => $titulo,
                    "menu" =>  $menu,
                    "conteudo" => $conteudo,
                    "pontos" => $pontos
                	);
                	salvarPaginas($paginas);
                	$mensagem = "Pagina <strong>$indice</strong> editada com sucesso";
                     
                    }
                    
                include_once 'listagem.php';
        
                
                break;
                
                
            case "excluir":
                	include_once 'excluir.php';
            break;
        }
        ?>