<?php
    include "../config.php";

    $id = $_GET['id'];

    $query = "SELECT * FROM student WHERE id=$id";

    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);   //fetch single row

    // print_r($row);

    // exit();

?>

    <fieldset>
        <legend><h1>Student form</h1></legend>
        <form action=" " method="POST">

            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td>
                        <input type="text" placeholder="Enter name" name="name" value=<?php echo $row['name']?>>
                    </td>                    
                </tr>
                <tr>
                    <td><label for="Address">Address:</label></td>
                    <td>
                        <input type="text" placeholder="Enter address" name="address" value=<?php echo $row['address']?>>
                    </td>
                </tr>
                <tr>
                    <td><label for="District">District:</label></td>
                    <td>
                        <select name="district" id="district" value=<?php echo $row['district']?>>
                            <option 
                            value="ktathmandu" 
                            <?php if($row['district'] == 'kathmandu')
                            { ?>
                            selected
                            <?php } ?>
                            >kathmandu</option>

                            <option value="bhaktapur"
                            <?php if($row['district']=='bhaktapur')
                            {?>
                            selected
                            <?php }?>
                            >bhaktapur</option>

                            <option value="lalitpur"
                            <?php if($row['district']=='lalitpur')
                            { ?>
                            selected
                            <?php }?>
                            >kathmandu</option>

                            <option value="None" 
                            <?php if($row['district']=='None')
                            { ?>
                            selected
                            <?php }?> 
                            >None</option>
                    </td>
                </tr>
                <tr>
                    <td><label for="image">Image</label></td>
                    <td><input type="file" name="image"/></td>
                </tr>

                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>
        <?php

        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $district = $_POST['district'];
            $update = "UPDATE student SET name='$name', address='$address', district='$district' WHERE id=$id";

            if(mysqli_query($conn,$update)){
                echo "update succesfully";
            } else {
                echo "unable to update";
            }
        
            header("location:list.php");
        }
        ?>
    </fieldset>
