<?php 
    //Venue
    $venue_payout = $_POST['venue-payout'];
    if(!isZero($venue_payout)){
        $sql .= "INSERT INTO venue (Earn, Location, Date) VALUES ('".$venue_payout."', '".$location."', '".$show_date."');";
        $response .= "<br><li>The payout from <strong><em>" . $location . "</em></strong> on " . $show_date . " was <strong>$".$venue_payout."</strong>.</li>";
        $totalEarn += $venue_payout;
    }
?>