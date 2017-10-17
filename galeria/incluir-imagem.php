<?php

function isImage($currentFile){
    $file_type = $currentFile["type"];
    $allowed_type = 'image/';
    return substr($file_type, 0, strlen($allowed_type)) === $allowed_type;
}

function redirect($msg, $type){
    header('Location: ../index.php?p=galeria&acao=incluir&msg='. $msg .'&msg_type=' . $type);
    die();
}

function uploadFile($currentFile, $target_file){
    return move_uploaded_file($currentFile["tmp_name"], $target_file);
}

function saveOnDb($db, $name, $owner, $mime_type){
    return $db->query("INSERT INTO imagens (`name`, `created_date`, `owner`, `mime_type`) VALUES ('". $name . "', NOW(), '". $owner ."', '". $mime_type ."')");
}

function init(){
    $file = $_FILES["arquivo"];
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($file["name"]);
    $db = require_once('../db.php');

    if(!isImage($file)){
        redirect('O arquivo deve ser uma imagem', 'danger');
    }
    
    if (file_exists($target_file)) {
        redirect('O arquivo já existe.', 'danger');
    }
    
    if(uploadFile($file, $target_file)){
        saveOnDb($db, $file["name"], 'bla bla', $file["type"]);
        redirect('Arquivo salvo com sucesso', 'success');
    } else {
        redirect('Não foi possível salvar o arquivo', 'danger');
    }
}

init();
?>