<!DOCTYPE HTML>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Product List</title>

        <link href='/src/frontend/css/bootstrap-grid.min.css' rel='stylesheet'>
        <link href='/src/frontend/css/style.css' rel='stylesheet'>
        <script src='/src/frontend/js/product_list.js'></script>
    </head>

    <body>
        <header>
            <h1 class='header-title'>
                Product List
            </h1>
            <!--/.header-title-->
            <div class='header-buttons'>
                <button class='add-product-button' type='button'
                      onclick='goToAddProductFunction()' id='add-product-btn'
                      value='ADD'>ADD</button>
                <button class='delete-product-button' type='submit'
                      onclick='deleteFunction()' id='delete-product-btn'
                      value='MASS DELETE'>MASS DELETE</button>
            </div>
            <!--/.header-buttons-->
        </header>
