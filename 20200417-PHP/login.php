<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <style>
    body{
        text-align:center;
        margin:35% auto;
        background-color:black;
    }
    .box{
        display:inline-flex;
        border:1px solid #CCC;
        height:30%;
        width:25%;
        padding:10px;
        background-color:#ccc;
        justify-content: center;
        align-items: center;
    }      

    </style>
</head>
<body>
    <?php
    $showfrom=true;
    if(isset($_GET['status'])){
        switch($_GET['status']){
            case "true":
                echo "您已登入";
                $showfrom=false;
            break;
            case "false":
                echo "帳號密碼錯誤";
            break;
            
        }
    }
    ?>

    <?php
    if($showfrom){
    ?>
    <div class="box">
    <form action="user.php" method="post">
        <h3>口罩登入大抽獎</h3>
        <div>帳號:<input type="text" name="acc"></div>
        <div>密碼:<input type="password" name="pw"></div>
        <div>
            <input type="submit" value="登入">
            <input type="reset" value="重置">
        </div>
    </form>
    </div>
    <?php
    }else{
    ?>

    <h1>恭喜您重大獎~~口罩2000喔</h1>

    <?php
    }
    ?>



</body>
</html>
