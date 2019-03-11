<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
</head>
<body>
<div id="wrapper">
<!-- HEADER -->
<div id="header">
<?php require 'inc/head.inc.php'; ?>
</div>

<!-- INSTRUCTIONS TO CUSTOMIZE SECOND PAGE -->
<p>Welcome to a site all about dachshunds, or as they are known colloquially, wiener dogs.</p>
<div style="background:url('img/dach.png') repeat-x;width:100%;height:134px;background-position:center;"></div>
<br />
<h2 class="hhighlight_2">In order to customize your experience, please follow the instructions below!</h2>
<br />
<!-- <h3 class="hhighlight">First, type the page address:</h3>
<p>In your browser's address bar, type in "page2.php"</p> -->

<h3 class="hhighlight">Choose a background color:</h3>
<!-- <p>To choose a background color for the content, next type in "?background="</p> -->
<p>Choose a background color for the content:</p>
<!-- <p>If you would like to choose a white background color, type "white"; if you would like a yellow background color, type "yellow"; if you would like blue, type "blue."</p> -->
    <ul>
        <li><a method="GET" href="page2.php?background=white">White</a></li>
        <li><a method="GET" href="page2.php?background=yellow">Yellow</a></li>
        <li><a method="GET" href="page2.php?background=blue">Blue</a></li>
    </ul>

<h3 class="hhighlight">Choose a photo border color:</h3>
<p>To choose a border color for the photos you'd add "&border=" after the URL</p>
<p>If you like aqua, you'd enter a value of "aqua"; if you prefer purple, you'd enter "purple"; and enter "nope" for no border at all.</p>
<p>This option only works in COMBINATION with a selection of one or more of the photo options below.</p>

<h3 class="hhighlight">Choose whether or not you'd like to see some photos of dachshunds wearing party hats:</h3>
<!-- <p>To choose if you want to see dogs in party hats, next type in "&hats="</p>
<p>To say yes, if you'd like to, type "y"; otherwise, type "n."</p> -->
<p>Choose your border style:</p>
    <ol>
        <li>On a White Background<li>
        <ul>
            <li><a href="page2.php?background=white&border=aqua&hats=y">Dogs in Party Hats, Aqua Border</a></li>
            <li><a href="page2.php?background=white&border=purple&hats=y">Dogs in Party Hats, Purple Border</a></li>
            <li><a href="page2.php?background=white&border=nope&hats=y">Dogs in Party Hats, No Border</a></li>
        </ul>
        <li>On a Yellow Background<li>
        <ul>
            <li><a href="page2.php?background=yellow&border=aqua&hats=y">Dogs in Party Hats, Aqua Border</a></li>
            <li><a href="page2.php?background=yellow&border=purple&hats=y">Dogs in Party Hats, Purple Border</a></li>
            <li><a href="page2.php?background=yellow&border=nope&hats=y">Dogs in Party Hats, No Border</a></li>
        </ul>
        <li>On a Blue Background<li>
        <ul>
            <li><a href="page2.php?background=blue&border=aqua&hats=y">Dogs in Party Hats, Aqua Border</a></li>
            <li><a href="page2.php?background=blue&border=purple&hats=y">Dogs in Party Hats, Purple Border</a></li>
            <li><a href="page2.php?background=blue&border=nope&hats=y">Dogs in Party Hats, No Border</a></li>
        </ul>
    </ol>

