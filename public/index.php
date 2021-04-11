<?php
require_once '../classes/show.class.php';
require_once '../id.php';
$data = new Show();
$datas = $data->getData();
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
  <?php  
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
            require_once '../classes/delete.class.php';
            $del = new Delete();
            $del->delete($_POST);
      }
  ?>
      <header> 
            <h3 style="display: inline;">Product List</h3>
            <div class="funcs">
                  <a href="./add.php" class="a">Add</a>
                  <a class="a" onclick="document.getElementById('delete').submit()">Mass Delete</a>
            </div>
      </header>

      <center>
            <hr style="width: 87%;" class="hr">     
      </center>
     
      <div class="products">
      <form id="delete" action="<?= $_SERVER['PHP_SELF']?>" method="POST">
            <!-- While loop-->
                  <?php
                  if($datas != 0){
                  foreach($datas as $v):
                        
                  ?>
                  <div class="cards d-flex justify-content-center" style="display:inline-block!important">
            
                        <div class="card" style="width: 18rem;">
                              <div class="card-body">
                              <input type="checkbox" value="<?=id($v["unique_id"])?>" name="<?= id($v['unique_id'])?>">
                                    <h5 class="card-title text-center"><?=$v["sku"]?></h5>
                                    <h5 class="card-title text-center"><?=$v["name"]?></h5>
                              </div>
                                    <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center prices"><?=$v["price"] . "$"?></li>
                                    <li class="list-group-item text-center" style="padding: 0.5rem .4rem !important;"><?= $v["size"]?></li>
                              </ul>
                        </div>
                  </div>
                  <?php 
                  endforeach;
                  }?>
            </form>

      </div>
     
      <!-- End While -->
     
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>