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
        $response = "<h2>Success!</h2>";
        $totalEarn = 0;

        $conn = new mysqli($host, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
    //Venue
        $venue_payout = $_POST['venue-payout'];
        if(!isZero($venue_payout)){
            $sql .= "INSERT INTO venue (Earn, Location, Date) VALUES ('".$venue_payout."', '".$location."', '".$show_date."');";
            $response .= "<br><p>The payout from <strong><em>" . $location . "</em></strong> on " . $show_date . " was <strong>$".$venue_payout."</strong>.</p>";
            $totalEarn += $venue_payout;
        }
    //Outrun the Sun  
        $ots_earn = $_POST['ots_earn'];
        $ots_quantity = $_POST['ots-quantity'];
        if(!isZero($ots_quantity)){
            $sql .= "INSERT INTO ots (Quantity, Earn, Location, Date) VALUES ('".$ots_quantity."', '".$ots_earn."', '".$location."', '".$show_date."');";
            $response .= "<br><p>You sold " . $ots_quantity . " Outrun the Sun CD(s) for a total of $" . $ots_earn . ".</p>";
            $totalEarn += $ots_earn;
        }
    //Thursday Night Burrito Fight
        $tnbf_earn = $_POST['tnbf-earn'];
        $tnbf_quantity = $_POST['tnbf-quantity'];
        if(!isZero($tnbf_quantity)){
            $sql .= "INSERT INTO tnbf (Quantity, Earn, Location, Date) VALUES ('".$tnbf_quantity."', '".$tnbf_earn."', '".$location."', '".$show_date."');";
            $response .= "<br><p>You sold " . $tnbf_quantity . " Thursday Night Burrito Fight CD(s) for a total of $" . $tnbf_earn . ".</p>";
            $totalEarn += $tnbf_earn;
        }
    //Posters
        $poster_earn = $_POST['poster-earn'];
        $poster_quantity = $_POST['poster-quantity'];
        if(!isZero($poster_quantity)){
            $sql .= "INSERT INTO posters (Quantity, Earn, Location, Date) VALUES ('".$poster_quantity."', '".$poster_earn."', '".$location."', '".$show_date."');";
            $response .= "<br><p>You sold " . $poster_quantity . " Poster(s) for a total of $" . $poster_earn . ".</p>";
            $totalEarn += $poster_earn;
        }
    //Hats
        $hat_earn = $_POST['hat-earn'];
        $hat_quantity = $_POST['hat-quantity'];
        if(!isZero($hat_quantity)){
            $sql .= "INSERT INTO hats (Quantity, Earn, Location, Date) VALUES ('".$hat_quantity."', '".$hat_earn."', '".$location."', '".$show_date."');";
            $response .= "<br><p>You sold " . $hat_quantity . " Hat(s) for a total of $" . $hat_earn . ".</p>";
            $totalEarn += $hat_earn;
        }
    //Beanies
        $beanie_earn = $_POST['beanie-earn'];
        $beanie_quantity = $_POST['beanie-quantity'];
        if(!isZero($beanie_quantity)){
            $sql .= "INSERT INTO beanies (Quantity, Earn, Location, Date) VALUES ('".$beanie_quantity."', '".$beanie_earn."', '".$location."', '".$show_date."');";
            $response .= "<br><p>You sold " . $beanie_quantity . " Beanie(s) for a total of $" . $beanie_earn . ".</p>";
            $totalEarn += $beanie_earn;
        }        
    //UNDYED TSHIRTS
        foreach($shirt_sizes as $currSize){
            $shirt_male_earn = $_POST[$currSize.'M-earn'];
            $shirt_female_earn = $_POST[$currSize.'F-earn'];
            $shirt_female_quantity = $_POST[$currSize.'F-quantity'];
            $shirt_male_quantity = $_POST[$currSize.'M-quantity'];

            if(!isZero($shirt_female_quantity)){
                $sql .= "INSERT INTO tshirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$shirt_female_quantity."', '".$shirt_female_earn."', '".$location."', '".$show_date."', '".$currSize."', 'F');";
                $response .= "<br><p>You sold " . $shirt_female_quantity . " Women's Undyed Shirt(s) for a total of $" . $shirt_female_earn . ".</p>";
                $totalEarn += $shirt_female_earn;
            }
            if(!isZero($shirt_male_quantity)){
                $sql .= "INSERT INTO tshirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$shirt_male_quantity."', '".$shirt_male_earn."', '".$location."', '".$show_date."', '".$currSize."', 'M');";
                $response .= "<br><p>You sold " . $shirt_male_quantity . " Men's Undyed Shirt(s) for a total of $" . $shirt_male_earn . ".</p>";
                $totalEarn += $shirt_male_earn;
            }
        }
    //DYED TSHIRTS
        foreach($shirt_sizes as $currSize){
            $dyed_shirt_male_earn = $_POST['dyed-'.$currSize.'M-earn'];
            $dyed_shirt_female_earn = $_POST['dyed-'.$currSize.'F-earn'];
            $dyed_shirt_female_quantity = $_POST['dyed-'.$currSize.'F-quantity'];
            $dyed_shirt_male_quantity = $_POST['dyed-'.$currSize.'M-quantity'];

            if(!isZero($dyed_shirt_female_quantity)){
                $sql .= "INSERT INTO dyed_shirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$dyed_shirt_female_quantity."', '".$dyed_shirt_female_earn."', '".$location."', '".$show_date."', '".$currSize."', 'F');";
                $response .= "<br><p>You sold " . $dyed_shirt_female_quantity . " Women's Dyed Shirt(s) for a total of $" . $dyed_shirt_female_earn . ".</p>";
                $totalEarn += $dyed_shirt_female_earn;
            }
            if(!isZero($dyed_shirt_male_quantity)){
                $sql .= "INSERT INTO dyed_shirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$dyed_shirt_male_quantity."', '".$dyed_shirt_male_earn."', '".$location."', '".$show_date."', '".$currSize."', 'M');";
                $response .= "<br><p>You sold " . $dyed_shirt_male_quantity . " Men's Dyed Shirt(s) for a total of $" . $dyed_shirt_male_earn . ".</p>";
                $totalEarn += $dyed_shirt_male_earn;
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
        echo $response . "\n Total Amount Earned: $" . $totalEarn;
    } else {
        echo "First query failed..." . mysqli_error($conn);
    }

    $conn->close();

function isZero($val){
    return $val == 0 || empty($val);
}
    
?>