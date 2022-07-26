<?php
$task=$_POST['task'];
if ($task==''){
    echo 'введіть саму спарву';
    exit();
}
$dns='mysql:host=localhost;dbname=List';
$pdo= new PDO($dns, 'root','root');

$sqlCommand='INSERT INTO Affairs(task) VALUES (:task)';
$query=$pdo->prepare($sqlCommand);
$query->execute(['task'=>$task]);

header('location:/');
