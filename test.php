<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Name <input name="name" type="text"><br>
        PH-no <input name="phone" type="text"><br>
        <button type="submit" name="saveBtn" class="btn btn-info">Save</button>
        <button type="submit" name="clsBtn" class="btn btn-danger">Clear</button>
    </form>
    <?php
        if(isset($_POST['saveBtn'])){
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            if($name == null || $phone == null){
                echo "Need To Fill";
            }else{
                echo $name;
                echo $phone;
            }
        }
        if(isset($_POST['clsBtn'])){
            echo "Clear Finished:";
        }

    ?>
</body>
</html>