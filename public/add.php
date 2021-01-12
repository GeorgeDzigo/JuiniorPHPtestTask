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
            require_once '../classes/save.class.php';
            $s = new Save();
            $s->insertProduct(htmlspecialchars($_POST['sku'], ENT_QUOTES), htmlspecialchars($_POST['name'], ENT_QUOTES), htmlspecialchars($_POST['price'], ENT_QUOTES),
                                               $_POST['mb'] , $_POST['hcm'] , $_POST['wcm'], 
                                               $_POST['lcm'], $_POST['kg']); 
           } 
      ?>
      <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
            <header> 
                  <h3 style="display: inline;">Product Add</h3>
                  <div class="funcs">
                        <input  type="button" value="Save" class="a" id="btn" onclick="inputChecker()" onclick="checkErrors()">
                        <a href="./index.php" class="a" id="b">Cancel</a>
                  </div>
            </header>

            <center>
                  <hr style="width: 87%;" class="hr">     
            </center>

<div class="inputs">
      <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">SKU</label>
            <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="SKU" name="sku">
            </div>
      </div>
      
      <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="name">
            </div>
      </div>

      <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Price ($)</label>
            <div class="col-sm-10">
                  <input type="decimal" min="0.00" class="form-control" id="inputEmail3" placeholder="Price" name="price">
            </div>
      </div>


      <div class="input-group mb-3" style="top: 20px;">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Type Switcher</label>

            <select class="custom-select" id="inputGroupSelect01" onchange="show()">
                  <option value="Type_Switcher">Type Switcher</option>
                  <option value="MB">MB</option>
                  <option value="CM">CM</option>
                  <option value="KG">KG</option>
            </select>
      </div>


      <!-- MB -->
      <div class="form-group row" id="mb">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Size (MB)</label>
            <div class="col-sm-10">
                  <input type="decimal" class="form-control" id="inputEmail3" placeholder="Size"name='mb'>
            </div>
      </div>

      <!-- CM -->
      <div id="cm">
            <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Height (CM)</label>
                  <div class="col-sm-10">
                        <input type="decimal" class="form-control" id="inputEmail3" placeholder="Height" name="hcm">
                  </div>
            </div>
            <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Width (CM)</label>
                  <div class="col-sm-10">
                        <input type="decimal" class="form-control" id="inputEmail3" placeholder="Width" name="wcm">
                  </div>
            </div>
            <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Length (CM)</label>
                  <div class="col-sm-10">
                        <input type="decimal" class="form-control" id="inputEmail3" placeholder="Length" name="lcm">
                  </div>
            </div>
      </div>
      <!-- KG -->
      <div class="form-group row" id="kg">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Weight (KG)</label>
            <div class="col-sm-10">
                  <input type="decimal" class="form-control" id="inputEmail3" placeholder="Weight" name="kg">
            </div>
      </div>

      <p id="errors" name="errors"></p>
      
</div>
</form>
      
      <!-- Scripts -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- My Scripts -->
    <script src="js/index.js"></script>
  </body>
</html>