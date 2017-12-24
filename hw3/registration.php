<?php
session_start();
include ("db_connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST['fname']))
	{
		echo"Go to Form:<a href='form.php'>please enter your details correctly</a>";
	}
	else if(empty($_POST['lname'])){
		print("Please Enter Last Name");
	}
	else if(empty($_POST['uname'])){
		print("Please Enter User Name");
	}
	else if(empty($_POST['DOB'])){
		print("Please Select date of birth");
	}
	else if(empty($_POST['gender'])){
		print("Please Select Gender");
	}
	else if(empty($_POST['country'])){
		
		print("Please Select  Country");
	}

	else if(empty($_POST['pw'])){
		echo"Go to Form:<a href='form.php'>please enter your details correctly</a>";
	}
	else if(empty($_POST['DOB'])){
		echo "Go to Form:<a href= 'form.php'>please enter yout Date of birth</a>";
	}
	else if($_POST['pw'] != $_POST['pw1']){
		echo"Go to Form:<a href = 'form.php'>password doesnt match</a>";
		
	}

else{


$password = trim($_POST['pw1']);
$dob = trim($_POST['DOB']);
$gender = trim($_POST['gender']);
$country = trim($_POST['country']);

$sql = "INSERT INTO userinfor(firstname, lastname, username, password, dob, gender, country) VALUES
	('$_POST[fname]','$_POST[lname]','$_POST[uname]','$_POST[pw]','$_POST[DOB]','$_POST[country]','$_POST[gender]')";
	if ($conn->query($sql) === TRUE) {
	 print("Hi, you are registered successfully");
	 print("<br/>Click Here  <a href=login.php>Login</a>");
	 }else{
		 
		 print "Error: " . $sql . "<br>" . $conn->error;
	 }

}
}

?>