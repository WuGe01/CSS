<?php
$dns="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dns,'root',"");
date_default_timezone_set("Asia/Taipei");


// insert into table (`fled1`,`fled2`,`fled3`) values ('value1','value2','value3')

$table="invoices";

$date=[
    "period"=>"1",
    "code"=>"KL",
    "expend"=>"52542",
    "years"=>"2020",
    "number"=>"77889900"
];
insert($table,$date);

function insert($table,$arg){

    global $pdo;
    // $tp=[];
    // $tv=[];
    $sql="insert into ";

    // array_keys($arg);

    // foreach($arg as $key => $value){
    //     $tp[]=$key;
    //     $tv[]=$value;
    // }

    // $s1="(`" . join("`,`",array_keys($arg)) . "`)";
    // $s2="('" . join("','",$arg) . "')";
    // echo $s1;
    // echo $s2;
    $sql=$sql . $table . "(`" . join("`,`",array_keys($arg)) . "`)" . " values " . "('" . join("','",$arg) . "')";
    // echo $sql;
    // $pdo->exce($sql);
    return $pdo->exec($sql);

}

// function insert($table,$a){
//     $b=[];
//     $d="";
//     $f="";
//     foreach ($a as $key => $value) {
//         foreach($key as $i){
//             $d=$d . join(",",$i);
//         }
//         foreach($value as $j){
//             $f=$f . join(",",$j);
//         }

//     }
//     echo $d;
//     echo "<br>";
//     echo $f;

// }


?>