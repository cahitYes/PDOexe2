<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form name="addthearticle" method="POST" action="">

<p>

    <label for="thearticle">thearticletitle:</label> <input type="text" id="thearticletitle" name="thearticletitle"  required>

</p>

<p>

    <label for="thearticlemessage">thearticlemessage:</label> <input type="text" id="thearticlemessage" name="thearticlemessage"  required>

</p>

<p>

    <label for="thearticledesc">thearticledesc:</label> <textarea id="thearticledesc" name="thearticledesc" required></textarea>

</p>

<p>

    <label for="thearticledesc">Envoyer :</label> <input type="submit" value="envoyer" />

</p>

</form>
<?php
require_once "../view/footer.php";
?>