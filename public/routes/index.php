<?php
// index.php
//     login or user's bands
include '../partials/header.php';

//TODO - make get_bands();
$user_bands = ["The Schwam", "Elementality"];


echo '<div id="bands_container">';

foreach ($user_bands as $user) {
    $urlify_band = str_replace(' ', '-', strtolower($user));
    $band_img_url = '../assets/media/band-logos/' . $urlify_band . '-band-logo.png';
    // TODO - make a /band/ route
    $band_profile_url = 'band.php';
    echo '<a href="' . $band_profile_url . '">' . '<img src="' . $band_img_url . '" style="max-width:200px; padding: 20px; box-sizing:border-box;">' . '</a>';
}


echo '</div>'; //#bands_container

include '../partials/footer.php';
