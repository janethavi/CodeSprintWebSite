<?php

include ("db.php");
$username = $_POST['name'];
$password = $_POST['password'];
$SQL="select  c_email, c_name ,c_password from customer WHERE c_email='$username'";
//run SQL query for connected DB or exit and display error message
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
while ($arrayp=mysqli_fetch_array($exeSQL))
{
echo $arrayp['c_password'];
}

?>
