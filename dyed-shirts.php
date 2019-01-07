<?php
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
            $sql .= "INSERT INTO dyed_tshirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$dyed_shirt_female_quantity."', '".$dyed_shirt_female_earn."', '".$location."', '".$show_date."', '".$currSize."', 'F');";
            $totalFemaleDyedShirtQuan += $dyed_shirt_female_quantity;
            $totalFemaleDyedShirtEarn += $dyed_shirt_female_earn;                
        }
        if(!isZero($dyed_shirt_male_quantity)){
            $sql .= "INSERT INTO dyed_tshirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$dyed_shirt_male_quantity."', '".$dyed_shirt_male_earn."', '".$location."', '".$show_date."', '".$currSize."', 'M');";
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
?>