<?php

    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'scandiwebdb');
    define('TNAME', 'products');

    class Database
    {
        public $connection;

        function __construct() {
            $this->connection = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
        }

        /**Function findes all objects data in database.
          *
          *@return {object} $result The object with data about all products.
          */
        function getAll() {
            $sql = 'SELECT sku, name, price, type, attribute FROM products ORDER BY sku';
            $result = $this->connection->query($sql);

            if ($result->num_rows > 0) {
                return $result;
            }
        }

        /**Function findes all SKU values in database.
          *
          *@return {object} $result The object with data about SKU of all products.
          */
        function getAllSKU() {
            $sql = 'SELECT sku FROM products';
            $result = $this->connection->query($sql);

            if ($result->num_rows > 0) {
                return $result;
            }
        }

        /**Function insert new product with entered data.
          *
          *@param {object} $prod The object with data of new product.
          */
        function insert($prod) {
            $sql = 'INSERT INTO ' . TNAME . ' (sku, name, price, type, attribute)
                  VALUES ("' . $prod->sku . '", "' . $prod->name . '", "' .
                  $prod->price . '", "' . $prod->type . '", "' . $prod->attribute . '")';

            mysqli_query($this->connection, $sql);
        }

        /**Function deletes product according to its SKU.
          *
          *@param {string} $skuvalue SKU of product that will be deleted.
          */
        function delete($skuvalue) {
            $sql = 'DELETE FROM ' . TNAME . ' WHERE sku="' . $skuvalue . '"';

            mysqli_query($this->connection, $sql);
        }
    };
