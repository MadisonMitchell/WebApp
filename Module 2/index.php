<?php
 //write php code here
 $wineregion = $_GET['wineregion'];
 $winerytype = $_GET['winetype'];
 $wineryname = $_GET['winename'];
?>

<html>
    <head>
        <title> First PHP Page Madie </title>
    <head>
    <body>
        <h2> Winery Regions</h2>
        <p> Winery Region: <?pho echo $wineregion; ?></p>
        <p> Winery Type: <?pho echo $winetype; ?></p>
        <p> Winery Name: <?pho echo $winename; ?></p>
    </body>
