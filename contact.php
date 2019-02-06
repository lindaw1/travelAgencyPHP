<!-- This is the contact information for the travel agents. -->
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
    <title>Contact Information</title>
    <link href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php include_once('php/pageHeader.php');?>
        <?php include_once("php/menu.php"); ?>
    </header>

<h1>Contacts</h1><br>
<h2>Agents</h2>
<table>
    <tr>
        <th>Agents:</th>
        <th>Phone Number:</th>
        <th>Email:</th>
    </tr>
    <tr>
        <td>someone</td>
        <td>(403) 253-5485</td>
        <td>someone@gmail.com
        </td>
    </tr>
    <tr>
        <td>Sally</td>
        <td>(403) 253-5485</td>
        <td>someone@gmail.com</td>
    </tr>
    <tr>
        <td>Linda</td>
        <td>(403) 253-5485</td>
        <td>someone@gmail.com</td>
    </tr>
</table><br>

<!-- This is the contact information for the Head Office. -->
<h2>Head Office</h2><br>
1234 Main Street<br>
Calgary, AB T2J 2I9<br>
Phone: (403) 555-9999<br>

<?php include_once("php/footer.php"); ?>
</html>