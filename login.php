<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a style="margin-right:10px ;" href="login.php">Login</a>
    <a style="margin-right:10px ;" href="logout.php">logout</a>
    <a href="register.php">register</a><br><br><br><br>
   <h3>Login Form</h3> 
   <form method="POST">
        email <input name="userEmail" type="text"><br>
        password <input type="password" name="userPw"><br>
        <button name="logBtn" type="submit">login</button>
   </form>

   <?php
        session_start();

        if(isset($_POST['logBtn'])){
            $userEmail = $_POST['userEmail'];
            $userPw = $_POST['userPw'];
            if(  $userEmail == $_SESSION['email'] and password_verify( $userPw,$_SESSION['password']) ){
                echo "login sucess";
            }else{
                echo "Try again";
            }
        }
   ?>
</body>
</html>