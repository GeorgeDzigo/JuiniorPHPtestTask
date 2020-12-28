<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
      require_once './id.php';
      require_once './db.php';
      $dl = new Delete();
      $dl->delete($_POST);
      header("location: ./public/");
}

else header("location: ./public/");
