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

$articles = $database->query('SELECT * FROM articles');

foreach ($articles as $row) {
    echo $row->Nadpis;
}
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
    <div class="mainpage">
        <div>
            <div class="articles">
                <h3>Nadpis</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consequuntur in nam odit sequi? Ad aliquid dignissimos
                    eligendi et fugiat harum minima, minus mollitia necessitatibus nihil, nostrum quas quasi repellendus?
                </p>
                <p>18/10/2020</p>
                <p>Viditelnost</p>
                <p>0 Likes  0 Dislikes</p>
            </div>
            <div class="articles">
                <h3>Nadpis</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consequuntur in nam odit sequi? Ad aliquid dignissimos
                    eligendi et fugiat harum minima, minus mollitia necessitatibus nihil, nostrum quas quasi repellendus?
                </p>
                <p>18/10/2020</p>
                <p>Viditelnost</p>
                <p>0 Likes  0 Dislikes</p>
            </div>
        </div>
        <div class="sidebar">
            <input type="text" id="name" name="name">
            <button>Sort by name</button>
            <br>
            <input type="date" id="date" name="date">
            <button>Sort by date</button>
            <br>
            <button>Sort by highest likes</button>
        </div>
    </div>
</body>
</html>