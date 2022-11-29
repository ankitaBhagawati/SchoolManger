<?php

include 'conne.php';

if(isset($_POST['done']))
{
        $UserID = $_GET['UserID'];
        $UserName = $_GET['UserName'];
        $FirstName=$_POST['FirstName'];
        $LastName=$_POST['LastName'];
        $Email=$_POST['Email'];
        $ContactNo=$_POST['ContactNo'];
        $Class=$_POST['Class'];
        
      $query = " UPDATE `register` SET FirstName='$FirstName', LastName='$LastName',UserName='$UserName',Class='$Class',Email='$Email', ContactNo='$ContactNo' WHERE UserID=$UserID ";
      $query = mysqli_query($conn,$query);

      if($query!=0)
      {
    echo '<script>alert("update done!")</script>';
        header("location: display.php");
      }
      else
      {
        echo "update not done!";
      }

}
?>

<!DOCTYPE html>
<html>
  <head>
  <title> Update </title>
  <link rel="stylesheet" type="text/css" href="up.php">
  </head>
  <body>
<div class="update">
<form method ="post">
<ul class="list">
<li><h1> UPDATE </h1></li>
<li> <input type="text" name="FirstName" placeholder=<?php echo $_GET['FirstName']; ?> ></li>

<li> <input type="text" name="LastName" placeholder=<?php echo $_GET['LastName']; ?> > </li>

<li> <input type="text" name="UserName" placeholder=<?php echo $_GET['UserName']; ?> > </li>

<li> <input type="number" name="Class" placeholder=<?php echo $_GET['Class']; ?> > </li>

<li> <input type="text" name="Email" placeholder=<?php echo $_GET['Email']; ?> > </li>

<li> <input type="number" name="ContactNo" placeholder=<?php echo $_GET['ContactNo']; ?> > </li>

</ul>
<input type="submit" value="Update" name="done" class="btn">

</form>
</div>
</body>
</html>
