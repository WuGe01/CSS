<?php
$dns="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dns,'root',"");
date_default_timezone_set("Asia/Taipei");


$row=all('invoices');
// print_r($row);
echo "<hr><h1>一個變數</h1>";



foreach($row as $r){
      echo $r['id'] . "-" . $r['code'] . "-" . $r['number'] . "<br>";
}


$rows=all('invoices',["period"=>"1","years"=>"2020"]);
// print_r($rows);
echo "<hr><h1>兩個變數</h1>";

foreach($rows as $r){
    echo $r['id'] . "-" . $r['code'] . "-" . $r['number'] . "<br>";
}

$rows=all('invoices',["period"=>"1","years"=>"2020"],'order by id desc');
// print_r($rows);
echo "<hr><h1>三個變數</h1>";

foreach($rows as $r){
    echo $r['id'] . "-" . $r['code'] . "-" . $r['number'] . "<br>";
}
$rows=all('invoices','','order by id desc');
// print_r($rows);
echo "<hr><h1>不代參數</h1>";

foreach($rows as $r){
    echo $r['id'] . "-" . $r['code'] . "-" . $r['number'] . "<br>";
}




function all($table,...$v){
    global $pdo;
    $sql="select * from $table ";
    if(isset($v[0]) && is_array($v[0])){
        // $sql = $sql . $v[0];
        $tmp=[];
        foreach($v[0] as $key => $value){
            $tmp[]=sprintf("`%s` = '%s'",$key,$value);
            // $sql = $sql . "where" . "`" . $key . "`=" . "'" . $value . "'";
        }
        $sql = $sql . " where " . implode(" && ", $tmp);
    }
    if(isset($v[1])){

        $sql = $sql . $v[1];
    }


    return $pdo->query($sql)->fetchAll();
}


// function all($table,...$v){
//     global $pdo;
//     $sql="select * from $table ";
//     if(isset($v[0]) && is_array($v[0])){
//         // $sql = $sql . $v[0];
//         $tmp=[];
//         foreach($v[0] as $key => $value){
//             $tmp[]=sprintf("`%s` = '%s'",$key,$value);
//             // $sql = $sql . "where" . "`" . $key . "`=" . "'" . $value . "'";
//         }
//         $sql = $sql . " where " . implode(" && ", $tmp);
//     }
    
//     return $pdo->query($sql)->fetchAll();
// }




// function all($table,...$v){
//     global $pdo;
//     $sql="select * from $table ";
//     if(isset($v[0])){
//         $sql = $sql . $v[0];
//     }
    

//     return $pdo->query($sql)->fetchAll();
// }
?>