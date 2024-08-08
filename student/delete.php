<?php
    include "../config.php";

    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM student WHERE id='$id'";

    echo $deleteQuery;

    if(mysqli_query($conn,$deleteQuery)){
        echo "delete";
    } else {
        echo "unable to delete";
    }

    header("location:list.php");


?>