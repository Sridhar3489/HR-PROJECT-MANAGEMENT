<html>
    <head>
        <style>
            body{
                background-color:#FFFFD2;
                margin:30px;
                padding:30px;
            }
            .buttons a{
                text-decoration:None;
                font-size:25px;
            }
            .buttons a{
                color:#F96167;
                position:relative;
            }
            .buttons a:hover{
                color:#2C5F2DFF;
                text-decoration:underline purple; 
            }
            </style>
<body>
    <center>
        <?php include "session.php" ?>
        <h1>
            HR MANAGEMENT SYSTEM
        </h1>
        <br><br>
        <br><br>
        <div class="buttons">
    <a href="empl.php">Employees</a>
     &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
    <a href="projects.php">Projects</a>
     &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
    <a href="assign1.php">Assign</a>
     &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
    <a href="view.php">View</a>
     &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
    <a href="addEmpl.php">Add Employee</a>
    &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
    <a href="addProj.php">Add Project</a>
        </div>
</center>
</body>
</html>