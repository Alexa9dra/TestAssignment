<?php
    include 'src/backend/autoload.php';

    $db = new Database;
    $db->getAll();

    include 'src/frontend/view/productList.php';
