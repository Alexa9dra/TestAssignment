<?php include 'addproductheader.php'; ?>

<section class='hide_info'>
    <?php include '../../backend/core/Database.php';
    $db = new Database;
    $i=0;

    foreach ($db->getAllSKU() as $row): ?>
        <div id='sku_<?php echo $i; ?>'>
            <?php echo $row['sku'] . '<br>';
            $i++;?>
        </div>
    <?php endforeach;?>

    <div id='count'>
        <?php echo $i;?>
    </div>
</section>

<section class='product-add-section'>
    <form action='../../backend/addProduct.php' method='post' id='product_form'>
        <div class='product-information'>
            <div class="info">
                <label for='sku' class='product-information__title'>
                    SKU
                </label>

                <input class='product-information__input' type='text' name='sku'
                      value='' id='sku'>
                <span class="error" id="errorsku"></span>
            </div>
            <!--/.info-->
            <div class="info">
                <label for='name' class='product-information__title'>
                    Name
                </label>

                <input class='product-information__input' type='text' name='name'
                      value='' id='name'>
                <span class="error" id="errorname"></span>
            </div>
            <!--/.info-->
            <div class="info">
                <label for='price' class='product-information__title'>
                    Price ($)
                </label>

                <input class='product-information__input' type='text' name='price'
                      value='' id='price'>
                <span class="error" id="errorprice"></span>
            </div>
        </div>
        <!--/.product-information-->
        <div class='product-switcher'>
            <label for="productType" class='product-switcher__title'>
                Type Switcher
            </label>

            <select name='type' id='productType' onchange='switchTypeFunction()'>
                <option value='default'>Types</option>
                <option value='DVD' id='DVD'>DVD</option>
                <option value='Furniture' id='Furniture'>Furniture</option>
                <option value='Book' id='Book'>Book</option>
            </select>
        </div>
        <!--/.product-switcher-->
        <div class='product-form' id='attributes'>
            <div class='product-information__description'>
                Please, choose type of the product
            </div>
            <!--/.product-information__description-->
        </div>
        <!--/.product-form-->
        <div class='info'>
            <div class='product-information__description'>
                *Numeric attributes (price, size etc.) must have the form like "10",
                      "10.1" or "10.15"
            </div>
            <!--/.product-information__description-->
        </div>
        <!--/.info-->
    </form>
</section>

<?php include 'footer.php';?>
