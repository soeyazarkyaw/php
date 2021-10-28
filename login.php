<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3>Login Form</h3> 
   <form method="POST">
        email <input name="userEmail" type="text"><br>
        password <input type="password" name="userPw"><br>
        <button name="logBtn" type="submit">login</button>
   </form>

   <?php
   $email = 'admin@gmail.com';
   $password = password_hash('admin123',PASSWORD_BCRYPT);

        if(isset($_POST['logBtn'])){
            $userEmail = $_POST['userEmail'];
            $userPw = $_POST['userPw'];
            if($email == $userEmail and password_verify( $userPw,$password) ){
                echo "login sucess";
            }else{
                echo "Try again";
            }
        }
   ?>
</body>
</html>