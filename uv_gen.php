<?php


function gen($a) {
      $cs = "abcdefghijklmnopqrstuvwxyz123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
      $cs = str_split($cs, 1);
      shuffle($cs);
      $cs = array_reverse($cs);
      return join("",array_slice($cs, 0, $a));
}
