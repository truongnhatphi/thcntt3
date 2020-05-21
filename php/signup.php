<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="../CSS/style.css">
    <title>SignUp</title>
</head>
<body>
    <header>
        <div class="main">
            <div class="logo">
                <img src="../Img/logo.png">
            </div>
            <ul>
                <li><a href="./Home.php">Home</a></li>
                <li><a href="./login.php">Login</a></li>
                <li class="active"><a href="./signup.php">Sign Up</a></li>
            </ul>
        </div>    
    </header>
    <main>
        <div class="signup">
            <h1>Sign Up</h1>
            <form method="post">
                <p>User name</p>
                <input type="text" name="user_name" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="pass_word" placeholder="Enter Password">
                <p>Email</p>
                <input type="text" name="user_email" placeholder="Enter Email">
                <br>
                 Male <input type="radio" name="sex" value="Male">  Female <input type="radio" name="sex" value="Female">
                <br>
                Temperature <input type="radio" name="sensor" value="Temperature">  Intrusion <input type="radio" name="sensor" value="Intrusion">
                <br>
                <input name="signup-submit" value="Đăng ký" type="submit" />
            </form>

            <?php
                include "connectdata.php";
                if(isset($_POST['signup-submit'])){
                    $username=$_POST['user_name'];
                    $password=$_POST['pass_word'];
                    $email=$_POST['user_email'];            
                    $gender=$_POST['sex'];
                    $sensor=$_POST['sensor'];
                    
                    if($username=="" || $password=="" ||$email=="" ||$gender=="" ||$sensor==""){
                        echo '<p>Hãy điền đầy đủ thông tin của bạn</p>';
                    }
                    else{                       
                        $sql="INSERT INTO `userinfo`(`username`, `password`, `email`, `gender`,`sensor`) VALUES ('$username','$password','$email','$gender','$sensor')";
                        $query=mysqli_query($conn,$sql);
                        if($query!=0){
                            echo '<p>Bạn đã đăng ký thành công</p>';
                        }else{
                            echo '<p>Bạn đã đăng ký không thành công</p>';
                        }
                    }
                }
            ?>
        </div>
    </main>
    
</body>
</html>