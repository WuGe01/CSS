<?php
$a=[2,4,6,1,8];
echo "<pre>";print_r($a);echo "</pre>";
echo "<hr>";
echo "<pre>";print_r(array_reverse($a));echo "</pre>";
echo "<hr>";
echo "<h4>交換變數</h4>";
for($i=0;$i<count($a)/2;$i++){
    $index=count($a)-1-$i;
    $tmp=$a[$i];
    $a[$i]=$a[$index];
    $a[$index]=$tmp;
}
echo "<pre>";print_r(array_reverse($a));echo "</pre>";
echo "地板函數".floor(count($a)/2);
echo"<br>";
echo "天花板函數".ceil(count($a)/2);
echo"<br>";
?>