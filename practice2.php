<!DOCTYPE html>
<html>

<body>

<form method="post">

Enter Name:
<input type="text" name="username">

<input type="submit">

</form>

<?php

if($_POST){

$name = $_POST['username'];

echo "Hello " . $name;

}

?>

</body>
</html>