<title>Links</title>

<?php
include_once('pageHeader.php');
include_once('variables.php');
?>


<body>


<?php
$destinationArray = array(
    "France">="https://uk.france.fr/en",
    "Italy">="http://www.italia.it/en/home.html",
    "Montreal">="https://www.mtl.org/en",
    "Banff">="https://www.banfflakelouise.com/",
    "Vancouver">="https://www.tourismvancouver.com/",
    "Nova Scotia">="https://www.novascotia.com/");


echo"<table>";
        foreach($destinationArray as $key => $value) {
            echo"<tr><td><a href:$key>$key</a></td><td>$value</td></tr>";
        };
echo"</table>";


    // print("<table align='left border='1' cellpadding='3' cellspacing='0'>");
    // for($row=1; $row<=6; $row++) {
    //     echo "<tr>";
    //     echo "<td>$row</td>";  
    //      print("<td><a href='page$row.php'>Link to Page $row.</a></td>");
    // print("</table>");   

?>

    
</body>
</html>