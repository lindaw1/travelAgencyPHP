<title>Links</title>

<?php     include_once('pageHeader.php');?>
<body> 
    <section>
<?php
    include_once('variables.php');

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
</html>