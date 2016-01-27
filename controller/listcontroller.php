<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="" method="post">

<?php
$conn = mysql_connect('localhost', 'root', 'root');
mysql_select_db('CRUD');

$result = mysql_query("SELECT * FROM `People`") or trigger_error(mysql_error());
while($row = mysql_fetch_array($result)){
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); }

    echo "<tr>";
    echo "<td valign='top'>" . ( $row['id']) . "</td>";
    echo "<td valign='top'>" . ( $row['name']) . "</td>";
    echo "<td valign='top'>" . ( $row['address']) . "</td>";
    echo "<td valign='top'>" . ( $row['age']) . "</td>";
    echo "<td valign='top'>" . ( $row['contact']) . "</td>";
?>

    <td valign='top'><a href="view/edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    <td><a href="controller/deletecontroller.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure want to Update?'); "</a>Delete</td>


<?php
echo "</tr>";

}
?>
    </form>
</table>
</body>
</html>