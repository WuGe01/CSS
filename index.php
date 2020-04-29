<h1>會員帳號</h1>
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");
$sql="insert into student(`id`,
                        `acc`,
                        `pw`,
                        `name`,
                        `email`,
                        `tel`,
                        `create_time`,
                        `update_time`,
                        `birthday`)
                    values(null,
                        'WuGe01',
                        'kokoko',
                        '武戈',
                        'b208@hotmail.com',
                        '08570',
                        '".date("Y-m-d")."',
                        '".date("Y-m-d")."',
                        '1919-12-08')" ;


// $pdo->query($sql);
$pdo->exec($sql);
// 不會有回傳值，但會回傳布林值
echo "資料已新增";





?>
