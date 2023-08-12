<?php 
    
    require_once('database.php');

    //Get all entries in the userinfo table

    function get_all_address() {
        //Query for all users
        $conn = get_db_conn();
        $query = "SELECT * FROM users_address";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    
  
    