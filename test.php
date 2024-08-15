<?php


$jsonDataPosted = json_decode(file_get_contents('php://input'), true);
if ($jsonDataPosted!== null) {
    $output = array("responseType" => "success", "response" => $jsonDataPosted);
} 
print json_encode($output);
?>