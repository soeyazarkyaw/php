<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $errorName = $errorAddress = $errorPhone = "";
    $name = $address = $phone = "";

    if (isset($_POST['save'])){

        if($_POST['name'] == null || $_POST['name'] == "" || empty( $_POST['name']) ){
            $errorName = "need to name fill";
        }else{
            $name = $_POST['name'];
        }
        if($_POST['address'] == null || $_POST['address'] == "" || empty( $_POST['address']) ){
            $errorAddress = "need to address fill";
        }else{
            $address = $_POST['address'];
        }
        if($_POST['phone'] == null || $_POST['phone'] == "" || empty( $_POST['phone']) ){
            $errorPhone = "need to phone fill";
        }else{
            $phone = $_POST['phone'];
        }
        if ($name != "" and $address != "" and $phone != ""){
            echo $name ."<br>";
            echo $address ."<br>";
            echo $phone ."<br>";
    
        }
    }
    ?>
    <form method="POST">
        name <input name="name" type="text"><br><small><?php echo $errorName?></small><br>
        address <input name="address" type="text"><br><small><?php echo $errorAddress?></small><br>
        phone <input name="phone" type="text"><br><small><?php echo $errorPhone?></small><br>
        <button name="save" type="submit">save</button>
    </form>
    
    
</body>
</html>