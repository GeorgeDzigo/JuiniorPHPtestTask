<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
      require_once './db.php';
      $dl = new Delete($_POST);
      $dl->delete();
      header("location: ./public/");
}

else header("location: ./public/");
