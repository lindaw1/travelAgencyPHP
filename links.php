<!-- Links to destination websites -->

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
    <title>Links</title>
    <link href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php include_once('php/pageHeader.php');?>
        <?php include_once("php/menu.php"); ?>
    </header>

<section>
<?php
    include_once('php/variables.php');

    print("<table align='left border='1' cellpadding='3' cellspacing='0'>");
    $row = 1;
        foreach($destinationArray as $url => $label) {
            print("<tr><td>$row</td>");
            print("<td>Link to <a href='". $url ."' target='_blank'>$label</a></td></tr>");
            $row++;
        }
    print("</table>");
?>

</section>
</body>
<?php include_once("php/footer.php"); ?>
</html>