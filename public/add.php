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
            <header> 
                  <h3 style="display: inline;">Product Add</h3>
                  <div class="funcs">
                        <a class="a" onclick="inputChecker()">Save</a>
                        <a class="a" href="./index.php">Cancel</a>
                  </div>
            </header>

            <center>
                  <hr style="width: 87%;" class="hr">     
            </center>

<form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
      <div class="inputs">
            <div class="form-group row">
                  <label for="sku" class="col-sm-2 col-form-label">SKU</label>
                  <div class="col-sm-10">
                        <input 
                              type="text" 
                              class="form-control" 
                              id="string" 
                              placeholder="SKU" 
                              name="sku"
                        >
                  </div>
            </div>
            
            <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                        <input 
                              type="text"
                              class="form-control"
                              id="string"
                              placeholder="Name"
                              name="name"
                        >
                  </div>
            </div>

            <div class="form-group row">
                  <label for="price" class="col-sm-2 col-form-label">Price ($)</label>
                  <div class="col-sm-10">
                        <input 
                              type="decimal"
                              min="0.00" 
                              class="form-control" 
                              id="int-dec"
                              placeholder="Price"
                              name="price"
                              value=""
                        >
                  </div>
            </div>


            <div class="input-group mb-3" style="top: 20px;">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Type Switcher</label>

                  <select class="sizes-option" id="string" onchange="show()">
                        <option value="Type_Switcher">Type Switcher</option>
                        <option value="MB">MB</option>
                        <option value="CM">CM</option>
                        <option value="KG">KG</option>
                  </select>
            </div>


            <!-- MB -->
            <div class="form-group row size-type" id="mb">
                  <label for="size-mb" class="col-sm-2 col-form-label">Size (MB)</label>
                  <div class="col-sm-10">
                        <input 
                              type="decimal" 
                              class="form-control" 
                              id="int" 
                              placeholder="Size"
                              name="mb"
                              value=""
                        >
                  </div>
            </div>

            <!-- CM -->
            <div class="size-type" id="cm">
                  <div class="form-group row">
                        <label for="height-cm" class="col-sm-2 col-form-label">Height (CM)</label>
                        <div class="col-sm-10">
                              <input 
                                    type="decimal" 
                                    class="form-control" 
                                    id="int" 
                                    placeholder="Height" 
                                    name="hcm"
                                    value=""
                              >
                        </div>
                  </div>
                  <div class="form-group row">
                        <label for="width-cm" class="col-sm-2 col-form-label">Width (CM)</label>
                        <div class="col-sm-10">
                              <input 
                                    type="decimal" 
                                    class="form-control" 
                                    id="int" 
                                    placeholder="Width" 
                                    name="wcm"
                                    value=""
                              >
                        </div>
                  </div>
                  <div class="form-group row">
                        <label for="length-cm" class="col-sm-2 col-form-label">Length (CM)</label>
                        <div class="col-sm-10">
                              <input 
                                    type="decimal" 
                                    class="form-control" 
                                    id="int" 
                                    placeholder="Length" 
                                    name="lcm"
                                    value=""
                              >
                        </div>
                  </div>
            </div>
            <!-- KG -->
            <div class="form-group row size-type" id="kg">
                  <label for="weight-kg" class="col-sm-2 col-form-label">Weight (KG)</label>
                  <div class="col-sm-10">
                        <input 
                              type="decimal" 
                              class="form-control" 
                              id="int" 
                              placeholder="Weight" 
                              name="kg"
                              value=""
                        >
                  </div>
            </div>

            <p id="errors"></p>
            
      </div>
</form>
      
      <!-- Scripts -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- My Scripts -->
    <script src="js/index.js"></script>
  </body>
</html>