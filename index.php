<?php require_once 'model/db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD</title>

</head>
<body>

<button type="button"><a href="view/new.php">Add Person</a></button>

<table cellpadding="4" cellspacing="3" border=1 >

    <tr>
        <td><b>Id</b></td>
        <td><b>Name</b></td>
        <td><b>Address</b></td>
        <td><b>Age</b></td>
        <td><b>Contact#</b></td>
    </tr>

<?php include 'controller/listcontroller.php';
?>

</body>
</html>
