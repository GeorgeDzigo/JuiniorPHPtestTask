<?php
function id($a) {
      $b = strrev(bin2hex($a));
      // $a = hex2bin(strrev($b));
      return $b;   
}

function reid($a) {
      // $b = strrev(bin2hex($a));
      $b = hex2bin(strrev($a));
      return $b;   
}