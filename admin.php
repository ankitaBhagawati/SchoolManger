<!DOCTYPE html>
<html>
<head>
   <title> Admin </title>
</head>
<body>
  <link rel="stylesheet" type="text/css" href="adminlogstyle.php/">
	<form action="" method="post">
    <div class="head">
      <h2> Admin Login <h2>
      </div>
<div>
<ul class="list">

  <li> <input type="text" name="UserName" placeholder="User name"></li>
  <li> <input type="password" name="Password" placeholder="Password"> </li>
  <li><button class="btn-login" type="submit" value="submit" name="done"> Go! </button></li>

</ul>
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

	  $sql="select * from admin where UserName = '$myusername' and Password = '$mypassword'";
	  $result=mysqli_query($conn,$sql);
	  $count = mysqli_num_rows($result);
	   if($count!=0)
	   {
		   $_SESSION['login_user'] = $myusername;
		   header("location: afterlogin.php");
	   }
	   else
	   {
		   $error = "Your Login Name or Password is invalid";
       echo '<script>alert("Wrong User Details")</script>';
	   }

   }
?>
