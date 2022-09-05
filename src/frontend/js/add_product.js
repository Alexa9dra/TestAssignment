//Function checkes which product type is selected and creates a form for attributes.
function switchTypeFunction() {
    const type = document.getElementById('productType');
    const attribute = document.getElementById('attributes');

    switch (type.value) {
        case 'DVD':
            attribute.innerHTML =
                `<div class='product-information dvd'>\n` +
                    `<div class="info">\n`+
                        `<label for='size' class='product-information__title'>\n` +
                            `Size (MB)\n` +
                        `</label>\n` +
                        `<!--/.product-information__title-->\n` +
                        `<input class='product-information__input' type='text'
                              name='size' value='' id='size'>\n` +
                        `<span class="error" id="errorsize"></span>\n` +
                        `</div>\n` +

                        `<div class='product-information__description'>\n` +
                        `Please, provide size\n` +
                    `</div>\n` +
                    `<!--/.product-information__description-->\n` +
                `</div>\n` +
                `<!--/.product-information dvd-->\n`;
            break;
        case 'Furniture':
            attribute.innerHTML =
                `<div class='product-information furniture'>\n` +
                    `<div class="info">\n`+
                        `<label for='height' class='product-information__title'>\n` +
                            `Height (CM)\n` +
                        `</label>\n` +
                        `<!--/.product-information__title-->\n` +
                        `<input class='product-information__input' type='text'
                              name='height' id='height'>\n` +
                        `<span class="error" id="errorheight"></span>\n` +
                    `</div>\n` +

                    `<div class="info">\n`+
                        `<label for='width' class='product-information__title'>\n` +
                            `Width (CM)\n` +
                        `</label>\n` +
                        `<!--/.product-information__title-->\n` +
                        `<input class='product-information__input' type='text'
                              name='width' id='width'>\n` +
                        `<span class="error" id="errorwidth"></span>\n` +
                    `</div>\n` +

                    `<div class="info">\n`+
                        `<label for='length' class='product-information__title'>\n` +
                            `Length (CM)\n` +
                        `</label>\n` +
                        `<!--/.product-information__title-->\n` +
                        `<input class='product-information__input' type='text'
                              name='length' id='length'>\n` +
                        `<span class="error" id="errorlength"></span>\n` +
                    `</div>\n` +

                    `<div class='product-information__description'>\n` +
                        `Please, provide dimensions\n` +
                    `</div>\n` +
                    `<!--/.product-information__description-->\n` +
                `</div>\n` +
                `<!--/.product-information furniture-->\n`;
            break;
        case 'Book':
            attribute.innerHTML =
                `<div class='product-information book'>\n` +
                    `<div class="info">\n`+
                        `<label for='weight' class='product-information__title'>\n` +
                            `Weight (KG)\n` +
                        `</label>\n` +
                        `<!--/.product-information__title-->\n` +
                        `<input class='product-information__input' type='text'
                              name='weight' id='weight'>\n` +
                        `<span class="error" id="errorweight"></span>\n` +
                    `</div>\n` +

                    `<div class='product-information__description'>\n` +
                        `Please, provide weight\n` +
                    `</div>\n` +
                    `<!--/.product-information__description-->\n` +
                `</div>\n` +
                `<!--/.product-information book-->\n`;
            break;
        default:
            attribute.innerHTML =
                `<div class='product-information__description'>\n` +
                    `Please, choose the type of the product\n` +
                `</div>\n` +
                `<!--/.product-information__description-->\n`;
    }
}

//Function checkes the input information and, if it is correct, goes to adding product.
function saveFunction() {
    const form = document.getElementById('product_form');
    const sku = document.getElementById('sku');
    const count = document.getElementById('count').textContent;
    const name = document.getElementById('name');
    const price = document.getElementById('price');
    const type = document.getElementById('productType');
    const size = document.getElementById('size');
    const height = document.getElementById('height');
    const width = document.getElementById('width');
    const length = document.getElementById('length');
    const weight = document.getElementById('weight');
    let dpattern = /(^\d)$|(^\d{1,}[.]?(?=\d)\d{0,2}\b)$/;
    let checker = [0, 0, 0, 0, 0, 0]

    if (name.value.length == 0) {
        errorname.textContent = '*Add name';
        checker[0] = 1;
    } else {
        errorname.textContent = '';
        checker[0] = 0;
    }

    if (price.value.length == 0 || !dpattern.test(price.value)) {
        errorprice.textContent = '*Add price or write it correct';
        checker[1] = 1;
    } else {
        errorprice.textContent = '';
        checker[1] = 0;
    }


    switch (type.value) {
      case 'DVD':
          if (size.value.length == 0 || !dpattern.test(size.value)) {
              errorsize.textContent = '*Add size (in Mb) or write it correct';
              checker[2] = 1;
          } else {
              errorsize.textContent = '';
              checker[2] = 0;
          }
          break;
      case 'Furniture':
          if (height.value.length == 0 || !dpattern.test(height.value)) {
              errorheight.textContent = '*Add height (in cm) or write it correct';
              checker[2] = 1;
          } else {
              errorheight.textContent = '';
              checker[2] = 0;
          }

          if (width.value.length == 0 || !dpattern.test(width.value)) {
              errorwidth.textContent = '*Add width (in cm) or write it correct';
              checker[3] = 1;
          } else {
              errorwidth.textContent = '';
              checker[3] = 0;
          }

          if (length.value.length == 0 || !dpattern.test(length.value)) {
              errorlength.textContent = '*Add length (in cm) or write it correct';
              checker[4] = 1;
          } else {
              errorlength.textContent = '';
              checker[4] = 0;
          }
          break;
      case 'Book':
          if (weight.value.length == 0 || !dpattern.test(weight.value)) {
              errorweight.textContent = '*Add weight (in Kg) or write it correct';
              checker[2] = 1;
          } else {
              errorweight.textContent = '';
              checker[2] = 0;
          }
          break;
      default:
        break;
    }

    if (sku.value.length == 0) {
        errorsku.textContent = '*Add sku';
        checker[5] = 1;
        return;
    } else {
      for (var j = 0; j<count; j++){
        var sku_j = document.getElementById('sku_'+j).textContent.trim();
        errorsku.textContent = sku_j == sku.value;
        if (sku_j == sku.value){
          errorsku.textContent = '*This SKU is already used';
          checker[5] = 1;
          return;
        } else {
          errorsku.textContent = '';
          checker[5] = 0;
        }
      }
    }

    if (checker[0]==0 & checker[1]==0 & checker[2]==0 & checker[3]==0 & checker[4]==0
            & checker[5]==0) {
        form.submit();
    }
}

function goToProductListFunction() {
    location.replace('../../../index.php');
}
