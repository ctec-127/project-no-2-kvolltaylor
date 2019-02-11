<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>
<body>
<div id="wrapper">

<!-- HEADER -->
<div id="header">
<?php require 'inc/head.inc.php'; ?>
</div> <!-- end header -->

<?php

    // INITIATE VARIABLES TO DECIDE WHAT TO DISPLAY OR NOT
    $background_color = 'white';
    $border = 'nope';
    $doggo = '';


    $flag1 = false; //background color
    $flag2 = false; //party hats
    $flag3 = false; //long haired
    $flag4 = false; //short haired
    $flag5 = false; //wire haired
    $flag6 = false; //doggo
 
    // BACKGROUND COLOR
    if (isset($_GET['background'])) {
        if ($_GET['background'] == 'white') {
            $background_color = 'white';
            $flag1 = true;
        } //end if background equals white 
        elseif($_GET['background'] == 'yellow') {
            $background_color = 'yellow';
            $flag1 = true;
        } //end elseif background equals yellow
        elseif($_GET['background'] == 'blue') {
            $background_color = 'blue';
            $flag1 = true;
        } //end elseif background equals blue
    } //end if background color is set
    
    if (!isset($_GET['background'])){
        $background_color = 'white';
        $flag1 = true;
    } //end if background is not set
    if ($flag1 == true){ 
?>

    <!-- BEGIN DIV CLASS FOR BACKGROUND COLOR -->
    <div id="background" class="<?php echo $background_color; ?>">

<?php
    } //end if $flag1 equals true

    // DOGGO IPSUM
    if (isset($_GET['doggo'])) {
        if ($_GET['doggo'] == 'y') {
            $flag6 = true;
            $doggo = file_get_contents('inc/doggo.inc.php');
        } //end if doggo equals y 
        elseif($_GET['doggo'] == 'n') {
            $flag6 = false;
        } //end elseif doggo equals n
    } //end if doggo is set
                
    if (!isset($_GET['doggo'])){
        $flag6 = false;
    } //end if doggo is not set
                
    // PHOTO BORDER COLOR
    if (isset($_GET['border'])) {
        if ($_GET['border'] == 'aqua') {
            $border = 'aqua';
        } //end if border equals aqua 
        elseif($_GET['border'] == 'purple') {
            $border = 'purple';
        } //end elseif border equals purple
    } //end if border is set

    if (!isset($_GET['border'])){
        $border = 'nope';
    } //end if background is not set
        
    // PARTY HATS
    if (isset($_GET['hats'])) {
        if ($_GET['hats'] == 'y') {
            $flag2 = true;
        } //end if hats equals y
        elseif($_GET['hats'] == 'n') {
            $flag2 = false;
        } //end elseif hats equals n
    } //end if hats is set

    if (!isset($_GET['hats'])) {
        $flag2 = false;
    } //end if hats is not set

    if ($flag2 == true) {
?>
        <div id="partyhats">
            <h2 class="hhighlight_2">Wiener Dogs in Party Hats!</h2>
            <p class="doggo"><?php echo $doggo; ?>
                <br /><br />
                <img src="img/partyhat1.jpeg" class="<?php echo $border; ?>" alt="Dog in a Party Hat" height="500" width="281">
                <br />
                <img src="img/partyhat2.jpg"  class="<?php echo $border; ?>" alt="2 Dogs in a Party" height="346" width="500">
                <br />
                <img src="img/partyhat3.jpg"  class="<?php echo $border; ?>" alt="Dog in a Party Hat" height="500" width="373">
                <br />
            </p>
        
        </div> <!-- end partyhats -->
<?php
    } //end if flag2 equals true

    // LONG HAIRED DACHSHUNDS

    if (isset($_GET['long'])) {
        if ($_GET['long'] == 'y') {
            $flag3 = true;
        } //end if long equals y 
        elseif($_GET['long'] == 'n') {
            $flag3 = false;
        } //end if long equals n
    } //end if long is set
                
    if (!isset($_GET['long'])){
        $flag3 = false;
    } //end if long is not set
                
    if ($flag3 == true){ 

?>

        <div id="long">
            <h2 class="hhighlight">Long Haired Wiener Dogs</h2>
            <p class="doggo"><?php echo $doggo; ?>
                <br /><br />
                <img src="img/longhair-red.jpg" class="<?php echo $border; ?>" alt="Red Long Haired Dachshund" height="500" width="312">
                <br />
                <img src="img/longhair-bt.jpg" class="<?php echo $border; ?>" alt="Black and Tan Long Haired Dachshund" height="375" width="500">
                <br />
            </p>
        </div> <!-- end long -->

<?php
                } //end if flag3 equals true


// SHORT HAIRED DACHSHUNDS

    if (isset($_GET['short'])) {
        if ($_GET['short'] == 'y') {
            $flag4 = true;
        } //end if short equals y 
        elseif($_GET['short'] == 'n') {
            $flag4 = false;
        } //end if short equals n
    } //end if short is set
                
    if (!isset($_GET['short'])){
        $flag4 = false;
    } //end if short is not set
                
    if ($flag4 == true){ 

    ?>

        <div id="short">
            <h2 class="hhighlight_2">Short Haired Wiener Dogs</h2>
            <p class="doggo"><?php echo $doggo; ?>
                <br /><br />
                <img src="img/shorthair-bt.jpg" class="<?php echo $border; ?>" alt="Black and Tan Short Haired Dachshund" height="334" width="500">
                <br />
                <img src="img/shorthair-racing.jpg" class="<?php echo $border; ?>" alt="Red Short Haired Dachshund Running" height="326" width="500">
                <br />
            </p>
        </div> <!-- end long -->

<?php
    } //end if flag4 equals true

// WIRE HAIRED DACHSHUNDS

    if (isset($_GET['wire'])) {
        if ($_GET['wire'] == 'y') {
            $flag5 = true;
        } //end if wire equals y 
        elseif($_GET['wire'] == 'n') {
            $flag5 = false;
        } //end if wire equals n
    } //end if wire is set
                
    if (!isset($_GET['wire'])){
        $flag5 = false;
    } //end if wire is not set
                
    if ($flag5 == true){ 

    ?>

        <div id="wire">
            <h2 class="hhighlight">Wire Haired Wiener Dogs</h2>
            <p class="doggo"><?php echo $doggo; ?>
                <br /><br />
                <img src="img/wirehair_bt.jpg" class="<?php echo $border; ?>" alt="Black and Tan Wire Haired Dachshund" height="500" width="375">
                <br />
                <img src="img/wirehair-bt2.jpg" class="<?php echo $border; ?>" alt="Black and Tan Wire Haired Dachshund" height="325" width="500">
                <br />
            </p>
        </div> <!-- end long -->

<?php
    } //end if flag5 equals true
?>

    </div><!-- END DIV CLASS FOR BACKGROUND COLOR -->

<!-- FOOTER -->
<div id="footer">
<?php require 'inc/foot.inc.php'; ?>
</div> <!-- end footer -->

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>

</div> <!-- end wrapper -->
</body>
</html>