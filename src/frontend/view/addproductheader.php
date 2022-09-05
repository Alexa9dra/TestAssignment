<!DOCTYPE HTML>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Product List</title>

        <link href='/src/frontend/css/style.css' rel='stylesheet'>
        <script src='/src/frontend/js/add_product.js'></script>
    </head>

    <body>
        <header>
            <h1 class='header-title'>
                Product Add
            </h1>
            <!--/.header-title-->
            <div class='header-buttons'>
                <button class='save-product-button' type='submit' onclick='saveFunction()'
                      id='save-product-btn' value='Save'>Save</button>
                <button class='cancel-product-button' onclick='goToProductListFunction()'
                      id='cancel-product-btn' value='Cancel'>Cancel</button>
            </div>
            <!--/.header-buttons-->
        </header>
