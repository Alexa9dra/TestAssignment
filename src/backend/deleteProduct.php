<?php
    include 'autoload.php';

    $db = new Database;

    //Findes checked checkbox and deletes the desired product.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product = $db->getAllSKU();
        $my_count = mysqli_num_rows($product);

        for ($x = 0; $x <= $my_count; $x++) {
            if (isset($_POST['check_' . $x]) == true ) {
                mysqli_data_seek($product,$x);
                $row=mysqli_fetch_row($product);

                $db->delete($row[0]);
            }
        }
    }

    header("location: ../../../index.php");
    exit;
