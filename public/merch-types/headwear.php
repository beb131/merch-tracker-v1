<?php
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
?>