<?php


      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require_once './db.php';
            $sku = $_POST['sku'];
            $n = $_POST['name'];
            $price = $_POST['price'];
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
            else if(strlen($_POST['hcm']) != 0) {
                  $wkg = $_POST['wkg'];
                  $mb = null;
                  $hcm = null;
                  $wcm = null;
                  $lcm = null;
            }
            

            $statement = $pdo->prepare("INSERT INTO products (sku, name, price, mb, height, width, length, kg)
                  VALUES(:s, :n, :p, :m, :h, :w, :l, :k)
            ");
            $statement->bindValue(':s', $sku);
            $statement->bindValue(':n', $n);
            $statement->bindValue(':p', $price);
            $statement->bindValue(':m', $mb);
            $statement->bindValue(':h', $hcm);
            $statement->bindValue(':w', $wcm);
            $statement->bindValue(':l', $lcm);
            $statement->bindValue(':k', $wkg);
            $statement->execute();

            header("Location: ./public/");


      } else {
            header("Location: ./public/");
            echo "not post";
      }
