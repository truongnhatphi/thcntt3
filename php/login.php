<!DOCTYPE html>
<?php
    session_cache_limiter('private, must-revalidate');
    session_cache_expire(60);
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="../CSS/style.css">

    <title>Login</title>
</head>
<body>
    <header>
        <div class="main">
            <div class="logo">
                <img src="../Img/logo.png">
            </div>
            <ul>
                <li><a href="./Home.php">Home</a></li>
                <li class="active"><a href="./login.php">Login</a></li>
                <li><a href="./signup.php">Sign Up</a></li>
            </ul>
        </div>    
    </header>
    <main >
        <div class="login">
            <h1>Login</h1>
            <form method="post">
                <p>User name</p>
                <input type="text" name="user_name" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="pass_word" placeholder="Enter Password">   
                <br>             
                <input name="login-submit" value="Login" type="submit" />
            </form>

            <?php
                include "connectdata.php";
                if(isset($_POST['login-submit'])){
                    $username=$_POST['user_name'];
                    $password=$_POST['pass_word'];
                    if($username=="" || $password==""){
                        echo '<p>Hãy điền đầy đủ thông tin của bạn</p>';
                    }else{                        
                        $sql="SELECT * FROM userinfo WHERE username='$username' and password='$password'";
                        $query=mysqli_query($conn,$sql);
                        $num_rows=mysqli_num_rows($query);
                        if($num_rows!=0){
                            $rows=mysqli_fetch_assoc($query);
                            if($rows['sensor']=="Temperature"){
                                header("location:Temperature.php");
                            }
                            else if($rows['sensor']=="Intrusion"){
                                header("location:Anti-theft.php");
                            }
                            else{
                                echo 'Error';
                            }
                            
                        }else{
                            echo '<p style="text-align:center;">Bạn không đăng nhập thành công</p>';
                        }
                    }
                }
            ?>
      </div>
    </main> 

</body>
</html>