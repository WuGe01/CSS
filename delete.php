<?php

$dan="mysql:host=localhost;
    charset=utf8;
    dbname=school";
$pdo=new PDO($dan,"root","");
date_default_timezone_set("Asia/Taipei");
$sql="
DELETE FROM `student` WHERE `student`.`id` = 5
    ";
$res=$pdo->exec($sql);

    if($res == 1){
        echo $res;
        echo "更新成功";
    }else{
        echo $res;
        echo "更新失敗";
        
    }

?>