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

// POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ?>
        <div>
        <h2>Please enjoy some pictures of wiener dogs today!</h2>
        <br /><br />
        </div>
        <?php
        $doggo = '';
        $border_color = 'nope';
        require "inc/partyhats.inc.php";
        require "inc/long.inc.php";
        require "inc/short.inc.php";
        require "inc/wire.inc.php";
    }

// GET
    elseif ($_SERVER["REQUEST_METHOD"] == "GET") {

        // BACKGROUND COLOR
        $background_color = 'white';

        if (isset($_GET['background'])) {
            if ($_GET['background'] == 'white') {
                $background_color = 'white';
                // $flag1 = true;
            } //end if background equals white 
            elseif($_GET['background'] == 'yellow') {
                $background_color = 'yellow';
                // $flag1 = true;
            } //end elseif background equals yellow
            elseif($_GET['background'] == 'blue') {
                $background_color = 'blue';
                // $flag1 = true;
            } //end elseif background equals blue
        } //end if background color is set
        
        if (!isset($_GET['background'])){
            $background_color = 'white';
            // $flag1 = true;
        } //end if background is not set

?>

        <!-- BEGIN DIV CLASS FOR BACKGROUND COLOR -->
        <div id="background" class="<?php echo $background_color; ?>">
            <div>
                <h2>Please enjoy some pictures of wiener dogs today!</h2>
                <br /><br />
            </div>
        
        <?php
        
        //DOGGO IPSUM
        $doggo = file_get_contents("inc/doggo.inc.php");

        if (isset($_GET['doggo'])) {
            if ($_GET['doggo'] == 'y') {
                $doggo = file_get_contents("inc/doggo.inc.php");
                // $doggo = require "inc/doggo.inc.php";
            } //end if doggo equals y 
            elseif($_GET['doggo'] == 'n') {
                $doggo = file_get_contents("inc/doggo.inc.php");
            } //end elseif doggo equals n
        } //end if doggo is set
                    
        if (!isset($_GET['doggo'])){
            $doggo = '';
        } //end if doggo is not set

        // BORDER
            $border_color = 'nope';

           if (isset($_GET['border'])) {
                if ($_GET['border'] == 'aqua') {
                    $border_color = 'aqua';
                } //end if border equals aqua 
                elseif($_GET['border'] == 'purple') {
                    $border_color= 'purple';
                } //end elseif border equals purple
                elseif($_GET['border'] == 'nope') {
                    $border_color= 'nope';
                } //end elseif border equals nope

            } //end if border is set

            if (!isset($_GET['border'])){
                $border_color = 'nope';
            }

            // PARTY HATS
            $flag2 = true;

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
            }
                
            if ($flag2 == true) {
                require "inc/partyhats.inc.php";
            }
            // LONG HAIRED DACHSHUNDS
            $flag3 = true; //long haired

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

            if ($flag3 == true) { 
            require "inc/long.inc.php";
            }

            // SHORT HAIRED DACHSHUNDS
            $flag4 = true; //short haired

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
                require "inc/short.inc.php";
            }

            // WIRE HAIRED DACHSHUNDS
            $flag5 = true; //wire haired

            if ($_SERVER["REQUEST_METHOD"] == "GET") {
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
            } //end if method is get
                        
            if ($flag5 == true){ 
                require "inc/wire.inc.php";
            }


    ?>

        </div><!-- END DIV CLASS FOR BACKGROUND COLOR -->
<?php
    } // end if method is get
?>

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