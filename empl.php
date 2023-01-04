<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">>
    <style>
        body{
            background-color:#FFFFD2;
        }
        </style>
</head>
    <body>
        <?php
        include "session.php";
        ?>
    <h2><center><b>EMPLOYEES</b></center></h2>
    <br>
    <div class="container">
        <table class="table table-striped">
            <thead class="thead-grey">
            <tr>
                <strong>
                    <center>
                <th>ID</th>
                <th>NAME</th>
                <th>EXPERIENCE</th>
                <th>EDIT</th>
                <th>DELETE</th>
</center>
</strong>
</tr>
</thead>
<?php
include "config.php";
$sql="SELECT * from employee";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo "<tr>
        <td>".$row['eid']."</td>
        <td>".$row['ename']."</td>
        <td>".$row['exp']."</td>
        <td><a href='updateemp.php?id=$row[eid]'>Edit</a></td>
        <td><a href='deleteemp.php?id=$row[eid]'>Delete</a></td>
        </tr>";
}
?>
</body>
</html>