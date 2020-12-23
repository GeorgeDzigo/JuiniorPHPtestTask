<?php
require_once '../db.php';
require_once '../id.php';
$sql = $pdo->prepare("SELECT * FROM products");
$sql->execute();
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
                  <a href="./add.php" class='a'>Add</a>
                  <input type="submit" value='Mass Delete' class='a'>
            </div>
      </header>

      <center>
            <hr style="width: 1850px;" class="hr">     
      </center>
     
  <div class="products">
      <!-- While loop-->
            <?php
            while($row = $sql->fetch(PDO::FETCH_ASSOC)):
                  if(gettype($row["mb"]) !== "NULL") $a = "Size: ".$row["mb"] . "MB";
                  else if(gettype($row['kg']) !== "NULL") $a = "Weight: ".$row["kg"] . "KG";
                  else $a = "Dimension: ". $row['height']."x".$row['width']."x".$row['length'];
            ?>
            <div class="cards d-flex justify-content-center" style="display:inline-block!important">
      
                  <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <input type="checkbox" value="<?=id($row["unique_id"])?>" name="<?= $row['name']?>">
                              <h5 class="card-title text-center"><?=$row["sku"]?></h5>
                              <h5 class="card-title text-center"><?=$row["name"]?></h5>
                        </div>
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item text-center prices"><?=$row["price"] . "$"?></li>
                              <li class="list-group-item text-center" style="padding: 0.5rem .4rem !important;"><?=$a?></li>
                        </ul>
                  </div>
            </div>
            <?php endwhile?>
      </div>
     
      <!-- End While -->
      </form>
     
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>