<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body
    {
        font-family: Arial, sans-serif;
    }
    .container
    {
        width: 50%;
        margin: 0 auto;
    }
    .form-group
    {
        margin-bottom: 15px;
    }
    .form-group label
    {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input, .form-group textarea
    {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }
    .form-group textarea
    {
        height: 100px;
    }
    .form-group button
    {
        padding: 10px 15px;
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
    }
    .form-group button:hover
    {
        background-color: #0056b3;
    }
    .output
    {
        margin-top: 20px;
        padding: 10px;
        border: 1px solid #ddd;
    }
</style>
<body>
<div class="container">
    <h1>Contact Us</h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="submit">Send</button>
        </div>
    </form>
    <?php
    if (isset($_POST['submit']))
    {
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);
        echo "<div class='output'>";
        echo "<h2>Form Submitted</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Phone:</strong> $phone</p>";
        echo "<p><strong>Message:</strong> $message</p>";
        echo "</div>";
    }
    ?>
</div>
</body>
</html>