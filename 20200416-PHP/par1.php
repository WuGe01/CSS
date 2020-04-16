<h4>字串函式練習</h4>
<div>字串 aaddww1123</div>
<?php
$str="aaddw1123";
$str2="";
for($i=0;$i<strlen($str);$i++){
    $str2=$str2 . "*";
}
echo $str2;
echo "<hr>";
$str3=str_repeat("*",strlen($str));
echo $str3;
echo "<hr>";
echo str_repeat("*",strlen($str));
echo "<hr>";
$a="this,is,a,book";
$b=explode(",",$a);
echo "<pre>";print_r($b);"</pre>";
echo join("&nbsp",$b);
echo "<hr>";
$a="The reason why a great man is great is that he resolves to be a great man";
echo substr($a,0,10) . "...";
?>