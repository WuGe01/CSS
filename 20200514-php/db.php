<?php
$dns="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dns,'root',"");
date_default_timezone_set("Asia/Taipei");

echo "<pre>" . print_r(all('invoices')) . "</pre>";
echo "<hr>";
echo "<pre>" . print_r(find('invoices','16')) . "</pre>";
echo "<hr>";
$rows=all('invoices');
foreach($rows as $row){
 echo $row['id'] . "-" . $row['code'] . "-" . $row['number'] . "<br>" ;

}
echo "<hr>";
$rows=find('invoices','16');
if(is_array($rows)){
    echo $rows['id'] . "-" . $rows['code'] . "-" . $rows['number'] . "<br>" ; 
}else{
    echo $rows;
}



function all($table){
    global $pdo;
    $sql="select * from $table ";
    $r=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $r;
}
function find($table,$id){
    global $pdo;
    $sql="select * from $table where `id`='$id'";
    $r=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    if(empty($r)){
        return "無資料錯誤";
    }
    return $r;
}



?>