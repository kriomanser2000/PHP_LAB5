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
<form method="post">
    <label for="userInput">Введіть текст:</label>
    <input type="text" id="userInput" name="userInput">
    <button type="submit">Відправити</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $userInput = htmlspecialchars($_POST['userInput']);
    echo "<p>Ви ввели: $userInput</p>";
}
?>
</body>
</html>