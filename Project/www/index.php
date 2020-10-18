<?php
declare(strict_types=1);

include './model/Database.php';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'nubiumtask';
$dsn = 'mysql:host=127.0.0.1;dbname=nubiumtask';

//$db = new Database($dbhost, $dbuser, $dbpass, $dbname);

$database = new Nette\Database\Connection($dsn, $dbuser, $dbpass);

$result = $database->query('SELECT * FROM users');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css">
    <title>Nubium Web</title>
</head>

<body>
<div class="login-page">
    <div class="form">
        <form class="login-form">
            <input type="text" placeholder="username"/>
            <input type="password" placeholder="password"/>
            <button onclick="location.href='main.php'" type="button">login</button>
            <p class="message">Not registered? <a href="register.php">Create an account</a></p>
        </form>
    </div>
</div>
</body>
</html>

