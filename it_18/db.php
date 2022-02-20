<?php
$dbhost = "localhost";
$dbname = "bdit";
$dbuser = "root";
$dbpassword = "";

// Подключение к БД

$link = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

// проверяем наличие подключения

if ($link -> connect_errno)
{
echo "Ошибка при подключении к БД: $link->connect_error";
}
?>
<body>
 <?php
 include 'nav.php';
 nav(0);
 include 'db.php';
 ?>
</body>


