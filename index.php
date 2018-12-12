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
                    <input id="venue-payout" class="form_label_head" type="number" name="venue-payout" placeholder="Venue Total"/>
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
                <input id="ots-quantity"   class="form_label" type="number" name="ots-quantity">
                <input id="ots-earn" class="form_label" placeholder="$$$" type="number" name="ots-earn">
                <input id="ots" type="button" value="+1" onclick="incQuantity(this.id, 'CD')" class="button1">
            </div>
            <p>TNBF:<br/>
            <div class="cd-boxes">       
                <input id="tnbf" type="button" value="-1" onclick="decQuantity(this.id, 'CD')" class="button1">
                <input id="tnbf-quantity"   class="form_label" type="number" name="tnbf-quantity">
                <input id="tnbf-earn" class="form_label" placeholder="$$$" type="number" name="tnbf-earn">
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
                <input id="poster-quantity"   class="form_label" type="number" name="poster-quantity">
                <input id="poster-earn" class="form_label" placeholder="$$$" type="number" name="poster-earn">
                <input id="poster" type="button" value="+1" onclick="incQuantity(this.id, 'Poster')" class="button1">
        </div>
    <hr>

    <!--________________________________-->
    <!--___________TSHIRTS______________-->
    <!--________________________________-->
        <div id="quantity_container" class="section">
            <h1>Number/Price</h1>
            <div id="box_container">
                <div class="box_border">
                    <p><h2>X Small</h2>
                        <input id="XSM" type="button" value="-1" onclick="decQuantity(this.id, 'Shirt')" class="button1">
                        <input id="XSM-quantity" class="form_male" type="number" name="XSM-quantity">
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
                        <input id="SM-quantity" class="form_male" type="number" name="SM-quantity">
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
                        <input id="MM-quantity" class="form_male" type="number" name="MM-quantity">
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
                        <input id="LM-quantity" class="form_male" type="number" name="LM-quantity">
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
                        <input id="XLM-quantity" class="form_male" type="number" name="XLM-quantity">
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
                        <input id="XXLM-quantity" class="form_male" type="number" name="XXLM-quantity">
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
        <div id="quantity_container" class="section">
            <h1>Number/Price</h1>
            <div id="box_container">
                <div class="box_border">
                    <p><h2>X Small</h2>
                        <input id="XSM" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="XSM-quantity" class="form_male" type="number" name="XSM-quantity">
                        <input id="XSM-earn" class="form_male" placeholder="$$$" type ="number" name ="XSM-earn">
                        <input id="XSM" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                    <p>
                        <input id="XSF" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="XSF-quantity" class="form_female" type ="number" name="XSF-quantity">
                        <input id="XSF-earn" class="form_female" placeholder="$$$" type ="number" name="XSF-earn">
                        <input id="XSF" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>Small:</h2>
                        <input id="SM" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="SM-quantity" class="form_male" type="number" name="SM-quantity">
                        <input id="SM-earn" class="form_male" placeholder="$$$" type ="number" name ="SM-earn">
                        <input id="SM" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                    <p>
                        <input id="SF" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="SF-quantity" class="form_female" type ="number" name="SF-quantity">
                        <input id="SF-earn" class="form_female" placeholder="$$$" type ="number" name ="SF-earn">
                        <input id="SF" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>Medium:</h2>
                        <input id="MM" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="MM-quantity" class="form_male" type="number" name="MM-quantity">
                        <input id="MM-earn" class="form_male" placeholder="$$$" type ="number" name ="MM-earn">
                        <input id="MM" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                    <p>
                        <input id="MF" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="MF-quantity" class="form_female" type ="number" name="MF-quantity">
                        <input id="MF-earn" class="form_female" placeholder="$$$" type ="number" name ="MF-earn">
                        <input id="MF" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>Large:</h2>
                        <input id="LM" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="LM-quantity" class="form_male" type="number" name="LM-quantity">
                        <input id="LM-earn" class="form_male" placeholder="$$$" type ="number" name ="LM-earn">
                        <input id="LM" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                    <p>
                        <input id="LF" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="LF-quantity" class="form_female" type ="number" name="LF-quantity">
                        <input id="LF-earn" class="form_female" placeholder="$$$" type ="number" name ="LF-earn">
                            <input id="LF" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>X Large:</h2>
                        <input id="XLM" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="XLM-quantity" class="form_male" type="number" name="XLM-quantity">
                        <input id="XLM-earn" class="form_male" placeholder="$$$" type ="number" name ="XLM-earn">
                        <input id="XLM" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                    <p>
                        <input id="XLF" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="XLF-quantity" class="form_female" type ="number" name="XLF-quantity">
                        <input id="XLF-earn" class="form_female" placeholder="$$$" type ="number" name ="XLF-earn">
                        <input id="XLF" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>2X Large</h2>
                        <input id="XXLM" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="XXLM-quantity" class="form_male" type="number" name="XXLM-quantity">
                        <input id="XXLM-earn" class="form_male" placeholder="$$$" type ="number" name ="XXLM-earn">
                        <input id="XXLM" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                    <p>
                        <input id="XXLF" type="button" value="-1" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">
                        <input id="XXLF-quantity" class="form_female" type ="number" name="XXLF-quantity">
                        <input id="XXLF-earn" class="form_female" placeholder="$$$" type ="number" name ="XXLF-earn">
                        <input id="XXLF" type="button" value="+1" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">
                </div>
            </div>
        </div> <!--/section-->        
        <div id="submit">
            <input type="submit" value="Submit the Form" class="submit-form-1"/>
        </div> 
    </form>


<?php include 'footer.php'; ?>