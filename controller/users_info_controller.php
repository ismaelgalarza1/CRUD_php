<?php 

    require_once('../model/user_address_dbinfo.php');

    function get_addresses()
    {
        $address_rows = get_all_address();
        $address = array();
        

        if ($address_rows)
        {
            $index = 0;
            //if query was successful, fill the users array

            while($row = mysqli_fetch_array($address_rows)) 
            {
                $address[$index]["AddressNo"] = $row["AddressNo"];

                //tranform the name fields from the db to "First Last" format

                $address[$index]["First"] = $row["First"];
                $address[$index]["Last"] = $row["Last"];
                $address[$index]["Street"] = $row["Street"];
                $address[$index]["City"] = $row["City"];
                $address[$index]["State"] = $row["State"];
                $address[$index]["Zip"] = $row["Zip"];

                $index++;
                
            }
        }
        return $address;
    }
   
    ?>