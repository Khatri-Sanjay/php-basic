<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
</head>
<body>
    <table border="1" callpadding="5px" cellspacing="0">
        <tr>
            <td>sn</td>
            <td>id</td>
            <td>name</td>
            <td>address</td>
            <td>District</td>
            <td>Images</td>
            <td>action</td>
        </tr>
        <tr>
            
<?php
    include "../config.php";
    $selectQuery = "SELECT * FROM student";

    $result = mysqli_query($conn, $selectQuery);  //

    if(mysqli_num_rows($result)){
        $i = 1;
        while($row = mysqli_fetch_assoc($result)){
        

?>
        
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row ['id'];?></td>
        <td><?php echo $row ['name']?></td>
        <td><?php echo $row ['address']?></td>
        <td><?php echo $row ['district']?></td>
        <td><img src="../images/<?php echo $row ['image'];?>" alt="" width="500px" height="100px"></td>
        <td>
            <button><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a></button> 
            <button><a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure?')";>Delete</a></button>
        </td>
    </tr>
        <?php
        $i++;
        }
    }
        ?>

    </table>
</body>
</html>