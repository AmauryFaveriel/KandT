<?php
/**
 * Created by PhpStorm.
 * User: Amaury
 * Date: 25/03/2018
 * Time: 11:58
 */

if(!isset($_GET['id'])){
    header('Location:admin.php?error=No provided id');
    exit;
}

require_once 'includes/connexion.php';
$requete = "SELECT
  `id`,
  `slug`,
  `title`,
  `h1`,
  `p`,
  `spanClass`,
  `spanText`,
  `img-alt`,
  `nav-title`
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
    <title>Editer</title>
</head>
<body>
<h1>Modifier la page <?=$row['slug']?></h1>
<a href="admin.php">Annuler la modification</a>
<form action="doEdit.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <label for="slug">Slug </label> : <input type="text" name="slug" id="slug" value="<?=$row['slug']?>"><br>
    <label for="title">Title </label> : <input type="text" name="title" id="title" value="<?=$row['title']?>"><br>
    <label for="h1">H1</label> : <input type="text" name="h1" id="h1" value="<?=$row['h1']?>"><br>
    <label for="p">p </label> : <input type="text" name="p" id="p" value="<?=$row['p']?>"><br>
    <label for="spanClass">Span Class </label> : <input type="text" name="spanClass" id="spanClass" value="<?=$row['spanClass']?>"><br>
    <label for="spanText">Span Text </label> : <input type="text" name="spanText" id="spanText" value="<?=$row['spanText']?>"><br>
    <label for="img-alt">Image alt </label> : <input type="text" name="img-alt" id="img-alt" value="<?=$row['img-alt']?>"><br>
    <label for="nav-title">Navigation Title </label> : <input type="text" name="nav-title" id="nav-title" value="<?=$row['nav-title']?>"><br>
    <input type="submit" value="Modifier la page">
</form>
</body>
</html>
