<?php require ('../../db.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>New</title>
</head>
<body>
<?php require_once '../controller/crudcontroller.php';

?>

<form action='' method='POST'>
Name:<input type='text' name='name' required/>
Address:<input type='text' name='address'/>
Age:<input type='number' name='age'/>
Contact#:<input type='number' name='contact'/>

<p><input type='submit' value='Add Row' name="Add"/>

</form>
</body>
</html>

