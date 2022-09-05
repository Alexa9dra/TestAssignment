<?php
    // Function helps find the path to classes from index.php ans also from backend files.
    function autoload($class) {
        $pathes = array ('core/', 'core/products/');

        foreach($pathes as $path) {
            $file_path = $path . $class . '.php';

            if(is_file('src/backend/' . $file_path)) {
                include 'src/backend/' . $file_path;
            } elseif(is_file($file_path)) {
                    include $file_path;
                }
        }
    }

    spl_autoload_register('autoload');
