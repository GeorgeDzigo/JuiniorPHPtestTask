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
  
 
      <form action="../save.php" method="POST">
            <header> 
                  <h3 style="display: inline;">Product Add</h3>
                  <div class="funcs">
                        <input  type="submit" value="Save">
                        <a href="./index.php">Cancel</a>
                  </div>
            </header>

            <center>
                  <hr style="width: 1850px;" class="hr">     
            </center>

<div class="inputs">
      <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">SKU</label>
            <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="SKU">
            </div>
      </div>
      
      <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
            </div>
      </div>

      <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Price ($)</label>
            <div class="col-sm-10">
                  <input type="decimal" class="form-control" id="inputEmail3" placeholder="Price">
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


      
      
</div>
</form>
      
      <!-- Scripts -->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- My Scripts -->
    <script src="js/index.js"></script>
  </body>
</html>