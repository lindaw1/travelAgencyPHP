<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<div id=pageGreeting> 
<?php
$hour = new DateTime("now", new DateTimeZone('America/Edmonton'));
$hour = $hour->format('H');

if( $hour > 6 && $hour <= 11) {
  echo "Good Morning";
}
else if($hour > 11 && $hour <= 16) {
  echo "Good Afternoon";
}
else if($hour > 16 && $hour <= 23) {
  echo "Good Evening";
}
else {
  echo "Why aren't you asleep?  Are you programming?";
}
?>
</div>