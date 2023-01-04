<html>
<head>
    <style>
        body{
            background-color:#FFFFD2;
        }
    </style>
    </head>
    <body>
        <form method="POST" action="updateemp.php">
        <center><h2>Update Employee</h2></center>
        <label>Enter Employee ID : </label>
        <input type="text" name="empid"><br><br>
        <label>Enter Employee Name : </label>
        <input type="text" name="empname"><br><br>
        <label>Enter Employee Experience : </label>
        <input type="text" name="exp"><br><br>
        <input type="submit" name="submit" value="Update Employee">
    </form>
    <?php
    include "session.php";
    include "config.php";
    $eid="";
    $ename="";
    $exp="";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['empid']))
            $eid=$_POST['empid'];
        if(isset($_POST['empname']))
            $ename=$_POST['empname'];
        if(isset($_POST['exp']))
            $exp=$_POST['exp'];
        $sql="UPDATE employee set eid='$eid',ename='$ename',exp='$exp' where eid='$eid'";
        $res=mysqli_query($conn,$sql);
        if($res){
            echo "<script>alert('Employee Updated Succesfully')</script>";
        }
    }
    ?>
    </body>