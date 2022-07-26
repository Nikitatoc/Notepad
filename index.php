<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devise-width,intial-sale=1.0">
    <title>Список справ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="box">
    <h1>Ваші справи</h1>
    <form method="post" action="api.php">
    <input type="text" name="task" id="task" placeholder="Що треба запамятати...">
    <input type="submit" name="send text" placeholder="зберегти" id="button">
    </form>
</div >
<?php

    $dns='mysql:host=localhost;dbname=List';
    $pdo= new PDO($dns, 'root','root');
    echo '<ul>';
    $query=$pdo ->query('SELECT * FROM `affairs` ODER BY `id`DESC ');
    while ($row=$query->fetch(PDO::FETCH_OBJ)){
        echo '<li>'.$row->task.'<a href="delete.php? id='.$row->task.'"><button>Видалити</button></a></li>';
    }
    echo '</ul>';
?>
</body>
</html>
