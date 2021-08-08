<?php

class Product
{
    // Connection
    private $conn;

    // Table
    private $db_table = "products";

    // Columns
    public $id;
    public $name;
    public $price;

    // Db connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // CREATE
    public function createProduct()
    {
        $sqlQuery = "INSERT IGNORE INTO products (name, price)
                VALUES ('$this->name', '$this->price')";
        if (mysqli_query($this->conn, $sqlQuery)) {
            $last_id = mysqli_insert_id($this->conn);
            return $last_id;
        } else {
            echo "ERROR: Could not able to execute $sqlQuery. " . mysqli_error($this->conn);
        }
    }
    // UPDATE
    public function updateProduct($price, $id)
    {
        $updateQuery = "UPDATE
                        " . $this->db_table . "
                    SET
                        price = '$price'
                    WHERE
                        id = $id";
        if (mysqli_query($this->conn, $updateQuery)) {
            return true;
        } else {
            echo "ERROR: Could not able to execute $updateQuery. " . mysqli_error($this->conn);
        }
    }

    // DELETE
    public function deleteProduct($id)
    {
        $deleteQuery = "DELETE FROM " . $this->db_table . " WHERE id = $id";
        if (mysqli_query($this->conn, $deleteQuery)) {
            return true;
        } else {
            echo "ERROR: Could not able to execute $deleteQuery. " . mysqli_error($this->conn);
        }
    }

}
