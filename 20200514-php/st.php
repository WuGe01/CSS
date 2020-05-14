<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>印出星星</h2>
    <form action="#" method="post">
        <input type="text" name="code" >
    </form>    



</body>
</html>
<?php

if(isset($_POST['code'])){
    $sss=$_POST['code'];
    stars($sss);
}else{
    $sss=0;
}

function stars($Number){
    for($i=1;$i<$Number;$i++){
        for($j=1;$j<=($Number-1+$i);$j++){
                echo "*";
        }
        
    }
}
?>