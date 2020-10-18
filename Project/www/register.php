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
        <form class="register-form">
            <input type="text" placeholder="name"/>
            <input type="password" placeholder="password"/>
            <input type="text" placeholder="email address"/>
            <button onclick="location.href='index.php'" type="button">create</button>
            <p class="message">Already registered? <a href="index.php">Sign In</a></p>
        </form>
    </div>
</div>
</body>
</html>

