<?php
$dns="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dns,'root',"");
date_default_timezone_set("Asia/Taipei");


$K=find('invoices',['period'=>'1','years'=>'2020']);

echo "<pre>";
print_r($K);
echo "</pre>";

function find($table,$id){
    global $pdo;

    if(is_array($id)){
        $temp=[];
        foreach($id as $key => $value){
            $temp[]=sprintf("`%s`='%s'",$key,$value);

        }
        $sql="select * from $table where " . join(" && ",$temp);
    }else{
        $sql="select * from $table where `id`='$id'";
    }
    $r=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $r;
}

?>
