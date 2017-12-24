<?php
  
 session_start();
    
  if(isset($_POST["username"]) && isset($_POST["password"])){
	  
    if(empty($_POST["username"])) {
        
        echo"Please enter username";
        
    }
    if(empty($_POST["password"])){
        
        echo"please enter password";
    }
    else{
    $username = $_POST["username"];
    $loginData = file('userinfor.txt');
			$accessData = array();
			foreach ($loginData as $line) {
				$user_details = explode('---', $line);
				
			if (trim($user_details[2]) == $username && trim($user_details[3]) == $_POST["password"]) {
					$success = true;
					break;
				
			}
			}
			if ($success) {
	
			$_SESSION["authenticated"]=true;
			$_SESSION["username"]=$user_details[2];
			header("Location: home.php?username=".$user_details[2]);
	
			} else {
	
			echo "<div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div>";
			echo "<br> You have entered the wrong username or password. Please try again. <br>";
	
          }
    
        
	}
  }
  
  ?>
 <!DOCTYPE html>
<html>
    <head>
        <style>
   h1 {
      color: #ff9900;
    font-family: verdana;
    font-size: 400%;
   }
   h2{
    color: #7D89AE;
    font-family: verdana;
    font-size: medium;
    display: inline;
    padding-left:8em;
    align-content: center ;
   }
   h5{
    color: #ff9900;
    font-family: verdana;
    font-size: small;
   }
   body {
    
    color: #ff9900;
   }
   p.indent{ padding-left: 1.8em }
</style> 
        <title>
            Login
        </title>
    </head>
    <body>
	<center>
 <h1>Login</h1>
	<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
		<p>Username:<input type="text" name="username"></p>
		<p>Password:<input type="password" name="password"></p>
		<input type="submit" value="Sign In">
		<input type="reset" value="Clear">
	</form>
	</center>
</body>
</html>
