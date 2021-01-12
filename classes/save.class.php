<?php
require_once '../db.php';
function gen($a) {
      $cs = "abcdefghijklmnopqrstuvwxyz123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
      $cs = str_split($cs, 1);
      shuffle($cs);
      $cs = array_reverse($cs);
      return join("",array_slice($cs, 0, $a));
}

class Save extends DB {
      public function insertProduct($sku, $n, $price, $mb , $hcm, $wcm, $lcm, $wkg) {
            $bnd = array_map(function($x) {
                  return $x == "" ? null : $x;
            }, [$sku, $n, $price, $mb, $hcm, $wcm, $lcm, $wkg]);
            $data = $this->connect()->prepare("INSERT INTO products (sku, name, price, mb, height, width, length, kg, unique_id)
                  VALUES(:s, :n, :p, :m, :h, :w, :l, :k, :uv)
            ");
            $data->bindValue(':s', $bnd[0]);
            $data->bindValue(':n', $bnd[1]);
            $data->bindValue(':p', $bnd[2]);
            $data->bindValue(':m', $bnd[3]);
            $data->bindValue(':h', $bnd[4]);
            $data->bindValue(':w', $bnd[5]);
            $data->bindValue(':l', $bnd[6]);
            $data->bindValue(':k', $bnd[7]);
            $data->bindValue(':uv', gen(7));
            $data->execute();
            header("Location: ./add.php");
      }
}