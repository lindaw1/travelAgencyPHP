

<?php

// Upload the userNameUpload.txt file to ensure all new users are in the system

$userName_data = file_get_contents("userNameUpload.txt");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agent Login</title>
    <link href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <header>
        <?php include_once('pageHeader.php');?>
        <?php include_once("menu.php"); ?>

    </header>
<section>
<form method="post" action="#">
    <label for="AgtUserName">User Name:</label><input type="text" name="AgtUserName">
    <label for="AgtPassword">Password:</label><input type="text" name="AgtPassword">
    <input type="submit" name="submit" value="Login">
</form>

</section>
   

<?php include_once('footer.php');?>

</body>

</html>