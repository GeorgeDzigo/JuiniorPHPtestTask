<?php
require_once '../db.php';

class Show extends DB {
      private $datas;

      public function set() {
            $query = $this->connect()->query("SELECT * FROM products");
            $query->execute();
            if($query->rowCount() > 0){
            while($row = $query->fetch(PDO::FETCH_ASSOC)) $this->datas[] = $row;
            } else $this->datas = null;
      }

      public function get() {
            if($this->datas != null) return $this->datas;
            else return 0;
      }
}