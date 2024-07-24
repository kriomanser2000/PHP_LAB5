<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    echo 'Реєстрація успішна!';
    // header('Location: login.php');
    // exit();
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
<h2>Форма реєстрації</h2>
<form method="post">
    <label for="new_login">Логін:</label>
    <input type="text" id="new_login" name="login" required>
    <br>
    <label for="new_password">Пароль:</label>
    <input type="password" id="new_password" name="password" required>
    <br>
    <label for="confirm_password">Підтвердження паролю:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="phone">Номер телефону:</label>
    <input type="text" id="phone" name="phone" required>
    <br>
    <button type="submit">Реєстрація</button>
</form>
<p>Вже є обліковий запис? <a href="entranceWeb1.php">Вхід</a></p>
</body>
</html>
