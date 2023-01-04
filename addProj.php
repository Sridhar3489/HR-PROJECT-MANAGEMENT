<html>
<head>
  <style>
        body{
            background-color:#FFFFD2;
        }
        </style>
        </head>
    <body>
<h2> <center> ADD PROJECT </center></h2>
<form method="POST" action="">
<table>
    <tr>
        <td><label>ENTER PROJECT ID : </label></td>
        <td><input type="text" name="pid"></td>
</tr>
<tr>
        <td><label>ENTER PROJECT NAME : </label></td>
        <td><input type="text" name="pname"></td>
</tr>
<tr>
        <td><label>ENTER CLIENT NAME : </label></td>
        <td><input type="text" name="cname"></td>
</tr>
</table>
<br>
<input type="submit" name="addpro" value="Add Project">
</form>
<?php
include "config.php";
include "session.php";
if(isset($_POST['addpro'])){
    $pid=$_POST['pid'];
    $pname=$_POST['pname'];
    $cname=$_POST['cname'];
    $sql="insert into project values($pid,'$pname','$cname')";
    $result=mysqli_query($conn,$sql);
    if($result) {
        echo "<script> alert('Project added successfully')</script>";
    }
}
?>
</body>
</html>