<?php


// Ascending Order
if(isset($_POST['ASC']))
{
    $asc_query = "SELECT * FROM items ORDER BY price ASC";
    $result = executeQuery($asc_query);
}

// Descending Order
elseif (isset ($_POST['DESC'])) 
    {
          $desc_query = "SELECT * FROM items ORDER BY price DESC";
          $result = executeQuery($desc_query);
    }
    
    // Default Order
 else {
        $default_query = "SELECT * FROM items";
        $result = executeQuery($default_query);
}


function executeQuery($query)
{
    $conn = mysqli_connect("localhost", "root", "", "webshop");
    $result = mysqli_query($conn, $query);
    return $result;
}

?>