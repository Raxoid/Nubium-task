<?php

declare(strict_types=1);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css">
    <title>{ifset title}{include title|stripHtml} | {/ifset}Nette Web</title>
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

