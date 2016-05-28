<?php

#   $url = "http://minep2pool.com:9332";
#   $port = "9332";
#   $username = "19kReT9trCKwgmYqjAgCtpdHwSNgVz61LE";
#   $password = "1234";

    $response = json_decode(file_get_contents("http://nodes.p2pool.co/pools.dat"),true);
    $url = $response[0]['name'];
    $port = $response[0]['port'];
    $username = "19kReT9trCKwgmYqjAgCtpdHwSNgVz61LE";
    $password = "1234";
?>
