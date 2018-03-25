<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
 * Date: 24/03/2018
 * Time: 12:12
 */

if (empty($_POST['slug']) || empty($_POST['title']) || empty($_POST['h1']) || empty($_POST['p']) || empty($_POST['spanClass']) || empty($_POST['spanText']) || empty($_POST['img-alt']) || empty($_POST['nav-title']) || empty($_FILES['img-src']['name'])){
    header('Location:add.php?error=Veuillez remplir tous les champs');
    exit;
}

if($_FILES['img-src']['size'] > 2000000){
    header('Location:add.php?error=Taille maximal du fichier: 2MB');
    exit;
}

$infoFile=pathinfo($_FILES['img-src']['name']);
$extension=$infoFile['extension'];
$authorizeExt=['jpg', 'jpeg', 'png', 'gif'];
if(!in_array($extension, $authorizeExt)){
    header('Location:add.php?error=Extensions de fichier autorisées : jpg, jpeg, png, gif');
    exit;
}

require_once 'includes/connexion.php';
$requete = "INSERT INTO
`content`(
  `slug`,
  `title`,
  `h1`,
  `p`,
  `spanClass`,
  `spanText`,
  `img-alt`,
  `img-src`,
  `nav-title`
)
VALUES
(
  :slug,
  :title,
  :h1,
  :p,
  :spanClass,
  :spanText,
  :imgAlt,
  :imgSrc,
  :navTitle
);";

$uploadFile = 'img/'.$_FILES['img-src']['name'];
move_uploaded_file($_FILES['img-src']['tmp_name'], $uploadFile);

$stmt = $conn -> prepare($requete);
$stmt -> bindValue(':slug', htmlentities($_POST['slug']));
$stmt -> bindValue(':title', htmlentities($_POST['title']));
$stmt -> bindValue(':h1', htmlentities($_POST['h1']));
$stmt -> bindValue(':p', htmlentities($_POST['p']));
$stmt -> bindValue(':spanClass', htmlentities($_POST['spanClass']));
$stmt -> bindValue(':spanText', htmlentities($_POST['spanText']));
$stmt -> bindValue(':imgAlt', htmlentities($_POST['img-alt']));
$stmt -> bindValue(':navTitle', htmlentities($_POST['nav-title']));
$stmt -> bindValue(':imgSrc', htmlentities($_FILES['img-src']['name']));
$stmt -> execute();
header('Location:admin.php');