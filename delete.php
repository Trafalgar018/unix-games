<?php
include_once 'configurationDB/config.php';
include_once 'configurationDB/connectdb.php';

//seleccionamos el id de la opcion a borrar

$id = $_REQUEST['id'];

//se ejecuta la sentencia sql

$sql = "DELETE FROM juegos WHERE id = :id LIMIT 1";
$result = $pdo->prepare($sql);
$result->execute([
    'id' => $id
]);

//devolvemos la pagina principal

header('Location: index.php');