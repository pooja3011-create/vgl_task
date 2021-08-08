<?php declare(strict_types=1);

    include_once './Config/database.php';
    include_once './src/Storage/products.php';
    include_once 'product_update.php';
    
    $database = new Database();
    $Update = new Update();
    $db = $database->getConnection();
    $item = new Product($db);
    $id =  $Update->productUpate();;
    if($item->deleteProduct($id)) {
        echo '\n'."Product deleted: $id".'\n';
    } else{
        echo 'Product could not be deleted.';
    }  
?>
