<?php

$a=["AA","BB"];
$b=["CC","DD"];

$c=array_merge($a,$b);


echo "<pre>";
print_r($c);
echo "</pre>";
echo "<hr>";
$D=mymerge($a,$b,$b,$b,$b);
echo "<pre>";
print_r($D);
echo "</pre>";
echo "<hr>";
function mymerge($a,...$b){
    $temp=$a;

    foreach($b as $c){
        foreach($c as $d){
            $temp[]=$d;
        }
       
    }
    return $temp;
}



?>