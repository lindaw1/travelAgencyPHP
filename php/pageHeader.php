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

// $hour = 7;

//for (<initialize>; <condition>; <iteration>)
//foreach (<set> as <single>)
// for ($hour=0; $hour <= 23; $hour++) {
//   echo "<p>";
  // echo "The current time is $hour.";
  if( $hour > 6 && $hour <= 11) {
    echo "Good Morning Sunshine";}
  else if($hour > 11 && $hour <= 16) {
    echo "Good Afternoon - You're beautiful!";
  } else if($hour > 16 && $hour <= 23) {
    echo "Good Evening Beautiful";
  } else {
    echo "Why aren't you asleep?  Are you still programming?";
  }
  // echo "</p>";
// }
?>
</div>

</html>