<?php

include 'conne.php';

if(isset($_POST['done']))
{
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$UserName = $_POST['UserName'];
$Class = $_POST['Class'];
$Password = $_POST['Password'];
$ConfirmPassword = $_POST['ConfirmPassword'];
$Email = $_POST['Email'];
$ContactNo = $_POST['ContactNo'];
$Email = $_POST['Email'];
$query =" INSERT INTO `register`( `FirstName`, `LastName`,`UserName`, `Class`,`Password`, `ConfirmPassword`, `Email`, `ContactNo`) VALUES ( '$FirstName', '$LastName', '$UserName' ,'$Class', '$Password', '$ConfirmPassword', '$Email', '$ContactNo' )";
$query = mysqli_query($conn,$query);
echo "<br/><br/><h1> <span>Data Inserted successfully...!!</span></h1>";
}
?>
<!DOCTYPE html>
<html>
  <head>
  <title> Registration Form</title>
  <link rel="stylesheet" type="text/css" href="style.php/">
  </head>
  <body>

<div class="Register">
<form method ="post">
<ul class="list">
<li><h1> Register </li></h1>
<li> <input type="text" name="FirstName" placeholder="Enter your first name"></li>
<li> <input type="text" name="LastName" placeholder="Enter your second name"> </li>
<li> <input type="text" name="UserName" placeholder="Enter your user name"></li>
<li> <input type="number" name="Class" placeholder="Enter your class(1-10)"></li>
<li> <input type="password" name="Password" placeholder="Enter your password"> </li>
<li> <input type="password" name="ConfirmPassword" placeholder="confirm password"> </li>
<li> <input type="text" name="Email" placeholder="Enter your email"> </li>
<li> <input type="number" name="ContactNo" placeholder="Enter your phone no."> </li>
<input type="submit" value="Register" name="done" class="btn">
</ul>
<div class="end">
  <li><A HREF="index.php"> Already a user? login here! </A> </li>
</div>
</form>
</div>
</body>
</html>
