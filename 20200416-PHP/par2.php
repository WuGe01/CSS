<h4>字串"好的，中國武漢肺炎",請將"武漢肺炎"四字放大並變色</h4>
<?php
$a="好的，中國武漢肺炎";
$search="中國";
$target="<span style='color:red; font-size:24px'>$search</span>";
echo str_replace($search,$target,$a); 
echo "<hr>";
$b="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$search="程式設計";
$change="<span style='color:green'>$search</span>";
echo str_replace($search,$change,$b); 
?>