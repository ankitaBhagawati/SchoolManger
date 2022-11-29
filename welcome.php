<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
<title> profile </title>
<body>
<link rel="stylesheet" type="text/css" href="welstyle.php">
<div class="wel">
<h1>Welcome <?php echo $_SESSION['login_user']; ?> </h1>
<h1> you've been logged in </h1>
</div>
</body>
</head>
</html>