<h3 class="hhighlight">What kinds of dachshund coats would you like to see photos of?</h3>
<p>If you'd like to see long haired ones, you'd add "&long=y"</p>
<p>If you'd like to see short haired ones, you'd add "&short=y"</p>
<p>If you'd like to see wire haird ones, you'd add "&wire=y"</p>
<br /><br />
<p>Choose which coat you'd like to see, and a border style:</p>
    <ol type="I">
        <li>On a White Background</li>
        <ol>
            <li>Long Coat</li>
            <ul>
                <li><a href="page2.php?background=white&border=aqua&long=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=white&border=purple&long=y">With Purple Border</a></li>
                <li><a href="page2.php?background=white&border=nope&long=y">With No Border</a></li>
            </ul>
            <li>Short Coat</li>
            <ul>
                <li><a href="page2.php?background=white&border=aqua&short=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=white&border=purple&short=y">With Purple Border</a></li>
                <li><a href="page2.php?background=white&border=nope&short=y">With No Border</a></li>
            </ul>
            <li>Wire Coat</li>
            <ul>
                <li><a href="page2.php?background=white&border=aqua&wire=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=white&border=purple&wire=y">With Purple Border</a></li>
                <li><a href="page2.php?background=white&border=nope&short=y">With No Border</a></li>
            </ul>
        </ol>
        <li>On a Yellow Background</li>
        <ol>
            <li>Long Coat</li>
            <ul>
                <li><a href="page2.php?background=yellow&border=aqua&long=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=yellow&border=purple&long=y">With Purple Border</a></li>
                <li><a href="page2.php?background=yellow&border=nope&long=y">With No Border</a></li>
            </ul>
            <li>Short Coat</li>
            <ul>
                <li><a href="page2.php?background=yellow&border=aqua&short=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=yellow&border=purple&short=y">With Purple Border</a></li>
                <li><a href="page2.php?background=yellow&border=nope&short=y">With No Border</a></li>
            </ul>
            <li>Wire Coat</li>
            <ul>
                <li><a href="page2.php?background=yellow&border=aqua&wire=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=yellow&border=purple&wire=y">With Purple Border</a></li>
                <li><a href="page2.php?background=yellow&border=nope&short=y">With No Border</a></li>
            </ul>
        </ol>
        <li>On a Blue Background</li>
        <ol>
            <li>Long Coat</li>
            <ul>
                <li><a href="page2.php?background=blue&border=aqua&long=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=blue&border=purple&long=y">With Purple Border</a></li>
                <li><a href="page2.php?background=blue&border=nope&long=y">With No Border</a></li>
            </ul>
            <li>Short Coat</li>
            <ul>
                <li><a href="page2.php?background=blue&border=aqua&short=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=blue&border=purple&short=y">With Purple Border</a></li>
                <li><a href="page2.php?background=blue&border=nope&short=y">With No Border</a></li>
            </ul>
            <li>Wire Coat</li>
            <ul>
                <li><a href="page2.php?background=blue&border=aqua&wire=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=blue&border=purple&wire=y">With Purple Border</a></li>
                <li><a href="page2.php?background=blue&border=nope&short=y">With No Border</a></li>
            </ul>
        </ol>
    </ol>

