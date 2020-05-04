<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");
$id=$_POST['id'];
$acc=$_POST['acc'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$birthday=$_POST['birthday'];

$sql="
    update `student`
    set
    `acc`='$acc',
    `pw`='$pw',
    `name`='$name',
    `email`='$email',
    `tel`='$tel',
    `birthday`='$birthday',
    `update_time` = '".date("Y-m-d H:i:s")."'
    where `id`='$id'
";
$res=$pdo->exec($sql);

if($res){
    echo "<h1><div>更新成功</div></h1>";
    header("Refresh:3;url=list_user.php");
}else{
    echo "<h1><div>更新失敗</div></h1>";
    header("Refresh:3;url=list_user.php");
}






?>