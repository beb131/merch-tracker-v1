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
                    <input id="LocBox" class="form_label_head" placeholder="Location" type="text" name="Location" autofocus="autofocus"/>
                    <p> 
                    <input id="DateBox" class="form_label_head"  type="date" name="Selling_Date" value="<?php echo date("Y-m-d"); ?>" min="1970-01-01"/>
                    <p>
                    <input id="VenueDinero" class="form_label_head" type="number" name="VenueDinero" placeholder="Venue Total"/>
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
                <input id="OTS" type="button" value="-1" onclick="ADD(this.id, '-CD')" class="button1">
                <input id="OTSQuan"   class="form_label" type="number" name="OTSQuan">
                <input id="OTSEarn" class="form_label" placeholder="$$$" type="number" name="OTSEarn">
                <input id="OTS" type="button" value="+1" onclick="ADD(this.id, 'CD')" class="button1">
            </div>
            <p>TNBF:<br/>
            <div class="cd-boxes">       
                <input id="TNBF" type="button" value="-1" onclick="ADD(this.id, '-CD')" class="button1">
                <input id="TNBFQuan"   class="form_label" type="number" name="TNBFQuan">
                <input id="TNBFEarn" class="form_label" placeholder="$$$" type="number" name="TNBFEarn">
                <input id="TNBF" type="button" value="+1" onclick="ADD(this.id, 'CD')" class="button1">
            </div>
        </div>
    <hr>
    <!--________________________________-->
    <!--____________POSTERS_____________-->
    <!--________________________________-->
        <div id="poster_info_container" class="section">
            <h1> Posters!</h1>
            <p>
                <input id="Poster" type="button" value="-1" onclick="ADD(this.id, '-Poster')" class="button1">
                <input id="PosterQuan"   class="form_label" type="number" name="PosterQuan">
                <input id="PosterEarn" class="form_label" placeholder="$$$" type="number" name="PosterEarn">
                <input id="Poster" type="button" value="+1" onclick="ADD(this.id, 'Poster')" class="button1">
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
                        <input id="XSM" type="button" value="-1" onclick="ADD(this.id, '-Shirt')" class="button1">
                        <input id="XSMQuan" class="form_male" type="number" name="XSMQuan">
                        <input id="XSMEarn" class="form_male" placeholder="$$$" type ="number" name ="XSMEarn">
                        <input id="XSM" type="button" value="+1" onclick="ADD(this.id, 'Shirt')" class="button1">
                    <p>
                        <input id="XSF" type="button" value="-1" onclick="ADD(this.id, '-Shirt')" class="button1">
                        <input id="XSFQuan" class="form_female" type ="number" name="XSFQuan">
                        <input id="XSFEarn" class="form_female" placeholder="$$$" type ="number" name="XSFEarn">
                        <input id="XSF" type="button" value="+1" onclick="ADD(this.id, 'Shirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>Small:</h2>
                        <input id="SM" type="button" value="-1" onclick="ADD(this.id, '-Shirt')" class="button1">
                        <input id="SMQuan" class="form_male" type="number" name="SMQuan">
                        <input id="SMEarn" class="form_male" placeholder="$$$" type ="number" name ="SMEarn">
                        <input id="SM" type="button" value="+1" onclick="ADD(this.id, 'Shirt')" class="button1">
                    <p>
                        <input id="SF" type="button" value="-1" onclick="ADD(this.id, '-Shirt')" class="button1">
                        <input id="SFQuan" class="form_female" type ="number" name="SFQuan">
                        <input id="SFEarn" class="form_female" placeholder="$$$" type ="number" name ="SFEarn">
                        <input id="SF" type="button" value="+1" onclick="ADD(this.id, 'Shirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>Medium:</h2>
                        <input id="MM" type="button" value="-1" onclick="ADD(this.id, '-Shirt')" class="button1">
                        <input id="MMQuan" class="form_male" type="number" name="MMQuan">
                        <input id="MMEarn" class="form_male" placeholder="$$$" type ="number" name ="MMEarn">
                        <input id="MM" type="button" value="+1" onclick="ADD(this.id, 'Shirt')" class="button1">
                    <p>
                        <input id="MF" type="button" value="-1" onclick="ADD(this.id, '-Shirt')" class="button1">
                        <input id="MFQuan" class="form_female" type ="number" name="MFQuan">
                        <input id="MFEarn" class="form_female" placeholder="$$$" type ="number" name ="MFEarn">
                        <input id="MF" type="button" value="+1" onclick="ADD(this.id, 'Shirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>Large:</h2>
                        <input id="LM" type="button" value="-1" onclick="ADD(this.id, '-Shirt')" class="button1">
                        <input id="LMQuan" class="form_male" type="number" name="LMQuan">
                        <input id="LMEarn" class="form_male" placeholder="$$$" type ="number" name ="LMEarn">
                        <input id="LM" type="button" value="+1" onclick="ADD(this.id, 'Shirt')" class="button1">
                    <p>
                        <input id="LF" type="button" value="-1" onclick="ADD(this.id, '-Shirt')" class="button1">
                        <input id="LFQuan" class="form_female" type ="number" name="LFQuan">
                        <input id="LFEarn" class="form_female" placeholder="$$$" type ="number" name ="LFEarn">
                            <input id="LF" type="button" value="+1" onclick="ADD(this.id, 'Shirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>X Large:</h2>
                        <input id="XLM" type="button" value="-1" onclick="ADD(this.id, '-Shirt')" class="button1">
                        <input id="XLMQuan" class="form_male" type="number" name="XLMQuan">
                        <input id="XLMEarn" class="form_male" placeholder="$$$" type ="number" name ="XLMEarn">
                        <input id="XLM" type="button" value="+1" onclick="ADD(this.id, 'Shirt')" class="button1">
                    <p>
                        <input id="XLF" type="button" value="-1" onclick="ADD(this.id, '-Shirt')" class="button1">
                        <input id="XLFQuan" class="form_female" type ="number" name="XLFQuan">
                        <input id="XLFEarn" class="form_female" placeholder="$$$" type ="number" name ="XLFEarn">
                        <input id="XLF" type="button" value="+1" onclick="ADD(this.id, 'Shirt')" class="button1">
                </div>
                <div class="box_border">
                    <p><h2>2X Large</h2>
                        <input id="XXLM" type="button" value="-1" onclick="ADD(this.id, '-Shirt')" class="button1">
                        <input id="XXLMQuan" class="form_male" type="number" name="XXLMQuan">
                        <input id="XXLMEarn" class="form_male" placeholder="$$$" type ="number" name ="XXLMEarn">
                        <input id="XXLM" type="button" value="+1" onclick="ADD(this.id, 'Shirt')" class="button1">
                    <p>
                        <input id="XXLF" type="button" value="-1" onclick="ADD(this.id, '-Shirt')" class="button1">
                        <input id="XXLFQuan" class="form_female" type ="number" name="XXLFQuan">
                        <input id="XXLFEarn" class="form_female" placeholder="$$$" type ="number" name ="XXLFEarn">
                        <input id="XXLF" type="button" value="+1" onclick="ADD(this.id, 'Shirt')" class="button1">
                </div>
            </div>
        </div> <!--/section-->
        
        <div id="submit">
            <input type="submit" value="Submit the Form" class="submit-form-1"/>
        </div> 
    </form>


<?php include 'footer.php'; ?>