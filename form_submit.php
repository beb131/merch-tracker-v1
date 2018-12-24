<?php
    //META variables
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
        
    //Venue
        $venue_payout = $_POST['venue-payout'];
        if(!isZero($venue_payout)){
            $sql .= "INSERT INTO venue (Earn, Location, Date) VALUES ('".$venue_payout."', '".$location."', '".$show_date."');";
            $response .= "<br><li>The payout from <strong><em>" . $location . "</em></strong> on " . $show_date . " was <strong>$".$venue_payout."</strong>.</li>";
            $totalEarn += $venue_payout;
        }
    //Outrun the Sun  
        $ots_earn = $_POST['ots_earn'];
        $ots_quantity = $_POST['ots-quantity'];
        if(!isZero($ots_quantity)){
            $sql .= "INSERT INTO ots (Quantity, Earn, Location, Date) VALUES ('".$ots_quantity."', '".$ots_earn."', '".$location."', '".$show_date."');";
            $response .= "<br><li>You sold " . $ots_quantity . " Outrun the Sun CD(s) for a total of $" . $ots_earn . ".</li>";
            $totalEarn += $ots_earn;
        }
    //Thursday Night Burrito Fight
        $tnbf_earn = $_POST['tnbf-earn'];
        $tnbf_quantity = $_POST['tnbf-quantity'];
        if(!isZero($tnbf_quantity)){
            $sql .= "INSERT INTO tnbf (Quantity, Earn, Location, Date) VALUES ('".$tnbf_quantity."', '".$tnbf_earn."', '".$location."', '".$show_date."');";
            $response .= "<br><li>You sold " . $tnbf_quantity . " Thursday Night Burrito Fight CD(s) for a total of $" . $tnbf_earn . ".</li>";
            $totalEarn += $tnbf_earn;
        }
    //Posters
        $poster_earn = $_POST['poster-earn'];
        $poster_quantity = $_POST['poster-quantity'];
        if(!isZero($poster_quantity)){
            $sql .= "INSERT INTO posters (Quantity, Earn, Location, Date) VALUES ('".$poster_quantity."', '".$poster_earn."', '".$location."', '".$show_date."');";
            $response .= "<br><li>You sold " . $poster_quantity . " Poster(s) for a total of $" . $poster_earn . ".</li>";
            $totalEarn += $poster_earn;
        }
    //Hats
        $hat_earn = $_POST['hat-earn'];
        $hat_quantity = $_POST['hat-quantity'];
        if(!isZero($hat_quantity)){
            $sql .= "INSERT INTO hats (Quantity, Earn, Location, Date) VALUES ('".$hat_quantity."', '".$hat_earn."', '".$location."', '".$show_date."');";
            $response .= "<br><li>You sold " . $hat_quantity . " Hat(s) for a total of $" . $hat_earn . ".</li>";
            $totalEarn += $hat_earn;
        }
    //Beanies
        $beanie_earn = $_POST['beanie-earn'];
        $beanie_quantity = $_POST['beanie-quantity'];
        if(!isZero($beanie_quantity)){
            $sql .= "INSERT INTO beanies (Quantity, Earn, Location, Date) VALUES ('".$beanie_quantity."', '".$beanie_earn."', '".$location."', '".$show_date."');";
            $response .= "<br><li>You sold " . $beanie_quantity . " Beanie(s) for a total of $" . $beanie_earn . ".</li>";
            $totalEarn += $beanie_earn;
        }        
    //UNDYED TSHIRTS
        $totalFemaleUndyedShirtQuan = 0;
        $totalMaleUndyedShirtQuan = 0;
        $totalFemaleUndyedShirtEarn = 0;
        $totalMaleUndyedShirtEarn = 0;

        foreach($shirt_sizes as $currSize){
            $shirt_male_earn = $_POST[$currSize.'M-earn'];
            $shirt_female_earn = $_POST[$currSize.'F-earn'];
            $shirt_female_quantity = $_POST[$currSize.'F-quantity'];
            $shirt_male_quantity = $_POST[$currSize.'M-quantity'];
            
            if(!isZero($shirt_female_quantity)){
                $sql .= "INSERT INTO tshirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$shirt_female_quantity."', '".$shirt_female_earn."', '".$location."', '".$show_date."', '".$currSize."', 'F');";
                $totalFemaleUndyedShirtQuan += $shirt_female_quantity;
                $totalFemaleUndyedShirtEarn += $shirt_female_earn;
            }
            if(!isZero($shirt_male_quantity)){
                $sql .= "INSERT INTO tshirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$shirt_male_quantity."', '".$shirt_male_earn."', '".$location."', '".$show_date."', '".$currSize."', 'M');";
                $totalMaleUndyedShirtQuan += $shirt_male_quantity;
                $totalMaleUndyedShirtEarn += $shirt_male_earn;
            }
        }

        if($totalFemaleUndyedShirtQuan > 0) {
            $response .= "<br><li>You sold " . $totalFemaleUndyedShirtQuan . " Women's Undyed Shirt(s) for a total of $" . $totalFemaleUndyedShirtEarn . ".</li>";
            $totalEarn += $totalFemaleUndyedShirtEarn;
        }
        if($totalMaleUndyedShirtQuan > 0) {
            $response .= "<br><li>You sold " . $totalMaleUndyedShirtQuan . " Men's Undyed Shirt(s) for a total of $" . $totalMaleUndyedShirtEarn . ".</li>";
            $totalEarn += $totalMaleUndyedShirtEarn;
        }

    //DYED TSHIRTS
        $totalFemaleDyedShirtQuan = 0;
        $totalMaleDyedShirtQuan = 0;
        $totalFemaleDyedShirtEarn = 0;
        $totalMaleDyedShirtEarn = 0;

        foreach($shirt_sizes as $currSize){
            $dyed_shirt_male_earn = $_POST['dyed-'.$currSize.'M-earn'];
            $dyed_shirt_female_earn = $_POST['dyed-'.$currSize.'F-earn'];
            $dyed_shirt_female_quantity = $_POST['dyed-'.$currSize.'F-quantity'];
            $dyed_shirt_male_quantity = $_POST['dyed-'.$currSize.'M-quantity'];

            if(!isZero($dyed_shirt_female_quantity)){
                $sql .= "INSERT INTO dyed_shirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$dyed_shirt_female_quantity."', '".$dyed_shirt_female_earn."', '".$location."', '".$show_date."', '".$currSize."', 'F');";
                $totalFemaleDyedShirtQuan += $dyed_shirt_female_quantity;
                $totalFemaleDyedShirtEarn += $dyed_shirt_female_earn;                
            }
            if(!isZero($dyed_shirt_male_quantity)){
                $sql .= "INSERT INTO dyed_shirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$dyed_shirt_male_quantity."', '".$dyed_shirt_male_earn."', '".$location."', '".$show_date."', '".$currSize."', 'M');";
                $totalMaleDyedShirtQuan += $dyed_shirt_male_quantity;
                $totalMaleDyedShirtEarn += $dyed_shirt_male_earn;
            }
        }

        if($totalFemaleDyedShirtQuan) {
            $response .= "<br><li>You sold " . $totalFemaleDyedShirtQuan . " Women's Dyed Shirt(s) for a total of $" . $totalFemaleDyedShirtEarn . ".</li>";
            $totalEarn += $totalFemaleDyedShirtEarn;
        }

        if($totalMaleDyedShirtQuan) {
            $response .= "<br><li>You sold " . $totalMaleDyedShirtQuan . " Men's Dyed Shirt(s) for a total of $" . $totalMaleDyedShirtEarn . ".</li>";
            $totalEarn += $totalMaleDyedShirtEarn;
        }

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