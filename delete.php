<?php
$dns='mysql:host=localhost;dbname=List';
$pdo= new PDO($dns, 'root','root');


$deleteId=$_GET['id'];
$sqlCommand='DELETE FROM `affairs`WHERE `id`=?';
$query=$pdo->prepare($sqlCommand);
$query->execute([$deleteId]);

header('location:/');
