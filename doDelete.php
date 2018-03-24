<?php
/**
 * Created by PhpStorm.
 * User: Amaury
 * Date: 24/03/2018
 * Time: 14:30
 */

if(!isset($_POST['id'])){
    header('Location:admin.php?error=No provided id');
    exit;
}

require_once 'includes/connexion.php';
$requete = "DELETE FROM
`content`
WHERE
`id` = :id
;";
$stmt = $conn -> prepare($requete);
$stmt -> bindValue(':id', $_POST['id']);
$stmt -> execute();
header('Location:admin.php');