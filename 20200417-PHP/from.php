<?php

// $weight=$_GET['weight'];
// $height=$_GET['height'];

// isset() or empty()
if(isset($_POST['weight']) && isset($_POST['height'])){
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    echo "您輸入的身高是".$height."<br>";
    echo "您輸入的體重是".$weight."<br>";
    if(!empty($height)){  
        $height_mm=$height/10000;
        $BMI=$weight/($height*$height_mm);
        echo "您的BMI是:".round($BMI,2). "&nbspBMI值";
        echo "<br>";
        if($BMI<18.5){
            echo "您太輕了~有吃飯嗎??";
        }else if($BMI<24){
            echo "恭喜您是健康標準身材~YA~";
        }else if($BMI<27){
            echo "是過重喔，要注意喔!";    
        }else if($BMI<30){
            echo "進入輕微肥胖等級了喔!";   
        }else if($BMI<35){
            echo "不~~這是中度肥胖，椅子很辛苦!";   
        }else{
            echo "這是重度肥胖，與地球間的引力感強烈，可以聽到蓋亞之聲!!";   
        }

    }else{
        echo "請輸入正確的身高值";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表單傳值</title>
</head>
<body>
<h4>BMI計算機</h4>
<form action="?" method='post'>
    身高:<input type="number" name="height" id="" step="0.01" oninput="if(value>300)value=300;">cm<br>
    體重:<input type="number" name="weight" id="" step="0.01">kg<br>
    <input type="submit" value="送出">
    <input type="reset" value="重置">
</form>

</body>
</html>