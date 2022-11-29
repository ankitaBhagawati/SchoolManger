<?php
include_once ('conne.php');

$query="select * from register";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
  <head>
  <title> Display </title>
  <body>
    <div class="head">
    <h1>  Student Records <h1>
    </div>
      <link rel="stylesheet" type="text/css" href="disstyle.php/">
    <table class="content-table">
      <thead>
        <tr>
          <th>UserName</th>
          <th>First Name</th>
          <th>Secand Name</th>
          <th>Class</th>
          <th>Email</th>
          <th>Contact No</th>
          <th colspan="2">Operations</th>
        </tr>
      </thead>
      <?php
          while($rows=mysqli_fetch_assoc($result))
          {
            ?>
            <tr>
      <tbody>

        <td> <?php echo $rows['UserName']; ?></td>
        <td> <?php echo $rows['FirstName']; ?></td>
        <td> <?php echo $rows['LastName']; ?></td>
        <td> <?php echo $rows['Class']; ?></td>
        <td> <?php echo $rows['Email']; ?></td>
         <td> <?php echo $rows['ContactNo']; ?> </td>
         <td> <a href="updateF.php?UserID=<?php echo $rows['UserID']; ?> &FirstName=<?php echo $rows['FirstName'];?> &LastName=<?php echo $rows['LastName']; ?> &UserName=<?php echo $rows['UserName']; ?> &Class=<?php echo $rows['Class']; ?> &Email=<?php echo $rows['Email']; ?> &ContactNo=<?php echo $rows['ContactNo'];?>"> Edit </a> </td>
         <td> <a href="delete.php?UserID=<?php echo $rows['UserID']; ?>"> Delete </a> </td>

        </tr>
      </tbody>
      <?php
      }
    ?>
    </table>

</body>
</head>
</html>
