<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <link rel="stylesheet" href="/plugins/bootstrap.css">
    <style>
        table{
            margin: auto;
            border:1px solid #CCC;
        }

    </style>
</head>
<body>
    <?php

    if(isset($_COOKIE['status'])){       
        switch(($_COOKIE['status'])){
        case 'false':
            echo "帳號密碼錯誤";
        break;
        case 'true':
            header("location:list_user.php");
        break;

        } ;    
    };
    
    ?>
    
    <form action="checkLogin.php" method="post">
        <table>
            <tr>
                <td>帳號:</td>
                <td><input type="text" name="acc" id="acc"></td>
            </tr>
            <tr>
                <td>密碼:</td>
                <td><input type="password" name="pw" id="pw"></td>
            </tr>
            <tr>
            <td>
                <input type="submit" value="送出">
            </td>
            <td>
                <input type="reset" value="重置">
            </td>
            </tr>
        </table></form>
        <a href="reg.php"><button>註冊</button></a>
</body>
</html>