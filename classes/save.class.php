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
      public function insertProduct($post) {
            $post = array_map(function ($x)  {return $x == "" ? null : $x;} , $post);
            $data = $this->connect()->prepare("INSERT INTO products (unique_id, sku, name, price, mb, dimension, kg)
                  VALUES(:uv, :s, :n, :p, :m, :dimension, :k)
            ");
            $data->bindValue(':uv', gen(7));
            $data->bindValue(':s', $post["sku"]);
            $data->bindValue(':n', $post["name"]);
            $data->bindValue(':p', $post["price"]);
            $data->bindValue(':m', $post["mb"]);
            $data->bindValue(":dimension", "$post[hcm]x$post[wcm]x$post[lcm]");
            $data->bindValue(':k', $post["kg"]);
            $data->execute();
            header("Location: ./add.php");
      }
}