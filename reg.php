<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
</head>
<body>
    <h1>註冊會員</h1>
    <div>
    <form action="add_user.php" method="post">
    <table>
        <tr>
            <td>帳號：</td>
            <td><label for="acc"></label><input name="acc" type="text" id="acc" size="32"/></td>
            
        </tr>
        <tr>
            <td>密碼：</td>
            <td><label for="pw"></label><input name="pw" type="password" id="pw" size="64"/></td>
        </tr>
        <tr>
            <td>姓名：</td>
            <td><label for="name"></label><input name="name" type="text" id="name" size="64"/></td>
        </tr>
        <tr>
            <td>信箱:</td>
            <td><label for="email"></label><input name="email" type="text" id="email" size="65"/></td>
        </tr>
        <tr>
            <td>電話:</td>
            <td><label for="tel"></label><input name="tel" type="text" id="tel" size="16"/></td>
        </tr>
        <tr>
            <td>生日:</td>
            <td><label for="birthday"></label><input name="birthday" type="date" id="birthday" size="16"/></td>
        </tr>

    </table>
    <input type="submit" value="送出">
    <input type="reset" value="重置">
    </form>
    </div>
</body>
</html>