<?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,"root","");
    date_default_timezone_set("Asia/Taipei");
    $id=$_GET['user'];
    // echo $id;
    $sql="delete from student where `id`='$id'";
    // echo $sql;

    $res=$pdo->exec($sql);

    if($res>0){
        header("location:list_user.php");
        // echo "01";
    }else{
        echo "失敗" . "<br>";
        echo $sql ;
    }



?>