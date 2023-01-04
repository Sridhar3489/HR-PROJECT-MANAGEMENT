<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">>
<style>
        body{
            background-color:#FFFFD2;
        }
        </style>
<title> ALLOCATION </title>
</head>
<body>
    <h2><center><b>PROJECT ALLOCATION DETAILS</b></center></h2>
    <br>
    <table class="table table-striped">
        <thead class="thead-grey">
            <tr>
                <strong>
                    <center>
                        <th>Allocation ID</th>
                        <th>Project ID</th>
                        <th>Employee ID</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </center>
                </strong>
            </tr>
        </thead>
        <?php
        include "config.php";
        $query="SELECT * from pallocation";
        $res=mysqli_query($conn,$query);
        while($row=mysqli_fetch_assoc($res)){
            echo "<tr>
            <td>".$row['aid']."</td>
            <td>".$row['pid']."</td>
            <td>".$row['eid']."</td>
            <td>".$row['sdate']."</td>
            <td>".$row['edate']."</td>
            </tr>";
        }
        ?>
    </table>
</body>