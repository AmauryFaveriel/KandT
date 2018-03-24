<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
</head>
<body>
<?php
    if(isset($_GET['error'])){
        echo $_GET['error'];
    }
?>
    <h1>Ajouter une nouvelle page</h1>
    <a href="admin.php">Annuler l'ajout</a>
    <form action="doAdd.php" method="post" enctype="multipart/form-data">
        <label for="slug">Slug </label> : <input type="text" name="slug" id="slug"><br>
        <label for="title">Title </label> : <input type="text" name="title" id="title"><br>
        <label for="h1">H1</label> : <input type="text" name="h1" id="h1"><br>
        <label for="p">p </label> : <input type="text" name="p" id="p"><br>
        <label for="spanClass">Span Class </label> : <input type="text" name="spanClass" id="spanClass"><br>
        <label for="spanText">Span Text </label> : <input type="text" name="spanText" id="spanText"><br>
        <label for="img-alt">Image alt </label> : <input type="text" name="img-alt" id="img-alt"><br>
        <label for="nav-title">Navigation Title </label> : <input type="text" name="nav-title" id="nav-title"><br>
        <label for="img-src">Image </label> : <input type="file" name="img-src" id="img-src"><br>
        <input type="submit" value="Créer une page">
    </form>
</body>
</html>
