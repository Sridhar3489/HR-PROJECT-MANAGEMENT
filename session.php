<html>
    <head>
        <style>
            body{
                font-size:18px;
            }
            .sess{
                position: absolute;
                top: 0px;
                right: 0px;
            }
            a{
                text-decoration:None;
                position:relative;
            }
            a:hover{
                text-decoration:Underline;
                color:red;
            }
            </style>
    </head>
    <body>        
        <p class="sess">
            Welcome <i><b><?php session_start(); echo $_SESSION['uname'];?></b></i>
            <br>
            <a href="logout.php">Logout</a>
        </p>
    </body>
