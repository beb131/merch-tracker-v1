<?php
    //Outrun the Sun  
        $ots_earn = $_POST['ots-earn'];
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
?>