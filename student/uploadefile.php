<?php
    if(isset($_FILES['image'])){    //image xa ki xainxa vanya ta check garya
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($file_tmp,"../images/".$file_name);  
        echo "success";

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image"/>
        <input type="submit"/>
    </form>
</body>
</html>