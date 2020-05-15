<?php
$dns="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dns,'root',"");
date_default_timezone_set("Asia/Taipei");

// 計算筆數

echo nums('invoices');

echo nums('invoices',["period"=>"1","expend"=>"0"]);


function nums($table,...$b){
    global $pdo;
    $sql="select count(*) from $table";
    if(isset($b[0]) && is_array($b[0])){

        $tmp=[];
        foreach($b[0] as $key => $balue){
            $tmp[]=sprintf("`%s` = '%s'",$key,$balue);
         
        }
        $sql = $sql . " where " . join(" && ", $tmp);
    }
    if(isset($b[1])){

        $sql = $sql . $v[1];
    }
    echo $sql . "<br>";
    echo $pdo->query($sql)->fetchcolumn() . "<hr>";
    // echo $pdo->query($sql)->fetch() . "<hr>";
}
  
