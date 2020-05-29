<?php
include_once "base.php";

$acc=$_POST['acc'];
$pw=md5($_POST['pw']);
$email=$_POST['email'];

$date=[
    "acc"=>$acc,
    "pw"=>$pw,
];
$chk=nums("user",$date);

if($chk>=1){

    to("../home.php");
}else{
    to("../fill.php");
}

?>