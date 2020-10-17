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

