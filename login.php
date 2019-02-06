<?php 
    session_start();

    if (!isset($_SESSION["start_time"])) {
        $_SESSION["start_time"] = time();
    }

    include_once("php/functions.php");

    if (isset($_POST["submit"])) {
        $user_list = GetUsers();
        if (isset($user_list[$_POST["AgtUserName"]])) {
            if ($user_list[$_POST["AgtUserName"]] === $_POST["AgtPassword"]){
                print("You are logged in!");
                $_SESSION["logged_in"] = true;
                header("Location: http://localhost/travelAgencyPHP/insert-agentDay4.php");
            } else {
                print("Unfortunately this is not the correct username or password.");
            }
        } else {
            print("Unfortunately this is not the correct username or password. Try again.");
        }
    }

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
        <?php include_once('php/pageHeader.php');?>
        <?php include_once("php/menu.php"); ?>

    </header>
<section>
<form method="post" action="#">
    <label for="AgtUserName">User Name:</label><input type="text" name="AgtUserName">
    <label for="AgtPassword">Password:</label><input type="text" name="AgtPassword">
    <input type="submit" name="submit" value="Login">
</form>

</section>
   

<?php include_once('php/footer.php');?>

</body>

</html>