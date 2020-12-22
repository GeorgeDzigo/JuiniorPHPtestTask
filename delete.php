<?php



if($_SERVER["REQUEST_METHOD"] == 'POST'){
      require_once './db.php';
      $sql = $pdo->prepare("DELETE FROM products WHERE unique_id = :id");
      foreach($_POST as $v){
            $sql->bindValue(":id", $v);
            $sql->execute();
      }
      header("location: ./public/");
}

else {
      header("location: ./public/");
}