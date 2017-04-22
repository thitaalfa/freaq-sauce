<?php
        //Natas level 8 solution
        //http://natas8.natas.labs.overthewire.org/

$encodedSecret = "3d3d516343746d4d6d6c315669563362";

    function encodeSecret($secret) {
       return bin2hex(strrev(base64_encode($secret)));
    }

    function Decode($secret) {
        return base64_decode(strrev(hex2bin($secret)));
    }
    echo 'Password: ', Decode($encodedSecret);
?>
