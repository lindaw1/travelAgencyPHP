<!-- function to create a new agent.
The script that I created for Day 3 Assignment included an implode feature
which didn't work with the new "insert-agent.php".  Therefore I copied the file 
from the professor.  See "functionsImplode.php for my work." -->

<?php

    function ConnectDB(){
    
        $link = mysqli_connect('localhost', 'admin', 'P@ssw0rd', 'travelexperts');
        if (!$link){
            print("There was an error connecting:". mysqli_errno($link) . " -- " . mysqli_error($link));
            exit;
        }
        return $link;
    }

    function CloseDB($link) {
        mysqli_close($link);
    }

    function AgentCreate ($agent_data){
        $dbh = ConnectDB();

        $sql = "INSERT INTO agents (
            AgtFirstName,
            AgtMiddleInitial,
            AgtLastName,
            AgtBusPhone,
            AgtEmail,
            AgtPosition,
            AgencyId) 
            VALUES (?,?,?,?,?,?,?)";

        $stmt = mysqli_prepare($dbh, $sql);
        mysqli_stmt_bind_param($stmt, 'ssssssi',
            $agent_data["AgtFirstName"],
            $agent_data["AgtMiddleInitial"],
            $agent_data["AgtLastName"],
            $agent_data["AgtBusPhone"],
            $agent_data["AgtEmail"],
            $agent_data["AgtPosition"],
            $agent_data["AgencyId"]);
        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        
        CloseDB($dbh);
        return $result;
    }

?>