<?php
include "config.php";
$id=$_GET['id'];
$sql="DELETE FROM project where pid='$id'";
$res=mysqli_query($conn,$sql);
if($res){
    echo "<script>alert('Project Deleted')</script>";
}
?>