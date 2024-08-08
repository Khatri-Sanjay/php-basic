<?php
include("../config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];

    $sql = "SELECT id, username FROM student WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);

    if($count == 1) {
        $username = $row['username'];
        $_SESSION['username'] = $username;

        header("location: welcome.php");
    }else {
        $error = "Your Login Name or Password is invalid";
        echo $error;
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
<fieldset>
        <legend><h1>login form</h1></legend>
        <form action=" " method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" placeholder="Enter name" name="username"></td>                    
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" placeholder="*****" name="password"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </fieldset>

</body>
</html>