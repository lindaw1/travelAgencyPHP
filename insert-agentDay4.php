<!-- This script creates a form to send data to the travelexperts database - agents table -->

<!-- checks to see if fields have data before submitting to the server.   -->
<!-- Sends error message if false. -->
<?php
session_start();

if (!isset($_SESSION["start_time"])) {
    $_SESSION["start_time"] = time();
}
?>

<?php
    $error_msg = 'first';
    if (isset($_POST["submit"])) {
        $agent_data = array();
        $error_msg = "";

        if (!$_POST["AgtFirstName"]) {
            $error_msg .= "This form requires a first name.<br>";
            $agent_data["AgtFirstName"] = "";
        } else {
            $agent_data["AgtFirstName"] = $_POST["AgtFirstName"];
        }

        if (!$_POST["AgtLastName"]) {
            $error_msg .= "This form requires a last name.<br>";
            $agent_data["AgtLastName"] = "";
        } else {
            $agent_data["AgtLastName"] = $_POST["AgtLastName"];
        }      

        if (!$_POST["AgtBusPhone"]) {
            $error_msg .= "Don't forget your Phone number.<br>";
            $agent_data["AgtBusPhone"] = "";
        } else {
            $agent_data["AgtBusPhone"] = $_POST["AgtBusPhone"];
        }      

        if (!$_POST["AgtEmail"]) {
            $error_msg .= "Please enter an email address.<br>";
            $agent_data["AgtEmail"] = "";
        } else {
            $agent_data["AgtEmail"] = $_POST["AgtEmail"];
        }      

        if (!$_POST["AgtPosition"]) {
            $error_msg .= "What is the Position of the new agent.<br>";
            $agent_data["AgtPosition"] = "";
        } else {
            $agent_data["AgtPosition"] = $_POST["AgtPosition"];
        }    

        if (!$_POST["AgtAgencyId"]) {
            $error_msg .= "Please choose an agency.<br>";
        $agent_data["AgtAgencyId"] = "";
        } else {
        $agent_data["AgtAgencyId"] = $_POST["AgtAgencyId"];
        }    

    // Its okay if the Middle initial field is blank 
    $agent_data["AgtMiddleInitial"] = null;
    }

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert New Agent</title>
    <link href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

        <?php include_once('php/pageHeader.php');?>
        <?php include_once("php/menu.php");?>
    </header>

<section>
<?php
include_once('php/functions.php');

    if ($error_msg == "") {
        $result = AgentCreate($agent_data); 
        if ($result){
            print("the agent was added to the database.");

        }else {
            print("the Agent wasn't added.");
        }
    }
        elseif ($error_msg != 'first'){
            // print error message
        print $error_msg;
        print <<<EOF
        <form method="post" action="#">
        <label for="AgentFirstName">First Name:</label><input type="text" 
            name="AgtFirstName" value='{$agent_data["AgtFirstName"]}'>
        <label for="AgtLastName">Last Name:</label><input type="text" 
            name="AgtLastName" value='{$agent_data["AgtLastName"]}'>
        <label for="AgtBusPhone">Business Phone:</label><input type="text" 
            name="AgtBusPhone" value='{$agent_data["AgtBusPhone"]}'>
        <label for="AgtEmail">Email:</label><input type="text" 
            name="AgtEmail" value='{$agent_data["AgtEmail"]}'>
        <label for="AgtPosition">Position:</label><input type="text" 
            name="AgtPosition" value='{$agent_data["AgtPosition"]}'>
        <br><br><br><br><br><br><br><br>
        <label for="AgtAgencyId">Agency ID:</label>        
            <select name="AgtAgencyId">
EOF;
       
        switch ($agent_data["AgtAgencyId"]) {
            // case "":
            //     echo "<option value="">please choose</option>";
            //     break;
            case "1":
                echo "<option value="1">Winnipeg (Agency 1)</option>";
                break;
            case "2":
                echo "<option value="2">Calgary (Agency 2)</option>";
                break;
            default:
                echo "Linda --- You have a problem. ha ha";
        }
            print("</select> 
            <br><br>
            <input type="submit" name="submit" value="submit">
            </form>")




        //         <option value="">---please choose---</option>
        //         <option value="1">Winnipeg (Agency 1)</option>
        //         <option value="2">Calgary (Agency 2)</option>
        //         // <value='{$agent_data["AgtAgencyId"]}'>
        //     </select> 
        // <br><br>
        // <input type="submit" name="submit" value="submit">
        // </form>


        } else {

?>

<form method="post" action="#">
    <label for="AgtFirstName">First Name:</label><input type="text" name="AgtFirstName">
    <label for="AgtLastName">Last Name:</label><input type="text" name="AgtLastName">
    <label for="AgtBusPhone">Business Phone:</label><input type="text" name="AgtBusPhone">
    <label for="AgtEmail">Email:</label><input type="text" name="AgtEmail">
    <label for="AgtPosition">Position:</label><input type="text" name="AgtPosition">
    <br><br><br><br><br><br><br><br>
    <label for="AgtAgencyId">Agency ID:</label>
        <select name="AgtAgencyId">
            <option value="">---please choose---</option>
            <option value="1">Winnipeg (Agency 1)</option>
            <option value="2">Calgary (Agency 2)</option>
        </select>
    <br><br>
    <input type="submit" name="submit" value="submit">
</form>
<?php
        }
    ?>
</section>
</body>
<?php include_once("php/footer.php"); ?>
</html>