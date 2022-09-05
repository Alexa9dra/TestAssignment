/**Function verify, if there is at least one checked checkbox.
  *If so, than it goes to deleting the product/s.
  */
function deleteFunction() {
    const form = document.getElementById('product-list_form');
    const count = document.getElementById('count').textContent;

    for(var i=0; i<count; i++) {
      if(document.getElementsByName('check_'+i)[0].checked) {
        form.submit();
      }
    }
}

function goToAddProductFunction() {
    location.replace('/src/frontend/view/addproduct.php');
}
