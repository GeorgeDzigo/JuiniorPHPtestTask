<?php



if($_SERVER["REQUEST_METHOD"] == 'POST'){
      require_once './db.php';
      
}

else {
      header("location: ./public/");
}