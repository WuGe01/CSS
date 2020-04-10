<h4>天干地支年別</h4>
<hr>
<?php
$sky=["甲","乙","丙","丁","戊","己","庚","辛","壬","葵"];
$land=["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];
$year=1024;
echo $year . '是' . $sky[($year+6)%10] . $land[($year+8)%12] . '年' ;
echo "<hr>";
$arr=[];
for($year=1;$year<3000;$year++){
     $arr[$year]=$sky[($year+6)%10] . $land[($year+8)%12];
}
echo "<pre>";print_r($arr);echo "</pre>";
?>