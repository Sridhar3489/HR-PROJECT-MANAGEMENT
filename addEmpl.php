<html>
<head>
    <style>
        body{
            background-color:#FFFFD2;
        }
    </style>
    </head>
    <body>
        <form action="" method="POST">
        <center><h2>Add Employee</h2></center>
        <label>Enter Employee ID : </label>
        <input type="text" name="empid"><br><br>
        <label>Enter Employee Name : </label>
        <input type="text" name="empname"><br><br>
        <label>Enter Employee Experience : </label>
        <input type="text" name="exp"><br><br>
        <input type="submit" name="submit" value="Add Employee">
    </form>
    <?php
    include "session.php";
    include "config.php";
    if(isset($_POST['submit'])){
            $eid=$_POST['empid'];
            $ename=$_POST['empname'];
            $exp=$_POST['exp'];
        $sql="INSERT INTO employee VALUES ('$eid','$ename','$exp')";
        $res=mysqli_query($conn,$sql);
        if($res==TRUE){
            echo "<script>alert('Employee Added Succesfully')</script>";
        }
    }
    ?>
    </body>
    </html>