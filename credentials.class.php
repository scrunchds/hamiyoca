<?php

#   $url = "https://bitminter.com;
#   $port = "3333";
#   $username = "scrunchds";
#   $password = "password";

    $response = json_decode(file_get_contents("us2.bitminter.com:3333"),true);
    $url = $response[0]['name'];
    $port = $response[0]['port'];
    $username = "scrunchds";
    $password = "123";
?>
