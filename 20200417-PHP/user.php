<?php

$status="false";

if(!empty($_POST)){
    $acc=$_POST["acc"];
    $pw=$_POST["pw"];

    if($acc == 'php' && $pw == '0000'){
        echo "登入成功";
        $status="true";
    }else{
        echo "密碼錯誤";
        $status="false";
    }




}


?>

<a href="login.php?status=<?=$status;?>">回首頁</a>