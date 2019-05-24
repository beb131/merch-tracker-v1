<?php include 'partials/header.php'; ?>

<header>
	<div id="logo">
		<img src="public/assets/media/schwamface_300DPI.png">
	</div>
</header>
    <form action="./form_submit.php" method="POST">
        <div id="show_info_container" class="section">
            <h1> When and Where?</h1>
                <div>
                    <input id="loc-input" class="form_label_head" placeholder="Location" type="text" name="location" autofocus="autofocus"/>
                    <input id="date-input" class="form_label_head"  type="date" name="show-date" value="<?php echo date("Y-m-d"); ?>" min="2011-02-18"/>
                    <input id="venue-payout" class="form_label_head" type="number" min="0" name="venue-payout" placeholder="Venue Total"/>
                </div>
        </div>
    <!--________________________________-->
    <!--_____________CDS________________-->
    <!--________________________________-->
        <div id="cd_info_container" class="section">
            <h1> CDs!</h1>
            <p>OTS:<br />
            <div class="cd-boxes">
                <button id="ots" type="button" onclick="decQuantity(this.id, 'CD')" class="button1">-1</button>
                <input id="ots-quantity"   class="form_label" type="number" min="0" name="ots-quantity">
                <input id="ots-earn" class="form_label" placeholder="$$$" type="number" min="0" name="ots-earn">
                <button id="ots" type="button" onclick="incQuantity(this.id, 'CD')" class="button1">+1</button>
            </div>
            <p>TNBF:<br/>
            <div class="cd-boxes">       
                <button id="tnbf" type="button" onclick="decQuantity(this.id, 'CD')" class="button1">-1</button>
                <input id="tnbf-quantity"   class="form_label" type="number" min="0" name="tnbf-quantity">
                <input id="tnbf-earn" class="form_label" placeholder="$$$" type="number" min="0" name="tnbf-earn">
                <button id="tnbf" type="button" onclick="incQuantity(this.id, 'CD')" class="button1">+1</button>
            </div>
        </div>
    <!--________________________________-->
    <!--____________POSTERS_____________-->
    <!--________________________________-->
    <div id="poster_info_container" class="section">
            <h1> Posters!</h1>
            <p>
                <button id="poster" type="button" onclick="decQuantity(this.id, 'Poster')" class="button1">-1</button>
                <input id="poster-quantity"   class="form_label" type="number" min="0" name="poster-quantity">
                <input id="poster-earn" class="form_label" placeholder="$$$" type="number" min="0" name="poster-earn">
                <button id="poster" type="button" onclick="incQuantity(this.id, 'Poster')" class="button1">+1</button>
        </div>
    <!--________________________________-->
    <!--____________HATS________________-->
    <!--________________________________-->
    <div id="hat_info_container" class="section">
            <h1> Hats!</h1>
            <p>
                <button id="hat" type="button" onclick="decQuantity(this.id, 'Hat')" class="button1">-1</button>
                <input id="hat-quantity"   class="form_label" type="number" min="0" name="hat-quantity">
                <input id="hat-earn" class="form_label" placeholder="$$$" type="number" min="0" name="hat-earn">
                <button id="hat" type="button" onclick="incQuantity(this.id, 'Hat')" class="button1">+1</button>
        </div>
    <!--________________________________-->
    <!--____________BEANIES_____________-->
    <!--________________________________-->
    <div id="beanie_info_container" class="section">
            <h1> Beanies!</h1>
            <p>
                <button id="beanie" type="button" onclick="decQuantity(this.id, 'Beanie')" class="button1">-1</button>
                <input id="beanie-quantity"   class="form_label" type="number" min="0" name="beanie-quantity">
                <input id="beanie-earn" class="form_label" placeholder="$$$" type="number" min="0" name="beanie-earn">
                <button id="beanie" type="button" onclick="incQuantity(this.id, 'Beanie')" class="button1">+1</button>
        </div>
    <!--________________________________-->
    <!--___________Black TSHIRTS_______-->
    <!--________________________________-->
        <div id="tshirt_container" class="section">
            <h1>Black Shirts</h1>
            <div id="box_container">
                <div class="box_border">
                    <!--________________-->
                    <!--____NEW INPUT____-->
                    <!--________________--
                    Size - Dropdown
                    Quan - Number
                    Earn - Number
                    Male or female - Radio Button-->

                    <p><h2>X Small</h2>
                        <button id="XSM" type="button" onclick="decQuantity(this.id, 'Shirt')" class="button1">-1</button>
                        <input id="XSM-quantity" class="form_male" type="number" min="0" name="XSM-quantity">
                        <input id="XSM-earn" class="form_male" placeholder="$$$" type ="number" min="0" name ="XSM-earn">
                        <button id="XSM" type="button" onclick="incQuantity(this.id, 'Shirt')" class="button1">+1</button>
                    <p>
                        <button id="XSF" type="button" onclick="decQuantity(this.id, 'Shirt')" class="button1">-1</button>
                        <input id="XSF-quantity" class="form_female" type ="number" min="0" name="XSF-quantity">
                        <input id="XSF-earn" class="form_female" placeholder="$$$" type ="number" min="0" name="XSF-earn">
                        <button id="XSF" type="button" onclick="incQuantity(this.id, 'Shirt')" class="button1">+1</button>
                </div>
                <div class="box_border">
                    <p><h2>Small:</h2>
                        <button id="SM" type="button" onclick="decQuantity(this.id, 'Shirt')" class="button1">-1</button>
                        <input id="SM-quantity" class="form_male" type="number" min="0" name="SM-quantity">
                        <input id="SM-earn" class="form_male" placeholder="$$$" type ="number" min="0" name ="SM-earn">
                        <button id="SM" type="button" onclick="incQuantity(this.id, 'Shirt')" class="button1">+1</button>
                    <p>
                        <button id="SF" type="button" onclick="decQuantity(this.id, 'Shirt')" class="button1">-1</button>
                        <input id="SF-quantity" class="form_female" type ="number" min="0" name="SF-quantity">
                        <input id="SF-earn" class="form_female" placeholder="$$$" type ="number" min="0" name ="SF-earn">
                        <button id="SF" type="button" onclick="incQuantity(this.id, 'Shirt')" class="button1">+1</button>
                </div>
                <div class="box_border">
                    <p><h2>Medium:</h2>
                        <button id="MM" type="button" onclick="decQuantity(this.id, 'Shirt')" class="button1">-1</button>
                        <input id="MM-quantity" class="form_male" type="number" min="0" name="MM-quantity">
                        <input id="MM-earn" class="form_male" placeholder="$$$" type ="number" min="0" name ="MM-earn">
                        <button id="MM" type="button" onclick="incQuantity(this.id, 'Shirt')" class="button1">+1</button>
                    <p>
                        <button id="MF" type="button" onclick="decQuantity(this.id, 'Shirt')" class="button1">-1</button>
                        <input id="MF-quantity" class="form_female" type ="number" min="0" name="MF-quantity">
                        <input id="MF-earn" class="form_female" placeholder="$$$" type ="number" min="0" name ="MF-earn">
                        <button id="MF" type="button" onclick="incQuantity(this.id, 'Shirt')" class="button1">+1</button>
                </div>
                <div class="box_border">
                    <p><h2>Large:</h2>
                        <button id="LM" type="button" onclick="decQuantity(this.id, 'Shirt')" class="button1">-1</button>
                        <input id="LM-quantity" class="form_male" type="number" min="0" name="LM-quantity">
                        <input id="LM-earn" class="form_male" placeholder="$$$" type ="number" min="0" name ="LM-earn">
                        <button id="LM" type="button" onclick="incQuantity(this.id, 'Shirt')" class="button1">+1</button>
                    <p>
                        <button id="LF" type="button" onclick="decQuantity(this.id, 'Shirt')" class="button1">-1</button>
                        <input id="LF-quantity" class="form_female" type ="number" min="0" name="LF-quantity">
                        <input id="LF-earn" class="form_female" placeholder="$$$" type ="number" min="0" name ="LF-earn">
                            <button id="LF" type="button" onclick="incQuantity(this.id, 'Shirt')" class="button1">+1</button>
                </div>
                <div class="box_border">
                    <p><h2>X Large:</h2>
                        <button id="XLM" type="button" onclick="decQuantity(this.id, 'Shirt')" class="button1">-1</button>
                        <input id="XLM-quantity" class="form_male" type="number" min="0" name="XLM-quantity">
                        <input id="XLM-earn" class="form_male" placeholder="$$$" type ="number" min="0" name ="XLM-earn">
                        <button id="XLM" type="button" onclick="incQuantity(this.id, 'Shirt')" class="button1">+1</button>
                    <p>
                        <button id="XLF" type="button" onclick="decQuantity(this.id, 'Shirt')" class="button1">-1</button>
                        <input id="XLF-quantity" class="form_female" type ="number" min="0" name="XLF-quantity">
                        <input id="XLF-earn" class="form_female" placeholder="$$$" type ="number" min="0" name ="XLF-earn">
                        <button id="XLF" type="button" onclick="incQuantity(this.id, 'Shirt')" class="button1">+1</button>
                </div>
                <div class="box_border">
                    <p><h2>2X Large</h2>
                        <button id="XXLM" type="button" onclick="decQuantity(this.id, 'Shirt')" class="button1">-1</button>
                        <input id="XXLM-quantity" class="form_male" type="number" min="0" name="XXLM-quantity">
                        <input id="XXLM-earn" class="form_male" placeholder="$$$" type ="number" min="0" name ="XXLM-earn">
                        <button id="XXLM" type="button" onclick="incQuantity(this.id, 'Shirt')" class="button1">+1</button>
                    <p>
                        <button id="XXLF" type="button" onclick="decQuantity(this.id, 'Shirt')" class="button1">-1</button>
                        <input id="XXLF-quantity" class="form_female" type ="number" min="0" name="XXLF-quantity">
                        <input id="XXLF-earn" class="form_female" placeholder="$$$" type ="number" min="0" name ="XXLF-earn">
                        <button id="XXLF" type="button" onclick="incQuantity(this.id, 'Shirt')" class="button1">+1</button>
                </div>
            </div>
        </div> <!--/section-->
    <!--________________________________-->
    <!--___________DYED TSHIRTS_________-->
    <!--________________________________-->        
        <div id="dyed_tshirt_container" class="section">
            <h1>Dyed Shirts</h1>
            <div id="box_container">
                <div class="box_border">
                    <p><h2>X Small</h2>
                        <button id="dyedXSM" type="button" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">-1</button>
                        <input id="dyedXSM-quantity" class="form_male" type="number" min="0" name="dyed-XSM-quantity">
                        <input id="dyedXSM-earn" class="form_male" placeholder="$$$" type ="number" min="0" name="dyed-XSM-earn">
                        <button id="dyedXSM" type="button" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">+1</button>
                    <p>
                        <button id="dyedXSF" type="button" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">-1</button>
                        <input id="dyedXSF-quantity" class="form_female" type ="number" min="0" name="dyed-XSF-quantity">
                        <input id="dyedXSF-earn" class="form_female" placeholder="$$$" type ="number" min="0" name="dyed-XSF-earn">
                        <button id="dyedXSF" type="button" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">+1</button>
                </div>
                <div class="box_border">
                    <p><h2>Small:</h2>
                        <button id="dyedSM" type="button" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">-1</button>
                        <input id="dyedSM-quantity" class="form_male" type="number" min="0" name="dyed-SM-quantity">
                        <input id="dyedSM-earn" class="form_male" placeholder="$$$" type ="number" min="0" name="dyed-SM-earn">
                        <button id="dyedSM" type="button" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">+1</button>
                    <p>
                        <button id="dyedSF" type="button" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">-1</button>
                        <input id="dyedSF-quantity" class="form_female" type ="number" min="0" name="dyed-SF-quantity">
                        <input id="dyedSF-earn" class="form_female" placeholder="$$$" type ="number" min="0" name="dyed-SF-earn">
                        <button id="dyedSF" type="button" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">+1</button>
                </div>
                <div class="box_border">
                    <p><h2>Medium:</h2>
                        <button id="dyedMM" type="button" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">-1</button>
                        <input id="dyedMM-quantity" class="form_male" type="number" min="0" name="dyed-MM-quantity">
                        <input id="dyedMM-earn" class="form_male" placeholder="$$$" type ="number" min="0" name="dyed-MM-earn">
                        <button id="dyedMM" type="button" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">+1</button>
                    <p>
                        <button id="dyedMF" type="button" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">-1</button>
                        <input id="dyedMF-quantity" class="form_female" type ="number" min="0" name="dyed-MF-quantity">
                        <input id="dyedMF-earn" class="form_female" placeholder="$$$" type ="number" min="0" name="dyed-MF-earn">
                        <button id="dyedMF" type="button" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">+1</button>
                </div>
                <div class="box_border">
                    <p><h2>Large:</h2>
                        <button id="dyedLM" type="button" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">-1</button>
                        <input id="dyedLM-quantity" class="form_male" type="number" min="0" name="dyed-LM-quantity">
                        <input id="dyedLM-earn" class="form_male" placeholder="$$$" type ="number" min="0" name="dyed-LM-earn">
                        <button id="dyedLM" type="button" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">+1</button>
                    <p>
                        <button id="dyedLF" type="button" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">-1</button>
                        <input id="dyedLF-quantity" class="form_female" type ="number" min="0" name="dyed-LF-quantity">
                        <input id="dyedLF-earn" class="form_female" placeholder="$$$" type ="number" min="0" name="dyed-LF-earn">
                        <button id="dyedLF" type="button" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">+1</button>
                </div>
                <div class="box_border">
                    <p><h2>X Large:</h2>
                        <button id="dyedXLM" type="button" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">-1</button>
                        <input id="dyedXLM-quantity" class="form_male" type="number" min="0" name="dyed-XLM-quantity">
                        <input id="dyedXLM-earn" class="form_male" placeholder="$$$" type ="number" min="0" name="dyed-XLM-earn">
                        <button id="dyedXLM" type="button" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">+1</button>
                    <p>
                        <button id="dyedXLF" type="button" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">-1</button>
                        <input id="dyedXLF-quantity" class="form_female" type ="number" min="0" name="dyed-XLF-quantity">
                        <input id="dyedXLF-earn" class="form_female" placeholder="$$$" type ="number" min="0" name="dyed-XLF-earn">
                        <button id="dyedXLF" type="button" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">+1</button>
                </div>
                <div class="box_border">
                    <p><h2>2X Large</h2>
                        <button id="dyedXXLM" type="button" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">-1</button>
                        <input id="dyedXXLM-quantity" class="form_male" type="number" min="0" name="dyed-XXLM-quantity">
                        <input id="dyedXXLM-earn" class="form_male" placeholder="$$$" type ="number" min="0" name="dyed-XXLM-earn">
                        <button id="dyedXXLM" type="button" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">+1</button>
                    <p>
                        <button id="dyedXXLF" type="button" onclick="decQuantity(this.id, 'DyedShirt')" class="button1">-1</button>
                        <input id="dyedXXLF-quantity" class="form_female" type ="number" min="0" name="dyed-XXLF-quantity">
                        <input id="dyedXXLF-earn" class="form_female" placeholder="$$$" type ="number" min="0" name="dyed-XXLF-earn">
                        <button id="dyedXXLF" type="button" onclick="incQuantity(this.id, 'DyedShirt')" class="button1">+1</button>
                </div>
            </div>
        </div> <!--/section-->       
        <div id="submit">
            <input type="submit" value="Submit" class="submit-form-1"/>
        </div> 
    </form>


<?php include 'partials/footer.php'; ?>