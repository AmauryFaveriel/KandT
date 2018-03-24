<?php
/**
 * Created by PhpStorm.
 * User: Amaury
 * Date: 24/03/2018
 * Time: 14:17
 */

if(!isset($_GET['id'])){
    header('Location:admin.php?error=No provided id');
    exit;
}

require_once 'includes/connexion.php';
$requete = "SELECT
    `slug`
    FROM
    `content`
    WHERE
    `id` = :id
    ;";
$stmt = $conn -> prepare($requete);
$stmt -> bindValue(':id', $_GET['id']);
$stmt -> execute();
$row = $stmt -> fetch(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supprimer</title>
</head>
<body>
    <h2>Voulez vous supprimer <?=$row['slug']?> ?</h2>
    <form action="doDelete.php" method="post">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <input type="submit" value="Supprimer">
    </form>
</body>
</html>
