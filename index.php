<?php
session_start();

if (!isset($_SESSION["start_time"])) {
    $_SESSION["start_time"] = time();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Linda Travel Agency</title>
    <link href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>


<!-- Front page of Linda's Travel Agency Website -->

<body class="index-page">
    <header>
        <?php include_once('php/pageHeader.php');?>
        <?php include_once("php/menu.php"); ?>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRongs62pCSNy4Klz9CHp5Z1dJdDJxi9T8pc-3st-mmUf7ZJ5TC"
            class="picture" alt="logo">
    </header>

    <main>

        <h1>Welcome to Travel Experts</h1><br>

        <img src="img/jumping.jpg" class="picture" alt="pic1">
        <img src="img/couple.jpg" class="picture" alt="pic2">
        <img src="img/paddle.jpg" class="picture" alt="pic3"><br>
        <br>

        <!-- Provides links to the contact page and the register page. -->
        <a href="contact.php" target="_blank"> <img src="img/contactbutton.png" alt="link to contact page" class="button"></a>
        <a href="register.php" target="_blank"> <img src="img/registerbutton.jpg" alt="link to registration page"
                class="button"></a><br>
        <a href="links.php" target="_blank"> <img src="img/linkbutton.jpg" alt="link to links page"
                class="button"></a><br>

    </main>

<?php include_once('php/footer.php');?>

</body>

</html>