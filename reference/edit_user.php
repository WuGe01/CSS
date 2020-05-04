<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯會員</title>
    <link rel="stylesheet" href="./plugins/bootstrap.css">
    <link rel="stylesheet" href="edit.css">
</head>
<body>
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");
$id=$_GET['user'];
$sql="select * from `student` where `id`='$id'";
$user=$pdo->query($sql)->fetch();
?>
<h1><div>編輯會員</div></h1>
    <div>
    <form action="update_user.php" method="post">
    <input type="hidden" name="id" value="<?=$user['id'];?>">
    <table>
        <tr>
            <td>帳號：</td>
            <td><label for="acc"></label><input name="acc" type="text" id="acc" size="32" value="<?=$user['acc'];?>"/></td>
            
        </tr>
        <tr>
            <td>密碼：</td>
            <td><label for="pw"></label><input name="pw" type="password" id="pw" size="64" value="<?=$user['pw'];?>"/></td>
        </tr>
        <tr>
            <td>姓名：</td>
            <td><label for="name"></label><input name="name" type="text" id="name" size="64" value="<?=$user['name'];?>"/></td>
        </tr>
        <tr>
            <td>信箱:</td>
            <td><label for="email"></label><input name="email" type="text" id="email" size="65" value="<?=$user['email'];?>"/></td>
        </tr>
        <tr>
            <td>電話:</td>
            <td><label for="tel"></label><input name="tel" type="text" id="tel" size="16" value="<?=$user['tel'];?>"/></td>
        </tr>
        <tr>
            <td>生日:</td>
            <td><label for="birthday"></label><input name="birthday" type="date" id="birthday" size="16" value="<?=$user['birthday'];?>"/></td>
        </tr>

    </table>
    <div class="tctc">
    <input type="submit" value="送出">
    <input type="reset" value="重置">
    </div>
    </form>
    </div>
</body>
</html>