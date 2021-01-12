<?php
class DB {
      private $dbnm = "juniorphp";
      private $usernm = "root";
      private $pass = "gabogio210";
      
      protected function connect() {
            $pdo = new PDO("mysql:host=localhost;dbname=".$this->dbnm, $this->usernm, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
      }
}      