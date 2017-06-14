<?php
try{
    $pdo = new PDO('mysql:dbname=zikoos;host=localhost','root','root');
} catch(PDOException $exception) {
    die($exception->getMessage());
}
$pdo->exec("SET NAMES UTF8");
