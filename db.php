<?php
require_once 'uv_gen.php';
require_once 'id.php';
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

class Save extends DB {
      public function __construct($sku = null, $n = null, $price = null, $mb = null, $hcm = null, $wcm= null, $lcm = null, $wkg = null) {
            $this->sku = $sku;
            $this->name = $n;
            $this->price = $price;
            $this->mb = $mb;
            $this->hcm = $hcm;
            $this->wcm = $wcm;
            $this->lcm = $lcm;
            $this->wkg = $wkg; 
      }

      public function insertProduct() {
            $data = $this->connect()->prepare("INSERT INTO products (sku, name, price, mb, height, width, length, kg, unique_id)
                  VALUES(:s, :n, :p, :m, :h, :w, :l, :k, :uv)
            ");
            $data->bindValue(':s', $this->sku);
            $data->bindValue(':n', $this->name);
            $data->bindValue(':p', $this->price);
            $data->bindValue(':m', $this->mb);
            $data->bindValue(':h', $this->hcm);
            $data->bindValue(':w', $this->wcm);
            $data->bindValue(':l', $this->lcm);
            $data->bindValue(':k', $this->wkg);
            $data->bindValue(':uv', gen(7));
            $data->execute();
      }

}
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

class Delete extends DB {
      public function __construct($arr){
            $this->a = $arr;
      }
      public function delete() {
            $sql = $this->connect()->prepare("DELETE FROM products WHERE unique_id = :id");
            foreach($this->a as $v){
                  $sql->bindValue(":id", reid($v));
                  $sql->execute();
            }
      }
}