<h3 class="hhighlight">Would you like to read some doggo ipsum, the dog version of lorem ipsum?</h3>
<p>Lastly, maybe you enjoy the meme of doggo speak. Perhaps reading some would enhance your enjoyment of the photos.</p>
<p>If so, you'd add "&doggo=y" IN COMBINATION with any of the options to see photos</p>
<p>Choose which coat you'd like to see to with doggo ipsum:</p>
    <ol type="I">
        <li>On a White Background</li>
        <ol>
            <li>Long Coat</li>
            <ul>
                <li><a href="page2.php?background=white&border=aqua&long=y&doggo=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=white&border=purple&long=y&doggo=y">With Purple Border</a></li>
                <li><a href="page2.php?background=white&border=nope&long=y">With No Border</a></li>
            </ul>
            <li>Short Coat</li>
            <ul>
                <li><a href="page2.php?background=white&border=aqua&short=y&doggo=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=white&border=purple&short=y&doggo=y">With Purple Border</a></li>
                <li><a href="page2.php?background=white&border=nope&short=y">With No Border</a></li>
            </ul>
            <li>Wire Coat</li>
            <ul>
                <li><a href="page2.php?background=white&border=aqua&wire=y&doggo=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=white&border=purple&wire=y&doggo=y">With Purple Border</a></li>
                <li><a href="page2.php?background=white&border=nope&short=y&doggo=y">With No Border</a></li>
            </ul>
        </ol>
        <li>On a Yellow Background</li>
        <ol>
            <li>Long Coat</li>
            <ul>
                <li><a href="page2.php?background=yellow&border=aqua&long=y&doggo=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=yellow&border=purple&long=y&doggo=y">With Purple Border</a></li>
                <li><a href="page2.php?background=yellow&border=nope&long=y">With No Border</a></li>
            </ul>
            <li>Short Coat</li>
            <ul>
                <li><a href="page2.php?background=yellow&border=aqua&short=y&doggo=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=yellow&border=purple&short=y&doggo=y">With Purple Border</a></li>
                <li><a href="page2.php?background=yellow&border=nope&short=y">With No Border</a></li>
            </ul>
            <li>Wire Coat</li>
            <ul>
                <li><a href="page2.php?background=yellow&border=aqua&wire=y&doggo=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=yellow&border=purple&wire=y&doggo=y">With Purple Border</a></li>
                <li><a href="page2.php?background=yellow&border=nope&short=y&doggo=y">With No Border</a></li>
            </ul>
        </ol>
        <li>On a Blue Background</li>
        <ol>
            <li>Long Coat</li>
            <ul>
                <li><a href="page2.php?background=blue&border=aqua&long=y&doggo=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=blue&border=purple&long=y&doggo=y">With Purple Border</a></li>
                <li><a href="page2.php?background=blue&border=nope&long=y">With No Border</a></li>
            </ul>
            <li>Short Coat</li>
            <ul>
                <li><a href="page2.php?background=blue&border=aqua&short=y&doggo=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=blue&border=purple&short=y&doggo=y">With Purple Border</a></li>
                <li><a href="page2.php?background=blue&border=nope&short=y">With No Border</a></li>
            </ul>
            <li>Wire Coat</li>
            <ul>
                <li><a href="page2.php?background=blue&border=aqua&wire=y&doggo=y">With Aqua Border</a></li>
                <li><a href="page2.php?background=blue&border=purple&wire=y&doggo=y">With Purple Border</a></li>
                <li><a href="page2.php?background=blue&border=nope&short=y&doggo=y">With No Border</a></li>
            </ul>
        </ol>
    </ol>

<h3 class="hhighlight">Wanna see all your choices of coats, plus the dogs in party hats, with doggo ipusm at once?</h3>
<ol>
    <li>On a White Background</li>
        <ul>
            <li><a href="page2.php?background=white&border=aqua&hats=y&long=y&short=y&wire=y&doggo=y">With Aqua Border</a></li>
            <li><a href="page2.php?background=white&border=purple&hats=y&long=y&short=y&wire=y&doggo=y">With Purple Border</a></li>
            <li><a href="page2.php?background=white&border=nope&long=y&short=y&wire=y&doggo=y">With No Border</a></li>
        </ul>
        <li>On a Yellow Background</li>
        <ul>
            <li><a href="page2.php?background=yellow&border=aqua&hats=y&long=y&short=y&wire=y&doggo=y">With Aqua Border</a></li>
            <li><a href="page2.php?background=yellow&border=purple&hats=y&long=y&short=y&wire=y&doggo=y">With Purple Border</a></li>
            <li><a href="page2.php?background=yellow&border=nope&hats=y&long=y&short=y&wire=y&doggo=y">With No Border</a></li>
        </ul>
        <li>On a Blue Background</li>
        <ul>
            <li><a href="page2.php?background=blue&border=aqua&hats=y&long=y&short=y&wire=y&doggo=y">With Aqua Border</a></li>
            <li><a href="page2.php?background=blue&border=purple&hats=y&long=y&short=y&wire=y&doggo=y">With Purple Border</a></li>
            <li><a href="page2.php?background=blue&border=nope&hats=y&long=y&short=y&wire=y&doggo=y">With No Border</a></li>
        </ul>
</ol>

<h3 class="hhighlight_2">Maybe you just don't care about any fancy options!</h3>
<p>Sometimes you want to cut straight to the pictures! That's fine!</p>

<form method="POST" action="page2.php"><button type="submit">Take Me to Photos Only!</button></form>

<!-- FOOTER -->
<div id="footer">
<?php require 'inc/foot.inc.php'; ?>
<div>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>

<div>  <!-- end wrapper div -->

</body>
</html>