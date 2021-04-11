<?php
require_once '../db.php';
require_once '../id.php';

class Delete extends DB {
      public function delete($a) {
            foreach($a as $v){
                  $sql = $this->connect()->prepare("DELETE FROM products WHERE unique_id = :id");
                  $sql->bindValue(":id", reid($v)); 
                  $sql->execute();
            }
            header("Location: ./index.php");
      }
}