<?php 
// connection to the databse
   function get_db_conn(){
    $hostname = "";
    $username = "";
    $password = "";
    $dbname = "";
    return  mysqli_connect($hostname, $username, $password, $dbname);
   }
    ?>