<?php
 //Capture our values inputted on the form page
    $wineregion = $_GET['wineregion'];
    $winerytype = $_GET['winetype'];
    $wineryname = $_GET['winename'];

?>

<html>
    <head>
        <title>Output Values from the Form.php page</title>
    <head>
    <body>
        <h2> Winery Regions</h2>
        <p> Winery Region: <?pho echo $wineregion; ?></p>
        <p> Winery Type: <?pho echo $winetype; ?></p>
        <p> Winery Name: <?pho echo $winename; ?></p>
    </body>