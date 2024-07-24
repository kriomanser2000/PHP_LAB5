<?php
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in'])
{
    header('Location: entranceWeb1.php');
    exit();
}
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
<h2>Привіт!</h2>
<p>Вітаємо на головній сторінці.</p>
<a href="entrance1Main.php">Вийти</a>
</body>
</html>