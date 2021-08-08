<?php declare(strict_types=1);
    include_once './Config/database.php';
    include_once './src/Storage/products.php';
    include_once 'product_create.php';

    Class Update {
        public function productUpate() {
        $database = new Database();
        $Insert = new Insert();
        $db = $database->getConnection();
        
        $item = new Product($db);

        $price = "150,00";
        $id =  $Insert->productInsert();

        if($item->updateProduct($price,$id)) {
            echo '\n'."Product updated: $price";
        } else{
            echo 'Product could not be updated.';
        }
            return $id;
        }
    }
?>
