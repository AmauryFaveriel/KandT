<?php
$requete="SELECT
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
WHERE
  `slug` = :slug
;";
$stmt = $conn -> prepare($requete);
$stmt -> bindValue(':slug', $currentPage);
$stmt -> execute();
$row = $stmt -> fetch(PDO::FETCH_ASSOC);
?>

<div class="container theme-showcase" role="main">
    <div class="jumbotron">
        <h1><?=$row['h1'] ?></h1>
        <p><?=$row['p'] ?></p>
        <span class="label <?=$row['spanClass'] ?>"><?=$row['spanText'] ?></span>
    </div>
    <img class="img-thumbnail" alt="<?=$row['img-alt'] ?>" src="img/<?=$row['img-src'] ?>" data-holder-rendered="true">
</div>