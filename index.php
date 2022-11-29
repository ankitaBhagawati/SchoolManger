<!DOCTYPE html>
<html>
<head>
   <title> Login Form </title>
</head>
<body>
  <link rel="stylesheet" type="text/css" href="global.php/">
	<form action="" method="post">
    <div class="head">
  <h2> Student Login </h2>
     </div>
<div class "login"> </div>
<ul class="list">
<li> <input type="text" name="UserName" placeholder="User Name"></li>
  <li> <input type="password" name="Password" placeholder="Password"> </li>
  <button class="btn-login" type="submit" value="submit" name="done"> Login </button>
</ul>
<div class="extra">
  <li> <A HREF="#"> Forget Password? </a></li>
 <li><A HREF="registration.php"> New user? Register here! </A> </li>
</div>
</form>
</body>
</html>

<?php
   include("conne.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($conn,$_POST['UserName']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['Password']);
      $sql="select * from register where UserName = '$myusername' and Password = '$mypassword'";
	     $result=mysqli_query($conn,$sql);
	      $count = mysqli_num_rows($result);
	       if($count!=0)
	        {
		   $_SESSION['login_user'] = $myusername;
		   header("location: welcome.php");
	   }
	   else
	   {
		   $error = "Your Login Name or Password is invalid";
       echo '<script>alert("Wrong User Details")</script>';
	   }

   }
?>
