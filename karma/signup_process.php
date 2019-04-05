<?
include("db.php");
$pagename="Your Sign Up Results"; 
 
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];


if (!empty($fName||$lName ||$password ||$email||$address)){
		$regularExp = "/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/";
		if (preg_match($regularExp,$email)){
			$SQL="INSERT INTO cinema (firstname,lastname,pass,email,address_m) VALUES ('".$fName."','".$sName."','".$password."','".$email."','".$address."')"; 
           
            $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());  
			$errNo = mysqli_errno($conn);
		}
else{
	echo "Fill all the mandatory fields !!";
	echo "<br><a href='signup.php'>Go Back</a>";
}
?>