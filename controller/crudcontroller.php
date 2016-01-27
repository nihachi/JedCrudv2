<?php
$conn = mysql_connect('localhost', 'root', 'root');
mysql_select_db('CRUD');

//Add
if (isset($_POST['Add']))
    {
    foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
    $sql = "INSERT INTO `People` ( `name` ,  `address` ,  `age` ,  `contact`  ) VALUES(  '{$_POST['name']}' ,  '{$_POST['address']}' ,  '{$_POST['age']}' ,  '{$_POST['contact']}'  ) ";
    mysql_query($sql) or die(mysql_error());
    echo ('<meta http-equiv="refresh" content="0;url=http:/phpcrud/JedCrudv2/index.php">');
    }

//Update
if (isset($_GET['id']) )
{
$id = (int) $_GET['id'];
    if (isset($_POST['submitted']))
        {
        foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
        $sql = "UPDATE `People` SET  `name` =  '{$_POST['name']}' ,  `address` =  '{$_POST['address']}' ,  `age` =  '{$_POST['age']}' ,  `contact` =  '{$_POST['contact']}'   WHERE `id` = '$id' ";
        mysql_query($sql) or die(mysql_error());
        echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />";
        echo ('<meta http-equiv="refresh" content="1;url=http:/phpcrud/JedCrudv2/index.php">');
        }
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `People` WHERE `id` = '$id' "));
}
?>
