<style>
    table{
        border-collapse:collapse;
    }
    table,td{
        border: 1px solid #CCC;
        padding:5px;
        text-align:center;
    }
</style>


<h4>日歷製作</h4>
<h5>四月份</h5>
<?php

// echo "<pre>";print_r($a);"</pre>";
// $C=date("j",strtotime($time));
// echo date("j",strtotime($time));
// echo "<br>";
// echo date("w",strtotime($time));

$a=["日","一","二","三","四","五","六"];
date_default_timezone_set("Asia/Taipei");
$time="2020-04-01";
$time_end=("+1 month -1 day".date($time));


$D=date("w",strtotime($time));
$E=date("j",strtotime($time_end));

echo "<table>";
for($i=0;$i<49;$i++){
    if($i>=($D+$E+7)){
        
    }else{       
        if($i%7 == 0){echo "<tr>";}
        if($i<7){
            echo "<td>";
            echo $a[$i];
            echo"</td>";
        }else{
            echo "<td>";
            if($i<(7+$D)){
                echo "";
            }else{
                echo ($i-6-$D);            
            }
            echo"</td>";
            if($i%7 == 6){echo "</tr>";} 
        }
    }
}
echo "</table>";

?>
<!-- 
for($i=0;$i<floor(($D+$E+7)/7);$i++){

    if($i == 0){echo "<table>";}

    echo "<tr>";
    for($j=0;$j<7;$j++){

        if($j<$D){
            echo "<td>";
            echo "</td>";
        }else{

        }


    }

    echo "</tr>";

    if($i+1 == floor(($D+$E+7)/7)){echo "</table>";}
}


echo "<hr>"; -->
