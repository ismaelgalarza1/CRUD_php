<?php 
    require_once('../controller/users_info_controller.php');
    require_once('../controller/users_info_statements.php');
    $address_arr = get_addresses(); 

?>

<html>
    <head>
        <title>Galarza</title> <!-- The title of the page -->
        <link rel="stylesheet" href="style.css"> 
    </head>
<body>
<h2>Current Users:</h2> <!-- title of the table and format of the table -->
        <table>
            <tr style="font-size:Large;">
            <th>Address #</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Street Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
            <th></th>
            <th></th>
        </tr>
 <!-- the way the user can use the button to edit or delete records/data from the database and displays in the table -->
        <?php foreach($address_arr as $row):;?>
            <tr>    
            <td><?php echo $row["AddressNo"];?></td>
                <td><?php echo $row["First"];?></td>
                <td><?php echo $row["Last"];?></td>
                <td><?php echo $row["Street"];?></td>
                <td><?php echo $row["City"];?></td>
                <td><?php echo $row["State"];?></td>
                <td><?php echo $row["Zip"];?></td>
                <td>
                    <form method='POST'>
                        <input type="submit" value="Edit" name="edit">
                        <input type="hidden" value="<?php echo $row["AddressNo"]; ?>" name="Address_No"> 
                    </form>
                </td>
                <td>
                    <form method ='POST'>
                        <input type="submit" value="Delete" name="delete">
                        <input type="hidden" value="<?php echo $row["AddressNo"]; ?>"
                        name = "Address_No">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <!-- the form in which the user can type to add/update the information in the database. -->
        <form method ='POST'>
            <input type="hidden" value="<?php echo $AddressNum; ?>" name ="Address_No">
            <h3>Enter your first name: <input type="text" name="First" value="<?php echo $FirstName; ?>"></h3>
            <h3>Enter your last name: <input type="text" name="Last" value="<?php echo $LastName; ?>"></h3>
            <h3>Enter your street address: <input type="text" name="Street" value="<?php echo $StreetAddress; ?>"></h3>
            <h3>Enter your city: <input type="text" name="City" value="<?php echo $CityName; ?>"></h3>
            <h3>Enter your state: <input type="text" name="State" value="<?php echo $StateName;?>"></h3>
            <h3>Enter your zip code: <input type="text" name="Zip" value="<?php echo $ZipCode;?>"></h3>
            <?php if (!$edit): ?>
                    <input type="submit" value="Add User" name="add">
            <?php else: ?>
                <input type="submit" value="Update User" name="update">
            <?php endif; ?>
        </form>

    </body>
    

</html>