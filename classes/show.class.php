<?php
require_once '../db.php';

class Show extends DB {

      public function set() {
            $query = $this->connect()->query("SELECT * FROM products"); $query->execute();
            $data = [];
            if($query->rowCount() > 0){
                  while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                        $row = array_filter($row, function($x) {
                              return $x != null;
                        } );
                        $duplicateRow = array_values($row); array_pop($row);
                        $row['size'] =  $duplicateRow[count($duplicateRow) - 1];
                        $data[] = $row;
                  }
            } 
            else $data = null;
            return $data;
      }

      public function getData() {
            if($this->set() != null) return $this->set();
            else return null;
      }
}