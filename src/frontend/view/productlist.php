<?php include 'productlistheader.php';?>

<section>
    <form action='src/backend/deleteProduct.php' method='post' id='product-list_form'>

        <div class='container'>
            <div class='row'>

                <?php $i=0;

                if($db->getAll() == null){
                    echo 'There is no products here. Please, add new product';
                } else {
                    foreach ($db->getAll() as $row): ?>
                        <div class='product col-12 col-sm-6 col-md-4 col-lg-3'>
                            <div class='product-info'>

                                <input class='delete-checkbox' type='checkbox'
                                      name='check_<?php echo $i; ?>' >

                                <div class='product-info__description'>
                                    <?php echo $row['sku'] . '<br>' . $row['name'] . '<br>'
                                          . $row['price'] . ' $<br>';

                                    switch ($row['type']) {
                                        case 'dvd':
                                            echo 'Size: ' . $row['attribute'] . '<br>';
                                            break;
                                        case 'furniture':
                                            echo 'Dimension: ' . $row['attribute'] . '<br>';
                                            break;
                                        case 'book':
                                            echo 'Weight: ' . $row['attribute'] . '<br>';
                                            break;
                                        default:
                                            echo 'There is no attributes for this product<br>';
                                            break;
                                    }
                                    $i++;?>
                                </div>
                                <!--/.product-info__description-->
                            </div>
                            <!--/.product-info-->
                        </div>
                        <!--/.product-->
                    <?php endforeach; }?>
                <div class='hide_info' id='count'>
                    <?php echo $i;?>
                </div>
                <!--/.hide_info-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </form>
</section>

<?php include 'footer.php';?>
