<?php
    //DB Connection
    $host = "localhost";
    $username = "schwam_merchUser";
    $password = "9mR*dU?KNK8Q";
    $dbname = "schwam_merchandise";

    $location = filter_var($_POST['location'], FILTER_SANITIZE_STRING);
    $show_date = $_POST['show-date']; 
    $shirt_sizes = array("XS", "S", "M", "L", "XL", "XXL");
    $sql = "";
    $response = "<h2>Success!</h2><ul>";
    $totalEarn = 0; 
    $shirtsSold = false;

    $conn = new mysqli($host, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
        
    include 'merch-types/venue-payout.php';

    include 'merch-types/cds.php';

    include 'merch-types/posters.php';

    include 'merch-types/headwear.php';

    include 'merch-types/black-shirts.php';

    include 'merch-types/dyed-shirts.php';

    $result = mysqli_multi_query($conn, $sql);

    if ($result) {
        do {
            // grab the result of the next query
            if (($result = mysqli_store_result($conn)) === false && mysqli_error($conn) != '') {
                echo "Query failed: " . mysqli_error($conn);
            }
        } while (mysqli_more_results($conn) && mysqli_next_result($conn)); // while there are more results
        echo $response . "</ul><br>Total Amount Earned: $" . $totalEarn;
    } else {
        echo "First query failed..." . mysqli_error($conn);
    }

    $conn->close();

function isZero($val){
    return $val == 0 || empty($val);
}
    
?>