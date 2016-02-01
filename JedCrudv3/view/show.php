<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>
<?php include 'controller/PeopleController.php';?>
<div class="container" align="center">
    <div class="btn_group">
        <button class="btn"><a href="index.php">Home</a></button>
        <button class="btn"><a href="insert.php">Insert</a></button>
    </div>
    <h3> List</h3>
    <table align="center" width="750" border="1" class="table-striped">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Age</th>
            <th scope="col">Contact</th>
        </tr>
<?php
foreach($obj->showData("People") as $value){
    extract($value);
echo <<<show
    <tr class=success>
        <td>$name</td>
        <td>$address</td>
        <td>$age</td>
        <td>$contact</td>
        <td><button class="btn"><a href="update.php?id=$id">Edit</a></button>&nbsp;&nbsp;
            <button class="btn"><a href="index.php?del_id=$id>" onclick="return confirm('Are you sure want to Delete?'); "</a>Delete</button>
        </td>
    </tr>
show;
}
?>
    </table>
    </div>
</body>
</html>