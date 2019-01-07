<?php
    //Posters
    $poster_earn = $_POST['poster-earn'];
    $poster_quantity = $_POST['poster-quantity'];
    if(!isZero($poster_quantity)){
        $sql .= "INSERT INTO posters (Quantity, Earn, Location, Date) VALUES ('".$poster_quantity."', '".$poster_earn."', '".$location."', '".$show_date."');";
        $response .= "<br><li>You sold " . $poster_quantity . " Poster(s) for a total of $" . $poster_earn . ".</li>";
        $totalEarn += $poster_earn;
    }
?>