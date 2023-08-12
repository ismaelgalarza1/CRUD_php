<?php  // Imports 
        require_once('../view/display_page.php');
        require_once('../model/user_address_dbinfo.php');
//varibales declartion 
         $AddressNum = -1;
        $FirstName = "";
        $LastName = "";
        $StreetAddress = "";
        $CityName = "";
        $StateName = "";
        $ZipCode = "";
// varibale declartion from IF statements 
        $add = false;
        $edit = false;
        $update = false;
        $delete = false;
        
    if (isset($_POST['Address_No'])){
            $AddressNum = $_POST['Address_No'];
            $add = isset($_POST['add']);
            $update = isset($_POST['update']);
            $edit = isset($_POST['edit']);
            $delete = isset($_POST['delete']);
        }
        // IF statement that will allow users to add records to the database
    if ($add){
            $conn = get_db_conn();
            $FirstName = $_POST['First'];
            $LastName = $_POST['Last'];
            $StreetAddress = $_POST['Street'];
            $CityName = $_POST['City'];
            $StateName = $_POST['State'];
            $ZipCode = $_POST['Zip'];
    
            $addQuery = " INSERT INTO 
                            users_address (First, Last, Street, City, State, Zip)
                            VALUES ('$FirstName', '$LastName', '$StreetAddress', '$CityName', '$StateName', '$ZipCode')";
            $result = mysqli_query($conn, $addQuery);

            $AddressNum = -1;
            $FirstName = "";
            $LastName = "";
            $StreetAddress = "";
            $CityName = "";
            $StateName = "";
            $ZipCode = "";
            
        }
        // IF statement that will allow users to update records.
    else if ($update){
            $conn = get_db_conn();
            $FirstName = $_POST['First'];
            $LastName = $_POST['Last'];
            $StreetAddress = $_POST['Street'];
            $CityName = $_POST['City'];
            $StateName = $_POST['State'];
            $ZipCode = $_POST['Zip'];
    
            $updQuery = "UPDATE users_address SET 
                        First = '$FirstName', Last= '$LastName', 
                        Street = '$StreetAddress', City = '$CityName',
                        State = '$StateName', Zip = '$ZipCode'
                        WHERE AddressNo = $AddressNum";
            mysqli_query($conn, $updQuery);
    
            //clearing of the field
            $AddressNum = -1;
            $FirstName = "";
            $LastName = "";
            $StreetAddress = "";
            $CityName = "";
            $StateName = "";
            $ZipCode = "";
        }
        // IF statement that will allow users to edit the users records from the input box
        else if($edit){
            $conn = get_db_conn();
            $selQuery = "SELECT * FROM users_address WHERE AddressNo = $AddressNum";
            $result = mysqli_query($conn, $selQuery);
            $usersAddress = mysqli_fetch_assoc($result);

        //fill in the values to allow for edit
            $FirstName = $usersAddress['First'];
            $LastName = $usersAddress['Last'];
            $StreetAddress = $usersAddress['Street'];
            $CityName = $usersAddress['City'];
            $StateName = $usersAddress['State'];
            $ZipCode = $usersAddress['Zip'];
            
        }
        // Else if statement that will allow the user to delete records from the database.
        else if($delete){
            $conn = get_db_conn();
             //Need to delete the selected user
            $delQuery = "DELETE FROM users_address WHERE AddressNo = $AddressNum";
            mysqli_query($conn, $delQuery);
            $AddressNum = -1;

        }
    // else statement that notify the user if the action was executed and for troubleshooting.    
        else {
            echo "Execution was not completed";
        }

 

    