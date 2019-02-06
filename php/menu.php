<nav>
    
    <a href="index.php">Home</a>
    <a href="links.php">Links</a>
    <a href="register.php">Registration</a>
    <a href="contact.php">Contact Me</a>
    <?php
        if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
            print("<a href='insert-agentDay4.php'>Insert New Agent</a>");
        }
    ?>

    <?php
        if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
            print("<a href='php/logout.php'>Logout Here</a>");
        } else {
            print("<a href='login.php'>Agent Login</a>");
        }
    ?>
    
    <br>
</nav>

