<?php
require_once "function.php";
$requete="SELECT
  `slug`,
  `nav-title`
FROM
  `content`
;";
$stmt = $conn -> prepare($requete);
$stmt ->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role="document">

<header class="header">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin.php">WtfWeb</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php
                        while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo addActive($row['slug'], $row['nav-title'], $currentPage);
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>