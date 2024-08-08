<?php

if(isset($_POST['submit'])) {
    include ("../config.php");
    $name = $_POST['name'];
    $address = $_POST['address'];
    $district = $_POST['district'];

    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($file_tmp,"../images/".$file_name);  

        $sqlquery = "INSERT INTO student (name, address, district, image) VALUES ('$name', '$address','$district','$file_name')";

        echo $sqlquery;

        if (mysqli_query($conn, $sqlquery)){
            echo "record succesfully";
        } else {
            echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn);
        }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <fieldset>
        <legend><h1>Student form</h1></legend>
        <form action=" " method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" placeholder="Enter name" name="name"></td>                    
                </tr>
                <tr>
                    <td><label for="Address">Address:</label></td>
                    <td><input type="text" placeholder="Enter address" name="address"></td>
                </tr>
                <tr>
                    <td><label for="District">District:</label></td>
                    <td>
                        <select name="district" id="">
                            <option value="ktm" >kathmandu</option>
                            <option value="bhaktapur">bhaktapur</option>
                            <option value="lalitpur" >lalitpur</option>
                            <option value="dolakha">dolakha</option>
                            <option value="" selected>None</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="image">Images</label></td>
                    <td><input type="file" name="image"/></td>
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