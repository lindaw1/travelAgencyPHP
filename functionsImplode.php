<!-- // function to create a new agent.
// This file only works with "variable.php" file. Day 3 or 4 assignment.
// Because of the implode feature it doesn't work with the "insert-agent.php"
// file from Day 5 assignment.  It only works with the insert-agentDay3.php -->

<?php

// open the connection
function agentCreate(array $agent){
    $travelexperts = new mysqli('localhost', 'admin', 'P@ssw0rd', 'travelexperts');

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    // gathering data
    $result = array();
    foreach($agent as $k => $v) {
        $keys[] = $k;
        $values[] = $v;
    }
    $fields = implode(',', $keys); 
     
    // insert array into database
    $stmt = $travelexperts->prepare("INSERT INTO agents ($fields) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('sssssi', 
        $values[0], 
        $values[1], 
        $values[2], 
        $values[3], 
        $values[4], 
        $values[5]);

        /* execute prepared statement */
        $result = $stmt->execute();

        // check if the information was inserted
        if ($result) {
            print("<h1>Insert was successful</h1>");
        } else {
            print("<h1>Insert Failed</h1>");
        }
        printf("%d Row inserted.\n", $stmt->affected_rows);



/* close connection */
$travelexperts->close();


}



?>