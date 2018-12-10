<h1>TEST</h1>
<?php
    //META variables
        $servername = "localhost";
        $username = "schwam_merchUser";
        $password = "9mR*dU?KNK8Q"; 
        $dbname = "schwam_merchandise";
        $err = False;

        $Location = $_POST['Location'];
        $Selling_Date = $_POST['Selling_Date']; 
        $shirtSizes = array("XS", "S", "M", "L", "XL", "XXL");
	$sql = "";
        $con = mysqli_connect($servername,$username,$password,$dbname);
        if (!$con){die('Could not connect: ' . mysqli_error());}

        $link = mysqli_connect($servername, $username, $password,$dbname);
        mysqli_select_db($dbname, $link) or die(mysqli_error());

    //Venue (if not paid then = 0)
        $VenueEarn = $_POST['VenueDinero'];
        if(isZero($VenueEarn)){$VenueEarn = 0;}
        $sql = "INSERT INTO venue (Earn, Location, Date) VALUES ('".$VenueEarn."', '".$Location."', '".$Selling_Date."')";
        
        CheckQuery($sql);
    //Outrun the Sun  
        $OTSEarn = $_POST['OTSEarn'];
        $OTSQuantity = $_POST['OTSQuan'];
        if(!isZero($OTSQuantity)){
            $sql = "INSERT INTO ots (Quantity, Earn, Location, Date) VALUES ('".$OTSQuantity."', '".$OTSEarn."', '".$Location."', '".$Selling_Date."')";
            CheckQuery($sql);
        }
    //Thursday Night Burrito Fight
        $TNBFEarn = $_POST['TNBFEarn'];
        $TNBFQuantity = $_POST['TNBFQuan'];
        if(!isZero(TNBFQuantity)){
            $sql = "INSERT INTO tnbf (Quantity, Earn, Location, Date) VALUES ('".$TNBFQuantity."', '".$TNBFEarn."', '".$Location."', '".$Selling_Date."')";
            CheckQuery($sql);
        }
    //Posters
        $PosterEarn = $_POST['PosterEarn'];
        $PosterQuantity = $_POST['PosterQuan'];
        if(!isZero($PosterQuantity)){
            $sql = "INSERT INTO posters (Quantity, Earn, Location, Date) VALUES ('".$PosterQuantity."', '".$PosterEarn."', '".$Location."', '".$Selling_Date."')";
            CheckQuery($sql);
        }
    //TSHIRTS
        foreach($shirtSizes as $currSize){
            $shirtMALEEarn = $_POST[$currSize.'MEarn'];
            $shirtFEMALEEarn = $_POST[$currSize.'FEarn'];
            $shirtFEMALEQuantity = $_POST[$currSize.'FQuan'];
            $shirtMALEQuantity = $_POST[$currSize.'MQuan'];

            if(!isZero($shirtFEMALEQuantity)){
                $sql .= "INSERT INTO tshirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$shirtFEMALEQuantity."', '".$shirtFEMALEEarn."', '".$Location."', '".$Selling_Date."', '".$currSize."', 'F')";
                CheckQuery($sql);
            }
            if(!isZero($shirtMALEQuantity)){
                $sql .= "INSERT INTO tshirts (Quantity, Earn, Location, Date, Size, MaleOrFemale) VALUES ('".$shirtMALEQuantity."', '".$shirtMALEEarn."', '".$Location."', '".$Selling_Date."', '".$currSize."', 'M')";
                CheckQuery($sql);
            }
        }
        
    //Czech for errors
        if(!$err) {
            echo "All is right! No errors!";
        }
        else{
            echo "oh boy. there were/was ".$err." problem(s)";
        }

    function CheckQuery($sql){
        if (!mysqli_query($sql)){
            die("Oh boy... =/".mysqli_error());
            $err = True;
        } else{
            echo nl2br($sql. " ran successfully!\n\n");
        }
    }
    function isZero($val){
        return $val == 0 || empty($val);
 
       }
    
?>