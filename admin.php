<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
 * Date: 23/03/2018
 * Time: 14:39
 */
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
  `img-src`,
  `nav-title`
FROM
  `content`
;";
$stmt = $conn -> prepare($requete);
$stmt -> execute();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Panneau administrateur</h1>
    <a href="add.php">Ajouter une nouvelle page</a>
    <table style="width: 100%">
        <tr>
            <th>Id</th>
            <th>Slug</th>
            <th>Titre</th>
            <th>h1</th>
            <th>p</th>
            <th>spanClass</th>
            <th>spanText</th>
            <th>img-alt</th>
            <th>img-src</th>
            <th>nav-title</th>
        </tr>
        <?php
            while(false !== $row = $stmt -> fetch(PDO::FETCH_ASSOC)):
        ?>
        <tr>
            <th><?=$row['id']?></th>
            <th><?=$row['slug']?></th>
            <th><?=$row['title']?></th>
            <th><?=$row['h1']?></th>
            <th><?=$row['p']?></th>
            <th><?=$row['spanClass']?></th>
            <th><?=$row['spanText']?></th>
            <th><?=$row['img-alt']?></th>
            <th><?=$row['img-src']?></th>
            <th><?=$row['nav-title']?></th>
            <th>
                <a href="delete.php?id=<?=$row['id']?>">Supprimer</a>
            </th>
        </tr>
        <?php
            endwhile;
        ?>
    </table>
</body>
</html>