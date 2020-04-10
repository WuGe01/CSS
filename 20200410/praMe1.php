<h4>威力彩號碼</h4>
<?php
$num=[];



for($i=0;$i<6;$i++){
    $num[]=rand(1,49);
}
echo "<pre>";print_r($num);"</pre>";
echo "<hr>";
for($i=0;$i<6;$i++){
    for($j=0;$j<6;$j++){
        if($i!=$j && $num[$i]==$num[$j]){
            $num[$j]=rand(1,49);
            $i=0;
            $j=0;
        }
    }
}
echo "<pre>";print_r($num);"</pre>";
?>
<h4>威力彩號碼2</h4>
<?php
echo"<hr>";
$num=[];

while(count($num)<6){
    if(count($num)>0){
        $tmp=rand(1,38);
        if(!in_array($tmp,$num)){
            $num[]=$tmp;
        }else{

        }
    }else{
        $num[]=rand(1,38);
    }
}


echo "<pre>";print_r($num);"</pre>";




?>