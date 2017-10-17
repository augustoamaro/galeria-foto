<?php

session_start();
require_once './biblioteca.php';
    
    $login = $_POST['login'];
    $senha = $_POST['password'];
    
    if(isset($login) and isset($senha)){
        if(autentica($login, $senha)){
            header('location: index.php');
        } else {
            header('location: login.php');
        }
    }
    
    if($_GET){
        unset($_SESSION[SESSION_LOGIN]);
        header('location: index.php');
    } else{
        echo "<h3>Login ou senha incorreta!</h3>";
        header( "refresh:2; url=login.php" ); 
    }
?>
    
    
    
    


