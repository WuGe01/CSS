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
    
    <?php
    include "dbconnect.php";

    $sql="select * from `student` order by `id` desc";
    $row=$pdo->query($sql)->fetchAll();
    session_start();
    if(isset($_SESSION['status'])){
        $play_id=$_SESSION['id'];
        $sql2="select `name` from `student` where `id` = $play_id";
        $row2=$pdo->query($sql2)->fetch();
        echo "<h1><div>會員列表</div></h1>";
        echo "<h1><div>" . "歡迎會員" . $row2[0] . "大大</div></h1>";
    }else{
        echo "<h1>非法使用，或連線愈時，請重新登入</h1>";
        exit();
    };

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


    ?>

<tr>

</tr>
<a href="logout.php"><button>登出</button></a>
<a href="reg.php"><button>註冊</button></a>

</table>

</body>
</html>