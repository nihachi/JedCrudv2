<?php require('../model/db.php'); require '../controller/crudcontroller.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>
<body>
<form action='' method='POST'>
    Name:<input type='text' name='name' value='<?= stripslashes($row['name']) ?>' />
    Address:<input type='text' name='address' value='<?= stripslashes($row['address']) ?>' />
    Age:<input type='number' name='age' value='<?= stripslashes($row['age']) ?>' />
    Contact#:<input type='number' name='contact' value='<?= stripslashes($row['contact']) ?>' />
<p><input type='submit' value='Update' <?php echo $row['id']; ?>" onclick="return confirm('Are you sure want to Update?'); "  /><input type='hidden' value='1' name='submitted'" />
</form>
</body>
</html>
