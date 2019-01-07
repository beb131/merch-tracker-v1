<?php
    //Black TSHIRTS
    $totalFemaleBlackShirtQuan = 0;
    $totalMaleBlackShirtQuan = 0;
    $totalFemaleBlackShirtEarn = 0;
    $totalMaleBlackShirtEarn = 0;

    foreach($shirt_sizes as $currSize){
        $shirt_male_earn = $_POST[$currSize.'M-earn'];
        $shirt_female_earn = $_POST[$currSize.'F-earn'];
        $shirt_female_quantity = $_POST[$currSize.'F-quantity'];
        $shirt_male_quantity = $_POST[$currSize.'M-quantity'];
        
        if(!isZero($shirt_female_quantity)){
            $sql .= "INSERT INTO tshirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$shirt_female_quantity."', '".$shirt_female_earn."', '".$location."', '".$show_date."', '".$currSize."', 'F');";
            $totalFemaleBlackShirtQuan += $shirt_female_quantity;
            $totalFemaleBlackShirtEarn += $shirt_female_earn;
        }
        if(!isZero($shirt_male_quantity)){
            $sql .= "INSERT INTO tshirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$shirt_male_quantity."', '".$shirt_male_earn."', '".$location."', '".$show_date."', '".$currSize."', 'M');";
            $totalMaleBlackShirtQuan += $shirt_male_quantity;
            $totalMaleBlackShirtEarn += $shirt_male_earn;
        }
    }

    if($totalFemaleBlackShirtQuan > 0) {
        $response .= "<br><li>You sold " . $totalFemaleBlackShirtQuan . " Women's Black Shirt(s) for a total of $" . $totalFemaleBlackShirtEarn . ".</li>";
        $totalEarn += $totalFemaleBlackShirtEarn;
    }
    if($totalMaleBlackShirtQuan > 0) {
        $response .= "<br><li>You sold " . $totalMaleBlackShirtQuan . " Men's Black Shirt(s) for a total of $" . $totalMaleBlackShirtEarn . ".</li>";
        $totalEarn += $totalMaleBlackShirtEarn;
    }
?>