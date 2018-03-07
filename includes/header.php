<?php
require_once "includes/function.php";
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
                <a class="navbar-brand" href="index.html">WtfWeb</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?=addActive('index.php','Teletubbies') ?>
                    <?=addActive('kittens.php', 'Kittens') ?>
                    <?=addActive('ironmaiden.php', 'Iron Maiden') ?>
                </ul>
            </div>
        </div>
    </nav>
</header>