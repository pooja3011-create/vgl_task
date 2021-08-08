<?php declare(strict_types=1);
  include_once './Config/database.php';
  include_once './src/Storage/products.php';

Class Insert {
    public function productInsert() {
        $database = new Database();
        $db = $database->getConnection();
        
        $item = new Product($db);
        
        $item->name = "Staubsauger";
        $item->price = "100,00";
        $productID = $item->createProduct(); 
            if($productID) {
                echo "Product created: $productID $item->name $item->price";
            } else{
                echo 'Product could not be created.';
            }
            return $productID;
        }
    }
?>
