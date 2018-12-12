<?php include 'header.php'; ?>

<header>
	<div id="logo">
		<img src="assets/media/SchwamWhiteShirtDesign.jpg">
	</div>
</header>
    <form action="./form_submit.php" method="POST">
        <div id="show_info_container" class="section">
            <h1> When and Where?</h1>
                <div>
                    <p>
                    <input id="loc-input" class="form_label_head" placeholder="Location" type="text" name="location" autofocus="autofocus"/>
                    <p> 
                    <input id="date-input" class="form_label_head"  type="date" name="show-date" value="<?php echo date("Y-m-d"); ?>" min="2011-02-18"/>
                    <p>
                    <input id="venue-payout" class="form_label_head" type="number" min="0" name="venue-payout" placeholder="Venue Total"/>
                </div>
        </div>
    <hr>
    <!--________________________________-->
    <!--_____________CDS________________-->
    <!--________________________________-->
        <div id="cd_info_container" class="section">
            <h1> CDs!</h1>
            <p>OTS:<br />
            <div class="cd-boxes">
                <input id="ots" type="button" value="-1" onclick="decQuantity(this.id, 'CD')" class="button1">
                <input id="ots-quantity"   class="form_label" type="number" min="0" name="ots-quantity">
                <input id="ots-earn" class="form_label" placeholder="$$$" type="number" min="0" name="ots-earn">
                <input id="ots" type="button" value="+1" onclick="incQuantity(this.id, 'CD')" class="button1">
            </div>
            <p>TNBF:<br/>
            <div class="cd-boxes">       
                <input id="tnbf" type="button" value="-1" onclick="decQuantity(this.id, 'CD')" class="button1">
                <input id="tnbf-quantity"   class="form_label" type="number" min="0" name="tnbf-quantity">
                <input id="tnbf-earn" class="form_label" placeholder="$$$" type="number" min="0" name="tnbf-earn">
                <input id="tnbf" type="button" value="+1" onclick="incQuantity(this.id, 'CD')" class="button1">
            </div>
        </div>
    <hr>
    <!--________________________________-->
    <!--____________POSTERS_____________-->
    <!--________________________________-->
    <div id="poster_info_container" class="section">
            <h1> Posters!</h1>
            <p>
                <input id="poster" type="button" value="-1" onclick="decQuantity(this.id, 'Poster')" class="button1">
                <input id="poster-quantity"   class="form_label" type="number" min="0" name="poster-quantity">
                <input id="poster-earn" class="form_label" placeholder="$$$" type="number" min="0" name="poster-earn">
                <input id="poster" type="button" value="+1" onclick="incQuantity(this.id, 'Poster')" class="button1">
        </div>
    <hr>
    <!--________________________________-->
    <!--____________HATS________________-->
    <!--________________________________-->
    <div id="poster_info_container" class="section">
            <h1> Hats!</h1>
            <p>
                <input id="hat" type="button" value="-1" onclick="decQuantity(this.id, 'Hat')" class="button1">
                <input id="hat-quantity"   class="form_label" type="number" min="0" name="hat-quantity">
                <input id="hat-earn" class="form_label" placeholder="$$$" type="number" min="0" name="hat-earn">
                <input id="hat" type="button" value="+1" onclick="incQuantity(this.id, 'Hat')" class="button1">
        </div>
    <hr>
    <!--________________________________-->
    <!--____________BEANIES_____________-->
    <!--________________________________-->
    <div id="beanie_info_container" class="section">
            <h1> Beanies!</h1>
            <p>
                <input id="beanie" type="button" value="-1" onclick="decQuantity(this.id, 'Beanie')" class="button1">
                <input id="beanie-quantity"   class="form_label" type="number" min="0" name="beanie-quantity">
                <input id="beanie-earn" class="form_label" placeholder="$$$" type="number" min="0" name="beanie-earn">
                <input id="beanie" type="button" value="+1" onclick="incQuantity(this.id, 'Beanie')" class="button1">
        </div>
    <hr>   
    <!--________________________________-->
    <!--___________UNDYED TSHIRTS_______-->
    <!--________________________________-->
        <div id="quantity_container" class="section">
            <h1>UnDyed Shirts</h1>
            <div id="box_container">
                <div class="box_border">
                    <p><h2>X Small</h2>
                        <input id="XSM" type="button" value="-1" onclick="decQuantity(this.id, 'Shirt')" class="button1">
                        <input id="XSM-quantity" class="form_male" type="number" min="0" name="XSM-quantity">
                        <input id="XSM-earn" class="form_male" placeholder="$$$" type ="number" name ="XSM-earn">
                        <input id="XSM" type="button" value="+1" onclick="incQuantity(this.id, 'Shirt')" class="button1">
                    <p>
                        <input id="XSF" type="button" value="-1" onclick="decQuantity(this.id, 'Shirt')" class="button1">
                        <input id="XSF-quantity" class="form_female" type ="number" name="XSF-quantity">
                        <input id="XSF-earn" class="form_female" placeholder="$$$" type ="number" name="XSF-earn">
                        <input id="XSF" type="button" value="+1" onclick="incQuantity(this.id, 'Shirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>Small:</h2>
                        <input id="SM" type="button" value="-1" onclick="decQuantity(this.id, 'Shirt')" class="button1">
                        <input id="SM-quantity" class="form_male" type="number" min="0" name="SM-quantity">
                        <input id="SM-earn" class="form_male" placeholder="$$$" type ="number" name ="SM-earn">
                        <input id="SM" type="button" value="+1" onclick="incQuantity(this.id, 'Shirt')" class="button1">
                    <p>
                        <input id="SF" type="button" value="-1" onclick="decQuantity(this.id, 'Shirt')" class="button1">
                        <input id="SF-quantity" class="form_female" type ="number" name="SF-quantity">
                        <input id="SF-earn" class="form_female" placeholder="$$$" type ="number" name ="SF-earn">
                        <input id="SF" type="button" value="+1" onclick="incQuantity(this.id, 'Shirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>Medium:</h2>
                        <input id="MM" type="button" value="-1" onclick="decQuantity(this.id, 'Shirt')" class="button1">
                        <input id="MM-quantity" class="form_male" type="number" min="0" name="MM-quantity">
                        <input id="MM-earn" class="form_male" placeholder="$$$" type ="number" name ="MM-earn">
                        <input id="MM" type="button" value="+1" onclick="incQuantity(this.id, 'Shirt')" class="button1">
                    <p>
                        <input id="MF" type="button" value="-1" onclick="decQuantity(this.id, 'Shirt')" class="button1">
                        <input id="MF-quantity" class="form_female" type ="number" name="MF-quantity">
                        <input id="MF-earn" class="form_female" placeholder="$$$" type ="number" name ="MF-earn">
                        <input id="MF" type="button" value="+1" onclick="incQuantity(this.id, 'Shirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>Large:</h2>
                        <input id="LM" type="button" value="-1" onclick="decQuantity(this.id, 'Shirt')" class="button1">
                        <input id="LM-quantity" class="form_male" type="number" min="0" name="LM-quantity">
                        <input id="LM-earn" class="form_male" placeholder="$$$" type ="number" name ="LM-earn">
                        <input id="LM" type="button" value="+1" onclick="incQuantity(this.id, 'Shirt')" class="button1">
                    <p>
                        <input id="LF" type="button" value="-1" onclick="decQuantity(this.id, 'Shirt')" class="button1">
                        <input id="LF-quantity" class="form_female" type ="number" name="LF-quantity">
                        <input id="LF-earn" class="form_female" placeholder="$$$" type ="number" name ="LF-earn">
                            <input id="LF" type="button" value="+1" onclick="incQuantity(this.id, 'Shirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>X Large:</h2>
                        <input id="XLM" type="button" value="-1" onclick="decQuantity(this.id, 'Shirt')" class="button1">
                        <input id="XLM-quantity" class="form_male" type="number" min="0" name="XLM-quantity">
                        <input id="XLM-earn" class="form_male" placeholder="$$$" type ="number" name ="XLM-earn">
                        <input id="XLM" type="button" value="+1" onclick="incQuantity(this.id, 'Shirt')" class="button1">
                    <p>
                        <input id="XLF" type="button" value="-1" onclick="decQuantity(this.id, 'Shirt')" class="button1">
                        <input id="XLF-quantity" class="form_female" type ="number" name="XLF-quantity">
                        <input id="XLF-earn" class="form_female" placeholder="$$$" type ="number" name ="XLF-earn">
                        <input id="XLF" type="button" value="+1" onclick="incQuantity(this.id, 'Shirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>2X Large</h2>
                        <input id="XXLM" type="button" value="-1" onclick="decQuantity(this.id, 'Shirt')" class="button1">
                        <input id="XXLM-quantity" class="form_male" type="number" min="0" name="XXLM-quantity">
                        <input id="XXLM-earn" class="form_male" placeholder="$$$" type ="number" name ="XXLM-earn">
                        <input id="XXLM" type="button" value="+1" onclick="incQuantity(this.id, 'Shirt')" class="button1">
                    <p>
                        <input id="XXLF" type="button" value="-1" onclick="decQuantity(this.id, 'Shirt')" class="button1">
                        <input id="XXLF-quantity" class="form_female" type ="number" name="XXLF-quantity">
                        <input id="XXLF-earn" class="form_female" placeholder="$$$" type ="number" name ="XXLF-earn">
                        <input id="XXLF" type="button" value="+1" onclick="incQuantity(this.id, 'Shirt')" class="button1">
                </div>
            </div>
        </div> <!--/section-->
        <hr>
    <!--________________________________-->
    <!--___________DYED TSHIRTS_________-->
    <!--________________________________-->        
        <div id="dyedquantity_container" class="section">
            <h1>Dyed Shirts</h1>
            <div id="dyedbox_container">
                <div class="box_border">
                    <p><h2>X Small</h2>
                        <input id="dyedXSM" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="dyedXSM-quantity" class="form_male" type="number" min="0" name="dyed-XSM-quantity">
                        <input id="dyedXSM-earn" class="form_male" placeholder="$$$" type ="number" name="dyed-XSM-earn">
                        <input id="dyedXSM" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                    <p>
                        <input id="dyedXSF" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="dyedXSF-quantity" class="form_female" type ="number" name="dyed-XSF-quantity">
                        <input id="dyedXSF-earn" class="form_female" placeholder="$$$" type ="number" name="dyed-XSF-earn">
                        <input id="dyedXSF" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>Small:</h2>
                        <input id="dyedSM" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="dyedSM-quantity" class="form_male" type="number" min="0" name="dyed-SM-quantity">
                        <input id="dyedSM-earn" class="form_male" placeholder="$$$" type ="number" name="dyed-SM-earn">
                        <input id="dyedSM" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                    <p>
                        <input id="dyedSF" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="dyedSF-quantity" class="form_female" type ="number" name="dyed-SF-quantity">
                        <input id="dyedSF-earn" class="form_female" placeholder="$$$" type ="number" name="dyed-SF-earn">
                        <input id="dyedSF" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>Medium:</h2>
                        <input id="dyedMM" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="dyedMM-quantity" class="form_male" type="number" min="0" name="dyed-MM-quantity">
                        <input id="dyedMM-earn" class="form_male" placeholder="$$$" type ="number" name="dyed-MM-earn">
                        <input id="dyedMM" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                    <p>
                        <input id="dyedMF" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="dyedMF-quantity" class="form_female" type ="number" name="dyed-MF-quantity">
                        <input id="dyedMF-earn" class="form_female" placeholder="$$$" type ="number" name="dyed-MF-earn">
                        <input id="dyedMF" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>Large:</h2>
                        <input id="dyedLM" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="dyedLM-quantity" class="form_male" type="number" min="0" name="dyed-LM-quantity">
                        <input id="dyedLM-earn" class="form_male" placeholder="$$$" type ="number" name="dyed-LM-earn">
                        <input id="dyedLM" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                    <p>
                        <input id="dyedLF" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="dyedLF-quantity" class="form_female" type ="number" name="dyed-LF-quantity">
                        <input id="dyedLF-earn" class="form_female" placeholder="$$$" type ="number" name="dyed-LF-earn">
                        <input id="dyedLF" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>X Large:</h2>
                        <input id="dyedXLM" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="dyedXLM-quantity" class="form_male" type="number" min="0" name="dyed-XLM-quantity">
                        <input id="dyedXLM-earn" class="form_male" placeholder="$$$" type ="number" name="dyed-XLM-earn">
                        <input id="dyedXLM" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                    <p>
                        <input id="dyedXLF" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="dyedXLF-quantity" class="form_female" type ="number" name="dyed-XLF-quantity">
                        <input id="dyedXLF-earn" class="form_female" placeholder="$$$" type ="number" name="dyed-XLF-earn">
                        <input id="dyedXLF" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>2X Large</h2>
                        <input id="dyedXXLM" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="dyedXXLM-quantity" class="form_male" type="number" min="0" name="dyed-XXLM-quantity">
                        <input id="dyedXXLM-earn" class="form_male" placeholder="$$$" type ="number" name="dyed-XXLM-earn">
                        <input id="dyedXXLM" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                    <p>
                        <input id="dyedXXLF" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="dyedXXLF-quantity" class="form_female" type ="number" name="dyed-XXLF-quantity">
                        <input id="dyedXXLF-earn" class="form_female" placeholder="$$$" type ="number" name="dyed-XXLF-earn">
                        <input id="dyedXXLF" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                </div>
            </div>
        </div> <!--/section-->       
        <div id="submit">
            <input type="submit" value="Submit the Form" class="submit-form-1"/>
        </div> 
    </form>


<?php include 'footer.php'; ?>