<?php
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
$myfile=fopen("userinfor.txt","a");
$text=$_POST['fname']."---".$_POST['lname']."---".$_POST['uname']."---".$_POST['pw']."---".$_POST['DOB']."---"."---".$_POST['country']."---".$_POST['gender'].PHP_EOL;
fwrite($myfile,$text);
fclose($myfile);
print("Hi, you are registered successfully");
}
}

?>