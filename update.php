<?php
$dsn="mysql:host=localhost;
charset=utf8;
dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql="update  `student`
        set `name`='王小',
        `birthday`='1747-01-21',
        `tel`='0977123451'
        where `id`='3'";

$res=$pdo->exec($sql);

if($res == 1){
    echo $res;
    echo "更新成功";
}else{
    echo $res;
    echo "更新失敗";
    
}



?>