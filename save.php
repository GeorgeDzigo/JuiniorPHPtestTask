<?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require_once './db.php';
            $sku = htmlspecialchars($_POST['sku'], ENT_QUOTES);
            $n = htmlspecialchars($_POST['name'], ENT_QUOTES);
            $price = htmlspecialchars($_POST['price'], ENT_QUOTES);
            // Size (MB)
            if(strlen($_POST['mb']) != 0) {
                  $mb = $_POST['mb'];
                  $hcm = null;
                  $wcm = null;
                  $lcm = null;
                  $wkg = null;
             
            
            }


            else if(strlen($_POST['hcm']) != 0) {
                  // Height, width, length (CM)
                  $hcm = $_POST['hcm'];
                  $wcm = $_POST['wcm'];
                  $lcm = $_POST['lcm'];
                  $mb = null;
                  $wkg = null;
            }
            // Weight 
            else if(strlen($_POST['kg']) != 0) {
                  $wkg = $_POST['kg'];
                  $mb = null;
                  $hcm = null;
                  $wcm = null;
                  $lcm = null;
            }
            $insert = new Save($sku, $n, $price, $mb, $hcm, $wcm, $lcm, $wkg);
            $insert->insertProduct();
            

            header("Location: ./public/");


      } else {
            header("Location: ./public/");
            echo "not post";
      }
