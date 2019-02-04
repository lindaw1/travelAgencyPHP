<!-- Registration Form -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php include_once('pageHeader.php');?>
        <?php include_once("menu.php"); ?>
    </header>

<!-- Form for Booking request for more information from travel agent. -->
    <h1>Booking Registration Form</h1>

    <form action="" method="bouncer.php" id="myForm">
        <!-- Input Boxes, required for submission -->
        <label>Name: </label><input type="text" id="txtName" class="input-box" required>
        <div id="txtNameDesc" class="descToCntrl">Name goes here</div><br>

        <label>Address: </label><input type="text" id="txtAddress" class="input-box" required>
        <div id="txtAddressDesc" class="descToCntrl">Address goes here</div><br>

        <label>City: </label><input type="text" id="txtCity" class="input-box" required>
        <div id="txtCityDesc" class="descToCntrl">City goes here</div><br>

        <label>Province: </label><input type="text" id="txtProvince" class="input-box" required>
        <div id="txtProvinceDesc" class="descToCntrl">Province goes here</div><br>

        <!-- Special pattern required for Postal Code -->
        <label>Postal Code: </label><input type="text" id="txtPostalCode" class="input-box" required pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]"
            placeholder="X1X 1X1">
        <div id="txtPostalCodeDesc" class="descToCntrl">Postal Code goes here. X1X 1X1</div><br><br>

        <label>Phone: </label><input type="text" id="txtPhone" class="input-box" required>
        <div id="txtPhoneDesc" class="descToCntrl">Phone goes here.</div><br>

        <br>
        <br>
        <br>
        Which continent are you traveling to?<br>
        <input type="radio" name="continent" value="NA"> North America<br>
        <input type="radio" name="continent" value="SA"> South America<br>
        <input type="radio" name="continent" value="Eur"> Europe<br>
        <input type="radio" name="continent" value="Africa"> Africa<br>
        <input type="radio" name="continent" value="Asia"> Asia<br>
        <input type="radio" name="continent" value="Aus"> Australia<br>
        <input type="radio" name="continent" value="AA"> Antarctica<br>
        <br>

        What excursions are you wishing to book?<br>
        <input type="checkbox" name="horse" value="Horse"> Horseback Riding<br>
        <input type="checkbox" name="scuba" value="Scuba"> Scuba Diving<br>
        <input type="checkbox" name="pyramid" value="Pyramid"> View the Pyramids<br>
        <input type="checkbox" name="bridge" value="Bridge"> Bridge Tournament<br>
        <br>

        When can we call you?
        <select name="call">
            <option value="morning">Morning</option>
            <option value="afternoon">Afternoon</option>
            <option value="evening">Evening</option>
        </select><br>
        <br>

        <label for="essay">Who else will be traveling with you?</label> <textarea name="essay" id="essay">
        </textarea><br>
        <br>

        <input type="button" value="Click Me"><br>
        <!--keep in for now, probably will delete-->
        <br>

        <input type="submit" class="test" id="lindaSubmit"> <br>
        <!--defaults to submit on the name of the button-->
        <br>

        <input type="reset" id="lindaReset"> <br>
        <!--resets the form-->


    </form>

    <!-- Image and Description Table created in JavaScript - Day 6 Assignment -->
    <div id="lindaTable"></div> 

</body>

<script src="script.js"></script>
<?php include_once("footer.php"); ?>

</html>