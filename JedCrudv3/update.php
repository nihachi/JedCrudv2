<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body>
<?php
include 'controller/PeopleController.php';
?>
<div class="container">
    <div class="container">
        <button class="btn"><a href="index.php">Home</a></button>
    </div>
    <h3>Update Data</h3>
    <form action="show.php" method="post">
    <table width="500">
        <tr>
            <th scope="row">ID</th>
            <td><input type="text" name="id" value="<?php echo $id; ?>" readonly="readonly"></td>
        </tr>
        <tr>
            <th scope="row">Name</th>
            <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
        </tr>
        <tr>
            <th scope="row">Address</th>
            <td><input type="text" name="address" value="<?php echo $address; ?>"></td>
        </tr>
        <tr>
            <th scope="row">Age</th>
            <td><input type="number" name="age" value="<?php echo $age; ?>"></td>
        </tr>
        <tr>
            <th scope="row">Contact#</th>
            <td><input type="number" name="contact" value="<?php echo $contact; ?>"></td>
        </tr>
        <tr>
            <th scope="row">&nbsp;</th>
            <td><input type="submit" name="update" value="Update" class="btn"></td>
        </tr>
    </table>
    </form>
</div>
</body>
</html>