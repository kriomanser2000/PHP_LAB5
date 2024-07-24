<?php
session_start();
$stored_login = 'admin';
$stored_password = 'password123';
$error_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    if ($login === $stored_login && $password === $stored_password)
    {
        $_SESSION['logged_in'] = true;
        header('Location: entrance1Main.php');
        exit();
    }
    else
    {
        $error_message = 'Неправильний логін або пароль. Спробуйте ще раз або зареєструйтесь.';
    }
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
<h2>Форма логіну</h2>
<?php if ($error_message): ?>
    <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
<?php endif; ?>
<form method="post">
    <label for="login">Логін:</label>
    <input type="text" id="login" name="login" required>
    <br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Login</button>
</form>
<p>Не маєте облікового запису? <a href="entrance1Register.php">Реєстрація</a></p>
</body>
</html>
