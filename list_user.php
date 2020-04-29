<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員列表</title>
    <link rel="stylesheet" href="./plugins/bootstrap.css">
    <link rel="stylesheet" href="pdo.css">
</head>
<body>
    <h1><div>會員列表</div></h1>
    <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,"root","");
    date_default_timezone_set("Asia/Taipei");

    $sql="select * from `student` order by `id` desc";
    $row=$pdo->query($sql)->fetchAll();

    echo "<table>";
    echo "<tr>";
    echo "<th>會員編號</th>";
    echo "<th>會員姓名</th>";
    echo "<th>會員信箱</th>";
    echo "<th>會員電話</th>";
    echo "<th>創建日期</th>";
    echo "<th>更新日期</th>";
    echo "<th>會員生日</th>";
    echo "<th>操作編輯</th>";
    echo "</tr>";
    
    foreach($row as $r){
        echo "<tr>"; 
        echo "<td>" . $r['id'] . "</td>";
        echo "<td>" . $r['name'] . "</td>";
        echo "<td>" . $r['email'] . "</td>";
        echo "<td>" . $r['tel'] . "</td>";
        echo "<td>" . $r['create_time'] . "</td>";
        echo "<td>" . $r['update_time'] . "</td>";
        echo "<td>" . $r['birthday'] . "</td>";
        echo "<td>";
        echo "<a href='edit_user.php?user=" .$r['id']."'>";
        echo "<button>";
        echo "編輯";
        echo "</button>";
        echo "</a>";
        echo "<a href='delete_user.php?user=" .$r['id']."'>";
        echo "<button>";
        echo "刪除";
        echo "</button>";
        echo "</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";

    ?>






</body>
</html>