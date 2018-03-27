<?php
/**
 * Created by PhpStorm.
 * User: Amaury
 * Date: 25/03/2018
 * Time: 12:08
 */

if (empty($_POST['id']) ||
    empty($_POST['slug']) ||
    empty($_POST['title']) ||
    empty($_POST['h1']) ||
    empty($_POST['p']) ||
    empty($_POST['spanClass']) ||
    empty($_POST['spanText']) ||
    empty($_POST['img-alt']) ||
    empty($_POST['nav-title'])) {
        header('Location:edit.php?error=Veuillez remplir tous les champs');
        exit;
    }

require_once 'includes/connexion.php';

$requete = "UPDATE
  `content`
SET
  `slug` = :slug,
  `title` = :title,
  `h1` = :h1,
  `p` = :p,
  `spanClass` = :spanClass,
  `spanText` = :spanText,
  `img-alt` = :imgAlt,
  `nav-title` = :navTitle
WHERE
  `id` = :id
;";
$stmt = $conn -> prepare($requete);
$stmt -> bindValue(':id', htmlentities($_POST['id']));
$stmt -> bindValue(':slug', htmlentities($_POST['slug']));
$stmt -> bindValue(':title', htmlentities($_POST['title']));
$stmt -> bindValue(':h1', htmlentities($_POST['h1']));
$stmt -> bindValue(':p', htmlentities($_POST['p']));
$stmt -> bindValue(':spanClass', htmlentities($_POST['spanClass']));
$stmt -> bindValue(':spanText', htmlentities($_POST['spanText']));
$stmt -> bindValue(':imgAlt', htmlentities($_POST['img-alt']));
$stmt -> bindValue(':navTitle', htmlentities($_POST['nav-title']));
$stmt -> execute();
header('Location:admin.php');