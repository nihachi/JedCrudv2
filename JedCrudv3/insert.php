<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add new People</title>
</head>
<body>
<?php include 'controller/PeopleController.php';
?>
<div class="container">
    <div class="btn-group">
        <button class="btn"><a href="index.php">Home</a></button>
    </div>
    <h3>Insert data</h3>
    <form action="" method="post">
    <table class="table-borderd">
        <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
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
            <td><input type="submit" name="insert" class="btn"></td>
        </tr>
    </table>
    </form>
</div>
</body>
</html>