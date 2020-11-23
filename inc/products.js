function deleteProduct(product_id) {
	//alert(product_id);
	 var conf = confirm("Delete this product?");

    if (conf == true) {
	 var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("myproducts").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "inc/deleteProduct.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("product_id="+product_id);
   }
}

function editProduct(product_id) {
	//alert(product_id);
	 var amount = prompt("Enter new price");
   var discount = prompt("Enter a discount price");
	 var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("myproducts").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "inc/editProduct.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("product_id="+product_id+"&amount="+amount+"&discount="+discount);
}

function addToCart(b){
  event.preventDefault();
	 var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
             if(xhttp.responseText == 'Error'){
              toastr.warning('Item not in stock');
            }else if(xhttp.responseText == 'failed'){
            toastr.warning('Failed to add item to cart');
            }else{
            document.getElementById("mycart").innerHTML = xhttp.responseText;
            toastr.info('Item added to cart');
            }
            
          }
       };
       xhttp.open("POST", "inc/add_to_cart.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("product_id="+b);
}

function addwishlist(b){
  //alert('dufhnvudvh');
   var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            if(xhttp.responseText == 'Error'){
              window.location = 'login.php';
            }else{
            document.getElementById("kraa").innerHTML = xhttp.responseText;
            alert('Item added to wishlist');
            }
          }
       };
       xhttp.open("POST", "inc/addwishlist.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("product_id="+b);
}


function Increase(b){
  var action = 'p';
  var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("cartino").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "inc/update_cart.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("product_id="+b+"&action="+action);
}

function Decrease(b){
   var action = 'm';
  var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("cartino").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "inc/update_cart.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("product_id="+b+"&action="+action);
   
}

function Remove(b){
  var action = 'r';
  var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("cartino").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "inc/update_cart.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("product_id="+b+"&action="+action);
}

function RemoveWhish(b){
  var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("cartino").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "inc/update_whish.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("product_id="+b);
}

function saveWishlist(c){
  var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("cartino").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "inc/save_wishlist.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("cart_id="+c);
}

function confirmOrder(o,s){
	var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("myorders").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "inc/confirmOrder.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("shop_id="+s+"&order_id="+o);
}

 function myFunction() {
          var copyText = document.getElementById("wish_id");
          copyText.select();
          document.execCommand("Copy");
          alert("Copied the text: " + copyText.value);
    }

    function guestCheckout(){
  var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("guest").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "inc/guestCheckout.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send();
}
function filterIt(){
      event.preventDefault();
      var fv = document.getElementById('filter_value').value;
      var cat = document.getElementById('category').value;
        document.getElementById('filter_space').style.setProperty('display','none');
        document.getElementById('loader').style.setProperty('display','block');
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById('loader').style.setProperty('display','none');
            document.getElementById('filter_space').style.setProperty('display','inherit');
            document.getElementById("filter_space").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("category="+cat+"&filter_value="+fv);
}
 