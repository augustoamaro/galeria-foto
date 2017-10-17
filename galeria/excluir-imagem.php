<?php
$db = require_once('../db.php');
$id = filter_input(INPUT_GET, 'id');

function redirect($msg, $type){
    header('Location: ../index.php?p=galeria&msg='. $msg .'&msg_type=' . $type);
    die();
}

function deleteFromDb($db, $id){
    return $db->query("DELETE FROM imagens WHERE id = '". $id ."'");
}

function getFileName($db, $id){
    $result = $db->query("SELECT name FROM imagens WHERE id = '". $id ."'");
    $file = $result->fetch_assoc();
    return $file["name"];
}

function deleteFromDisk($db, $id){
    $fileName = getFileName($db, $id);
    unlink("uploads/" . $fileName);
}

if(!isset($id)) {
    redirect('ID de arquivo não definido', 'danger');
}

deleteFromDb($db, $id);
deleteFromDisk($db, $id);
redirect('Imagem excluída com sucesso', 'success');

?>