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

    <h1><i style="color: red;">logout sucess</i></h1>

    <?php
    session_start();

    session_destroy();
    ?>
</body>
</html>