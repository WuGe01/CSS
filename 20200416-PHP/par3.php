<h4>日期/時間函式</h4>
<div>strtotime() -  字串轉換成時間序</div>
<?php
$time="2020-04-16 11:30:20";
echo strtotime($time);
echo "<hr>";
$serialtime=strtotime($time);
echo date("Y年m月d日 H:i:s l",$serialtime);
?>
<h4>練習時間</h4>
<div>距離下次的生日還有幾天</div>
<div>12/8</div>
<?php
date_default_timezone_set("Asia/Taipei");
$today=date("Y-m-d H:i:s");
$nextbrithday="2020-12-08 00:00:00";
$a=date("z",strtotime($nextbrithday));
$b=date("z",strtotime($today));
echo "還有" . ($a-$b) . "天";

?>
<h4>date()函式</h4>
<?php
echo date("Y-m-d H:i:s");
?>
<h4>strtotime()函式</h4>
<?php
$date=strtotime("+3 day".date("Y-m-d H:i:s"));
echo date("Y-m-d",$date);
echo "<hr>";
?>
<h4>印出今天起三十天日期</h4>
<?php
$today=date("Y-m-d");
echo "<table border='1'>";
for($i=0;$i<30;$i++){
    $j = $i+1 ;
    if($i%5 == 0){echo "<tr>";}
    echo "<td>";
    if($j<10){
        echo "No.0$j" . "<br>" . date("Y年m月d日",strtotime("+$i day" . $today)) . "<br>";
    }else{
        echo "No.$j" . "<br>" . date("Y年m月d日",strtotime("+$i day" . $today)) . "<br>";
    }
    echo "</td>";
    if($i%5 == 4){echo "</tr>";}
    }
echo "</table>";



?>
