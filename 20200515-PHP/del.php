<?php
$dns="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dns,'root',"");
date_default_timezone_set("Asia/Taipei");

// 計算筆數


del('invoices','1');
del('invoices',["id" => '2']);

function del($table,$b){
    global $pdo;
    $sql="delete from $table";
    if(is_array($b)){
        $q=[];
        foreach ($b as $key => $value) {
            $q[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql . " where " . join(" && ",$q);
    }else{
        $sql=$sql . " where `id` =" . "'" . $b . "'";
    }
    // echo $sql . "<br>";
    return $pdo->exec($sql);
    // echo $pdo->query($sql)->fetchcolumn() . "<hr>";
    // // echo $pdo->query($sql)->fetch() . "<hr>";
}
  