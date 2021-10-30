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
    <form action="" method="POST">
        Name <input name="name" type="text"><br>
        email <input name="email" type="email"><br>
        password <input name="password" type="password"><br>
        confirm_password <input name="confirm_password" type="password"><br>
        <button name="register" type="submit">Register</button>
    </form>

    <?php
    session_start();

    function checkstrongpassword($password){
        $upperStatus = false;
        $lowerStatus = false;
        $numberStatus = false;
        $specialStatus = false;

        if(preg_match('/[A-Z]/',$password)){
            $upperStatus = true;
        }

        if(preg_match('/[a-z]/',$password)){
            $lowerStatus = true;
        }

        if(preg_match('/[0-9]/',$password)){
            $numberStatus = true;
        }

        if(preg_match('/[!@#$&*]/',$password)){
            $specialStatus = true;
        }

        if( $upperStatus && $lowerStatus && $numberStatus && $specialStatus){
            return true;
        }else{
            return false;
        }
    }

    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($name != "" and $email != "" and $password != "" and $confirm_password != "" ){
            if(strlen($password) >= 6 and strlen($confirm_password) >= 6 ){
                if($password == $confirm_password){
                    $status = checkstrongpassword($password);
                    if($status){
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = password_hash($password,PASSWORD_BCRYPT);
                        echo "register sucess";
                    }else{
                        echo "weak password";
                    }
                    
                }else{
                    echo "not same password";
                }
            }else{
                echo "password must be greater than 6";
            }
        }else{
            echo "need to fill";
        }
    }
    ?>
</body>
</html>