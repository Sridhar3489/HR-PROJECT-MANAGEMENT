<?php
include "config.php";
$id=$_GET['id'];
$sql="DELETE FROM employee WHERE eid='$id'";
$res=mysqli_query($conn,$sql);
if($res){
    echo "<script>alert('Employee Deleted')</script>";
}
else{
    echo "Fail";
}
?>