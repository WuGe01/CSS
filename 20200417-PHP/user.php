<?php
if(!empty($_POST)){
    $acc=$_POST["acc"];
    $pw=$_POST["pw"];

    if($acc == 'php' && $pw == '0000'){
        echo "登入成功";
    }else{
        echo "密碼錯誤";
    }




}




?>