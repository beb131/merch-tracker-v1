<?php
$shirt_sizes = array("XS", "S", "M", "L", "XL", "XXL");

    // TSHIRTS
    $totalShirtQuan = 0;
    $totalShirtEarn = 0;

    foreach($shirt_sizes as $currSize){
        $shirt_earn = $_POST[$currSize.'-earn'];
        $shirt_quantity = $_POST[$currSize.'-quantity'];

        if(!isZero($shirt_quantity)){
            $sql .= "INSERT INTO tshirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$shirt_quantity."', '".$shirt_earn."', '".$location."', '".$show_date."', '".$currSize."', 'M');";
            $totalShirtQuan += $shirt_quantity;
            $totalShirtEarn += $shirt_earn;
        }
    }

    if($totalShirtQuan) {
        $response .= "<br><li>You sold " . $totalShirtQuan . " *****Men's*****  Shirt(s) for a total of $" . $totalShirtEarn . ".</li>";
        $totalEarn += $totalShirtEarn;
    }
?>