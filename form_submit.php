<?php
    //META variables
        $host = "localhost";
        $username = "schwam_merchUser";
        $password = "9mR*dU?KNK8Q";
        $dbname = "schwam_merchandise";

        $location = $_POST['location'];
        $show_date = $_POST['show-date']; 
        $shirt_sizes = array("XS", "S", "M", "L", "XL", "XXL");
	    $sql = "";
        $conn = new mysqli($host, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
    //Venue
        $venue_payout = $_POST['venue-payout'];
        if(!isZero($venue_payout)){
            $sql .= "INSERT INTO venue (Earn, Location, Date) VALUES ('".$venue_payout."', '".$location."', '".$show_date."');";
        }
    //Outrun the Sun  
        $ots_earn = $_POST['ots_earn'];
        $ots_quantity = $_POST['ots-quantity'];
        if(!isZero($ots_quantity)){
            $sql .= "INSERT INTO ots (Quantity, Earn, Location, Date) VALUES ('".$ots_quantity."', '".$ots_earn."', '".$location."', '".$show_date."');";
        }
    //Thursday Night Burrito Fight
        $tnbf_earn = $_POST['tnbf-earn'];
        $tnbf_quantity = $_POST['tnbf-quantity'];
        if(!isZero($tnbf_quantity)){
            $sql .= "INSERT INTO tnbf (Quantity, Earn, Location, Date) VALUES ('".$tnbf_quantity."', '".$tnbf_earn."', '".$location."', '".$show_date."');";
        }
    //Posters
        $poster_earn = $_POST['poster-earn'];
        $poster_quantity = $_POST['poster-quantity'];
        if(!isZero($poster_quantity)){
            $sql .= "INSERT INTO posters (Quantity, Earn, Location, Date) VALUES ('".$poster_quantity."', '".$poster_earn."', '".$location."', '".$show_date."');";
        }
    //TSHIRTS
        foreach($shirt_sizes as $currSize){
            $shirt_male_earn = $_POST[$currSize.'M-earn'];
            $shirt_female_earn = $_POST[$currSize.'F-earn'];
            $shirt_female_quantity = $_POST[$currSize.'F-quantity'];
            $shirt_male_quantity = $_POST[$currSize.'M-quantity'];

            if(!isZero($shirt_female_quantity)){
                $sql .= "INSERT INTO tshirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$shirt_female_quantity."', '".$shirt_female_earn."', '".$location."', '".$show_date."', '".$currSize."', 'F');";
            }
            if(!isZero($shirt_male_quantity)){
                $sql .= "INSERT INTO tshirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$shirt_male_quantity."', '".$shirt_male_earn."', '".$location."', '".$show_date."', '".$currSize."', 'M');";
            }
        }

        $result = mysqli_multi_query($conn, $sql);

        if ($result) {
            do {
                // grab the result of the next query
                if (($result = mysqli_store_result($conn)) === false && mysqli_error($conn) != '') {
                    echo "Query failed: " . mysqli_error($conn);
                }
            } while (mysqli_more_results($conn) && mysqli_next_result($conn)); // while there are more results
        } else {
            echo "First query failed..." . mysqli_error($conn);
        }

        $conn->close();

function isZero($val){
    return $val == 0 || empty($val);
}
    
?>