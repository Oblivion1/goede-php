<?PHP
date_default_timezone_set ("Europe/Amsterdam");
$time = date("H");
if ($time < '06') {
  $background = "night";
  $text = "Slaap lekker Hugo";
}
else if ($time < '12') {
  $background = "morning";
  $text = "Goeie Morgen Hugo";
}
else if ($time < '18') {
  $background = "afternoon";
  $text = "Goeie middag Hugo";
}
else if ( $time > '18' ) {
  $background = "evening";
  $text = "Nog steeds aan het werken Hugo?";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Goede PHP</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body onload="startTime()" id=<?php print($background)?>>
    <p id="text"><?php print($text)?></p>
    <p id="tijd"></p>
    <script type="text/javascript" src="js/tijd.js"></script>
  </body>
</html>
