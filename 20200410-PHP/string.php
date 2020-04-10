<h4>字串處理</h4>
<hr>
<h5>1.子字串 substr() / mb_substr()</h5>
<?php
$a="不要停下來 團長";
echo $a . "<br>";
echo mb_substr($a,2,6);
echo "<br>";
echo mb_substr($a,0 ,2) . "&nbsp" . mb_substr($a,6,2) . "<br>";
$a="                 >>>>>>>>>我這裡   ";
echo $a . "<br>";
echo trim($a) . "<br>";

$b="撒死給&nbsp";
echo str_repeat($b,2);
$c="拿滷斗&nbsp";
echo str_repeat($c,2). "<br>";
$a="不要停下來 團長";
echo str_replace("團","旅",$a);

?>