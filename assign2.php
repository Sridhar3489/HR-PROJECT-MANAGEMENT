<html>
<head>
  <style>
    body{
      background-color:#FFFFD2;
    }
    </style>
   </head>
   <body>
        <?php 
              include "session.php";
              include "config.php";
              $proid="";
              if($_SERVER['REQUEST_METHOD']=="GET"){
                if(isset($_GET['proid']))
                  $proid=$_GET['proid'];
              }
        ?>
        <?php
              include "config.php";
              if($_SERVER['REQUEST_METHOD']=="POST"){
                if(isset($_POST['alid']))
                $alid=$_POST['alid'];
            if(isset($_POST['pid']))
                $pid = $_POST['pid'];
            if(isset($_POST['eid']))
                $eid = $_POST['eid'];
            
            if(isset($_POST['sdt']))
                $st =$_POST['sdt'];
            
            if(isset($_POST['edt']))
                $et = $_POST['edt'];

            $sql = "INSERT INTO pallocation VALUES ('$alid','$pid','$eid','$st','$et')";
            $res = mysqli_query($conn,$sql);
        if($res)
        {
            echo "<script>alert('Assigned Successfully')</script>";
        }
        else
        {
            echo "Error: ".$sql."<br>".mysqli_error($db);
        }
              }
              ?>
        <h2> <center>ALLOTING PROJECT </center></h2>
        <h3> ENTER DETAILS </h3>
        <br>
        <form method="POST" action="">
                    <label>Enter Allocation ID : </label>
                    <input type="text" name="alid" required>
                    <br><br>
                    <label>Enter Project ID : </label>
                    <input type="text" name="pid" value="<?php echo $proid;?>" readonly>
                    <br><br>
                    <label>Enter Employee ID : </label>
                    <input type="text" name="eid" required>
                    <br><br>
                    <label>Enter Start Date : </label>
                    <input type="datetime-local" name="sdt" required>
                    <br><br>
                    <label>Enter End Date : </label>
                    <input type="datetime-local" name="edt" required>
                    <br><br>
                    <input type="submit" name="submit" value="Assign">
      </form>
  </body>
  </html>
