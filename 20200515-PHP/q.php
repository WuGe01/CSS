<?php
$dns="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dns,'root',"");
date_default_timezone_set("Asia/Taipei");




function q($sql){
    global $pdo;
    return $pdo->query($sql)->fetchAll();
}
?>