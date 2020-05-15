<?php
$dns="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dns,'root',"");
date_default_timezone_set("Asia/Taipei");


$date=[
'id'=>'9',
'code'=>'t3',
'number'=>'55913945',
'period'=>'1',
'expend'=>'0',
'years'=>'2020'
];
echo "<pre>";
print_r($date);
echo "</pre>";
save('invoices',$date);




function save($table,$arg){
    global $pdo;
    if(isset($arg['id'])){
        foreach ($arg as $key => $value) {
            if($key!='id'){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
        }
        $sql="update $table set " . join(',',$tmp) . " where `id`='".$arg['id']."'";
    }else{
        $sql="insert into " . $table . "(`" . join("`,`",array_keys($arg)) . "`)" . " values " . "('" . join("','",$arg) . "')";
    }
    return $pdo->exec($sql);
}

?>