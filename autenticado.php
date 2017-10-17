<?php

session_start();
require_once './biblioteca.php';

  if (!isset($_SESSION['logado'])){
		header('location: login.php');
	}
	if ($_POST){
		unset($_SESSION['logado']);
		header('location: login.php');
	}
?>


    
    
    
    
    
    


