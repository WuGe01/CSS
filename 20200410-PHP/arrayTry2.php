<?php
echo "<h4>陣列九九乘法表</h4>";
$a=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $a[]=$i."X".$j."=".($i*$j);
    }
}
echo "<pre>";print_r($a);"</pre>";
echo "<table border=1>";
foreach($a as $key => $b){
    if($key%9==9){
        echo "<tr>";
    }
    echo "<td>$b</td>" ;
    if($key%9==8){
        echo "</tr>";
    }
}
echo "</table>";


//亂數涵式
?>