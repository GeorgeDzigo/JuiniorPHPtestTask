<?php
require_once '../db.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Junior PHP Test Task</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
  <form action="../delete.php" method="POST">
      <header> 
            <h3 style="display: inline;">Product List</h3>
            <div class="funcs">
                  <a href="./add.php">Add</a>
                  <input type="submit" value='Mass Delete'>
            </div>
      </header>

      <center>
            <hr style="width: 1850px;" class="hr">     
      </center>
      <?php
      $sql = $pdo->prepare("SELECT * FROM products");
      $sql->execute();
      while($row = $sql->fetch(PDO::FETCH_ASSOC)):

            if(gettype($row["mb"]) !== "NULL") $a = "Size: ".$row["mb"] . "MB";
            else if(gettype($row['kg']) !== "NULL") $a = "Weight: ".$row["kg"] . "KG";
            else $a = "Dimension: ". $row['height']."x".$row['width']."x".$row['length'];
      ?>
      <div class="cards d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                  <div class="card-body">
                  <input type="checkbox">
                        <h5 class="card-title text-center"><?=$row["sku"]?></h5>
                        <h5 class="card-title text-center"><?=$row["name"]?></h5>
                  </div>
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center"><?=$row["price"] . "$"?></li>
                        <li class="list-group-item text-center"><?=$a?></li>
                  </ul>
            </div>
            <?php endwhile?>
      </div>

      </form>
     
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>