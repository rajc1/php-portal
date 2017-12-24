<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                padding-left :500px;
            }
            h1{
                color: #ff0000;
            }
        </style>
        <title>
            Registration Page!!!
        </title>
    </head>
    <body>
        
        
        <h1>Please register here</h1>
        <form action="registration.php" method="post">
            <p>First Name:<input type="text" name="fname"></p>
            <p>Last Name:    <input type="text" name="lname"></p>
            <p>User Name:    <input type="text" name="uname"></p>
            <p>Password :     <input type="password" name="pw"></p>
            <p>Confirm Password :     <input type="password" name="pw1"</p>
      
            <p>Date Of Birth:<input type="date" name= "DOB"></p>
            <p>Gender:<br>
                <input type="radio" value="F" name="gender">Female<br>
                <input type="radio" value="M" name="gender">Male<br>
            </p>
            <p>Country:
            <select name="country">
               <option value="Ind">India</option>
               <option value="USA">USA</option>
               <option value="UK">UK</option>
               
            </select></p>
            <p><input type="submit" value="Register"></p>
        </form>
    </body>
</html>