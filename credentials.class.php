<?php

#   $url = "http://localhost";
#   $port = "8332";
#   $username = "bitcoind";
#   $password = "password";

    $response = json_decode(file_get_contents("http://nodes.p2pool.co/pools.dat"),true);
    $url = $response[0]['name'];
    $port = $response[0]['port'];
    $username = "19kReT9trCKwgmYqjAgCtpdHwSNgVz61LE";
    $password = "1234";
?>
