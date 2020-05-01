<!DOCTYPE html>
<head>
<?php


$name='Alex';
$adjective = 'muscular';
$adverb= 'carefully';
$noun = 'fancy';
$pluralnoun = 'bushes';
$noun2 = 'hair';
$adjective2 = 'chaotic';
$adjective3 = 'worried';
$verb = 'snore';
$verb2 = 'rain';

if ($_POST['name'] != NULL){$name = $_POST['name'];}
if ($_POST['adjective'] != NULL){$adjective = $_POST['adjective'];}
if ($_POST['adverb'] != NULL){$adverb= $_POST['adverb'];}
if ($_POST['noun'] != NULL){$noun = $_POST['noun'];}
if ($_POST['pluralnoun'] != NULL){$pluralnoun = $_POST['pluralnoun'];}
if ($_POST['noun2'] != NULL){$noun2 = $_POST['noun2'];}
if ($_POST['adjective2'] != NULL){$adjective2 = $_POST['adjective2'];}
if ($_POST['adjective3'] != NULL){$adjective3 = $_POST['adjective3'];}
if ($_POST['verb'] != NULL){$verb = $_POST['verb'];}
if ($_POST['verb2'] != NULL){$verb2 = $_POST['verb2'];}


$title="Going for a walk";
echo "<title>$title</title>";
?>

<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class = "container">
<?php
echo "<h1>$title</h1>";
?>

<div class = "content">
<?php
echo "Yesterday, <b>$name</b> and I went for a walk. 
On our way to <b>$adjective</b> park, we saw a(n) <b>$adverb</b> <b>$noun</b> dog on a bike. 
We also saw 3 big <b>$pluralnoun</b> tied to a <b>$noun2</b>. 
Once we got to <b>$adjective</b> park, the sky turned <b>$adjective2</b>. 
It started to <b>$verb</b> and <b>$verb2</b> which made me feel <b>$adjective3</b>.";
?>
</div>
<button class="btnBack" style="margin: 5px" onclick="history.back(-1)">Go back</button>
</div>
</body>
</html>