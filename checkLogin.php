<?php
include "dbconnect.php";

if(!empty($_POST['acc'])){
    // echo "有送出資料";
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    // $sql="select * from student where `acc`='$acc' && `pw`='$pw'";
    $sql="select count(*) from student where `acc`='$acc' && `pw`='$pw'";
    $play=$pdo->query($sql)->fetchColumn();
    // $play=$pdo->query($sql)->fetch();
    // print_r($play);
    echo $sql;
    if($play>0){
        echo "登入成功";
        header("location:list_user.php");
    }else{
        echo "登入失敗";
        header("location:login.html");
    }
    // if(!empty($play)){
    //     echo "登入成功";
    // }else{
    //     echo "登入失敗";
    // }
 };


?>