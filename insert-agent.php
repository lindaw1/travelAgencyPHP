<?php

$newagent = array (
    "AgtFirstName" => "Linda",
    "AgtLastName" => "Wallace",
    "AgtBusPhone" => "(403) 555-1234",
    "AgtEmail" => "linda@gmail.com",
    "AgtPosition" => "Junior Agent",
    "AgencyId" => 2
);

//check if the phone number is input in the correct format
if preg_match(\([0-9]{3}\) [0-9]{3}-[0-9]{4}, "AgtBusPhone") {
    agentCreate($newagent);
} else {
    echo "Phone number is not right";
}
}

include_once('functions.php');



?>