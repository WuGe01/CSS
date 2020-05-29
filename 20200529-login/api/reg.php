<?php
include_once "base.php";

$acc=$_POST['acc'];
$pw=md5($_POST['pw']);
$email=$_POST['email'];
$date=[
    "acc"=>$acc,
    "pw"=>$pw,
    "email"=>$email
];

if(!empty($_POST['acc'])){
    if(strlen($_POST['acc'])>=8){
        $chkacc=chkacc($_POST['acc']);
        if($chkacc==true){       
            save("user",$date);
            to("../index.html");
        }else{
            echo "帳號不能有特殊符號,只能英數字大小寫";
        }
    }else{
        echo "帳號至少要八碼";
    }
}else{
    echo "帳號不能為空";
}




?>