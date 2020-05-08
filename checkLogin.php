<?php
include "dbconnect.php";

if(!empty($_POST['acc'])){
    // echo "有送出資料";
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    // $sql="select * from student where `acc`='$acc' && `pw`='$pw'";
    $sql="select count(*) from student where `acc`='$acc' && `pw`='$pw'";
    $play=$pdo->query($sql)->fetchColumn();
    $sql2="select `id` from student where `acc`='$acc' && `pw`='$pw'";
    $id=$pdo->query($sql2)->fetch();
    // print_r($name);
    // $play=$pdo->query($sql)->fetch();
    // print_r($play);
 
    if($play>0){
        session_start();
        $_SESSION['status']='true';
        $_SESSION['id']=$id[0];
        echo "<h1><div>登入成功，三秒後自動轉頁</div></h1>";
        // setcookie("id",$id[0],time()+180);
        // setcookie("status",'true',time()+180);
        header("Refresh:3;url=list_user.php");
    }else{
        session_start();
        $_SESSION['status']='false';
        echo "登入失敗10後重新嘗試";
        // setcookie("status",'false',time()+10);
        header("location:login.php");
    }
    // if(!empty($play)){
    //     echo "登入成功";
    // }else{
    //     echo "登入失敗";
    // }
     }else{
         header("location:login.php");
     };


?>