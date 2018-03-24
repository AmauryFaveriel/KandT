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
  ':slug',
  ':title',
  ':h1',
  ':p',
  ':spanClass',
  ':spanText',
  ':img-alt',
  ':img-src',
  ':nav-title'
);";

