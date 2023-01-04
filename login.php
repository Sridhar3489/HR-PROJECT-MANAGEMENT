<html>
<head>
        <style>
            body{
                background-color:#FFFFD2;
                margin:30px;
                padding:30px;
            }
            table{
                margin-left:auto;
                margin-right:auto;
                border-spacing:0 20px;
            }
        </style>
</head>
<body>
    <h2><center>LOGIN PAGE</center></h2>
    <br>
    <br>
    <form action=' ' method="POST">
    <table>
        <tr>
            <td>
                Username:
            </td>
            <td>
                <input type="text" name="username" id="username"> 
            </td>
        </tr>
        <tr>
            <td>
                Password:
            </td>
            <td>
                <input type="password" name="password" id="password">
            </td>
        </tr>
    </table>
    <br>
    <center><input type='submit' name='submit' value="Login"></center>
        </form>
        <?php
            session_start();
            include "config.php";
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $un=$_POST['username'];
                $pwd=$_POST['password'];
                if($un=='admin' && $pwd=='admin'){
                    $_SESSION['uname']=$un;
                    header("location:home.php");
                }
                else{
                    echo "<script>alert('Wrong Credentials :(')</script>";
                }
            }
        ?>
</body>
</html>