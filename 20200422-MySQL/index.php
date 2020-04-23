<h1>資料庫的連線</h1>
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($dsn,'root','');

$sql = "select * from students where left(class_num,3)='102'";
/*
    PDO::FETCH_ASSOC
    PDO::FETCH_NUM
    PDO::FETCH_BOTH -> 預設值
*/
// $row=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
// $rows=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC)


// echo $rows['name'];
// echo "<hr>";
// echo $rows[1][3];
// echo "<hr>";
// echo $rows[1]['name'];
// echo "<hr>";
// echo '<pre>';
// print_r($rows);
// echo '</pre>';

?>
<table>

<?php
foreach($rows as $row){
    echo "<tr>";
    echo "<td>".$row['uni_id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['tel']."</td>";
    echo "<td>".$row['dept']."</td>";
    echo "<td>".$row['grad_at']."</td>";
    echo "</tr>";
}
?>
</table>