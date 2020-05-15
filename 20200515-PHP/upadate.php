<?php
$dns="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dns,'root',"");
date_default_timezone_set("Asia/Taipei");

// upadate table set XX = 'AA' , EE = 'BB' where xx ='aa'


$t=find('invoices',11);
echo "<pre>";
echo print_r($t);
echo "</pre>";
$t['expend']="11";
update('invoices',$t);
echo "<pre>";
echo print_r($t);
echo "</pre>";
function update($table,$arg){
    global $pdo;

    foreach ($arg as $key => $value) {
        if($key!='id'){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
    }
    $sql="update $table set " . join(',',$tmp) . " where `id`='".$arg['id']."'";
    echo $pdo->exec($sql);

 
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




// function update($table,$a,$b){
//     global $pdo;
//     $sql="update from $table set ";

//     foreach ($a as $key => $value) {
//         $tmp=sprintf("`%s`='%s'",$key,$value);
//     }
//     $sql=$sql . join(',',$tmp);

//     if(is_array($b)){
//         $q=[];
//         foreach ($b as $key => $value) {
//             $q[]=sprintf("`%s`='%s'",$key,$value);
//         }
//         $sql=$sql . " where " . join(" && ",$q);
//     }else{
//         $sql=$sql . " where `id` =" . "'" . $b . "'";
//     }

//     return $pdo->exec($sql);
// }
  

?>