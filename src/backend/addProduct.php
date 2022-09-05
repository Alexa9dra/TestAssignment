<?php
    include 'autoload.php';

    $db = new Database;

    //Creates product according to its type.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        switch ($_POST['type']) {
            case 'DVD':
                $product = new Disk($_POST['sku'], $_POST['name'], $_POST['price'],
                      $_POST['type']);
                $product->createAttribute($_POST['size']);
                break;
            case 'Furniture':
                $product = new Furniture($_POST['sku'], $_POST['name'], $_POST['price'],
                      $_POST['type']);
                $product->createAttribute($_POST['height'] . 'x' . $_POST['width']
                      . 'x' . $_POST['length']);
                break;
            case 'Book':
                $product = new Book($_POST['sku'], $_POST['name'], $_POST['price'],
                      $_POST['type']);
                $product->createAttribute($_POST['weight']);
                break;

            default:
                break;
        }

        $db->insert($product);
    }

    header("location: ../../../index.php");
    exit;
