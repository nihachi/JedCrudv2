<?php
$conn = mysql_connect('localhost', 'root', 'root');
mysql_select_db('CRUD');

$id = (int) $_GET['id'];
mysql_query("DELETE FROM `People` WHERE `id` = '$id' ") ;
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> ";
echo ('<meta http-equiv="refresh" content="0;url=http:/phpcrud/JedCrudv2/index.php">');
?>

