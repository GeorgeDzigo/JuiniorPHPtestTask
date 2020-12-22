<?php
      $pdo = new PDO('mysql:host=localhost;dbname=juniorphp', 'root', 'gabogio210');   
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);