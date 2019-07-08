<?php
// transaction-new.php
include '../../partials/header.php'; ?>
<form action="../../../api/transaction/create.php">
    <?php
    // Merch Type
    ////// T-Shirt
    ////// Crop Top
    ////// Tank Top
    ////// Hat
    ////// Beanie
    ////// CD
    ////// Poster
    // Size (if applicable)
    // Product Variation
    ////// Shirt
    ////////// Dyed
    ////////// Undyed
    ////////// Black
    // CD
    ////// OTS
    ////// TNBF
    ?>
    <input type="date" name="date_of_transaction">
    <input type="text" name="venue_pay">
    <button>Submit</button>
    <!-- <label for="merch-type">What Type of Merch Did You Sell?</label>
    <select id="merch-type" name="merch-type" class="custom-select">
        <option value="t-shirt">T-Shirt</option>
        <option value="crop-top">Crop Top</option>
        <option value="tank-top">Tank Top</option>
        <option value="hat">Hat</option>
        <option value="beanie">Beanie</option>
        <option value="cd">CD</option>
        <option value="poster">Poster</option>
    </select> -->
</form>
<?php include '../../partials/footer.php';
