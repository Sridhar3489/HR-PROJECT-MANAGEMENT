<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
    <div class="container">
        <h2><center>
            Projects List
        </center>
        <br>
        <table class="table table-striped">
            <thead class="thead-grey">
                <tr>
                    <strong>
                        <b>
                            <center>
                                <th>Project ID</th>
                                <th>Project Name</th>
                                <th>Client Name</th>
                                <th>Delete</th>
                            </center>
                        </b>
                    </strong>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config.php";
                $sql="SELECT * FROM project";
                $res=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    echo "<tr>
                    <td>".$row['pid']."</td>
                    <td>".$row['pname']."</td>
                    <td>".$row['cname']."</td>
                    <td><a href='delete.php?id=$row[pid]'>Delete</a></td>
                    </tr>";
                }
                ?>
                </body>
                </html>