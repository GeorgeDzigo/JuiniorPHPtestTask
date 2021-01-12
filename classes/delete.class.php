<?php
require_once '../db.php';

class Delete extends DB {
      public function delete($a) {
            $sql = $this->connect()->prepare("DELETE FROM products WHERE unique_id = :id");
            foreach($a as $v){
                  $sql->bindValue(":id", reid($v)); 
                  $sql->execute();
            }
            header("Location: ./index.php");
      }
}