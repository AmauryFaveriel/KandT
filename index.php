<?php
require_once "includes/connexion.php";
define('APP_DEFAULT_PAGE', 'teletubbies');
define('APP_PAGE_PARAM', 'p');

if(isset($_GET[APP_PAGE_PARAM])) {
    $currentPage = $_GET[APP_PAGE_PARAM];
} else {
    $currentPage = APP_DEFAULT_PAGE;
}

$requete="SELECT
`slug`
FROM
`content`
;";
$stmt = $conn -> prepare($requete);
$stmt -> execute();

$test = false;
while(false !== $row = $stmt -> fetch(PDO::FETCH_ASSOC)){
    if($row['slug']===$currentPage){
        $test=true;
    }
}
if($test===false){
    $currentPage=APP_DEFAULT_PAGE;
}

include "includes/header.php";
include "includes/contentPage.php";
include "includes/footer.php";

