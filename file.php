<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
    <input name="saveFile" type="file"><br>
    <input type="submit" name="saveBtn" value="save">
    </form>

    <?php
    if(isset($_POST['saveBtn'])){
        $imgName = $_FILES['saveFile']['name'];
        $tmpName = $_FILES['saveFile']['tmp_name'];
 
        $target = 'image/' . $imgName;
        if(move_uploaded_file($tmpName,$target)){
            move_uploaded_file($tmpName,$target);
            echo "sucess";  
        }else{
            echo "error";
        }
    }

    ?>
</body>
</html>