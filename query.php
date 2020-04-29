<?PHP
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql="select `id`, `name`,`tel` 
    from `student ";
$rows=$pdo->query($sql)->fetchAll();
echo "<pre>";
echo print_r($rows);
echo "</pre>";
foreach($rows as $r){
    echo  $r['id'] . "-" .$r['name']. "-" .$r['tel']."<br>";
}
echo "<hr>";
echo "<pre>";
echo print_r($r);
echo "</pre>";

?>