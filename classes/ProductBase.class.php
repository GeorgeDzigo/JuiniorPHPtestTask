<?php
require_once '../db.php';



abstract class MainProductLogic
{
    abstract public static function create($product);
    abstract public static function products();
    abstract public function delete($id);    
}

class ProductBaseClass extends MainProductLogic
{
    public static function create($product)
    {

        $product =  array_map(function ($v) {
            return $v == "" ? null : $v;
        }, $product);

        $stmt = Connection::db()->prepare("INSERT INTO products (sku, name, price, mb, dimension, kg)
                                                        VALUES (:sku, :name, :price, :mb, :dimension, :kg)");

        $dimension = "{$product['hcm']}x{$product['wcm']}x{$product['lcm']}";
        if(strlen($dimension) == 2) $dimension = null;

        $stmt->bindParam(':sku', $product['sku']);
        $stmt->bindParam(':name', $product['name']);
        $stmt->bindParam(':price', $product['price']);
        $stmt->bindParam(':mb', $product['mb']);
        $stmt->bindParam(':dimension', $dimension);
        $stmt->bindParam(':kg', $product['kg']);
        $stmt->execute();
        
        return header("Location: ./index.php");
    }


    public static function products()
    {
        $data = [];

        $stmt = Connection::db()->query('SELECT * FROM products');
        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $row = array_filter($row, function($v) {return $v != null;});
            $duplicate = array_values($row); 
            $row['type'] = $duplicate[count($duplicate) - 1] . " " . array_keys($row)[count($duplicate) - 1]; 
            $data[] = $row;
        }
        return $data;
    }

    public function delete($id)
    {
        // 
    } 


    /* Setters and Getters */
    
    
}
