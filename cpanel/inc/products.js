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

function turnOff(product_id) {
  //alert(product_id);
   var conf = confirm("turn off this product?");

    if (conf == true) {
   var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("product-tab"+product_id).innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "inc/turnOff.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("product_id="+product_id);
   }
}

function turnOn(product_id) {
  //alert(product_id);
   var conf = confirm("turn on this product?");

    if (conf == true) {
   var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("product-tab"+product_id).innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "inc/turnOn.php", true);
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
	//alert('dufhnvudvh');
	 var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("mycart").innerHTML = xhttp.responseText;
            alert('Item added to cart');
          }
       };
       xhttp.open("POST", "inc/add_to_cart.php", true);
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

function confirmOrder(){
	var xhttp = new XMLHttpRequest();
  var o = document.getElementById("order_id").value;
  //alert(o)
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("myorders").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "inc/confirmOrder.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("order_id="+o);
}

 function myFunction() {
          var copyText = document.getElementById("wish_id");
          copyText.select();
          document.execCommand("Copy");
          alert("Copied the text: " + copyText.value);
    }

    function confirmShop(s){
      event.preventDefault();
      var action = 'C';
      var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("pending").innerHTML = xhttp.responseText;
              }
           };
           xhttp.open("POST", "inc/shopAction.php", true);
           xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhttp.send("shop_id="+s+"&action="+action);
    }

    function deleteShop(s){
      event.preventDefault();
      var action = 'D';
      var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("pending").innerHTML = xhttp.responseText;
              }
           };
           xhttp.open("POST", "inc/shopAction.php", true);
           xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhttp.send("shop_id="+s+"&action="+action);
    }

    function deleteShop2(s){
      event.preventDefault();
      var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("oldseller").innerHTML = xhttp.responseText;
              }
           };
           xhttp.open("POST", "inc/oldseller.php", true);
           xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhttp.send("shop_id="+s);
    }

    function confirmPayment(s,p){
       event.preventDefault();
      var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("pendingPayments").innerHTML = xhttp.responseText;
              }
           };
           xhttp.open("POST", "inc/paymentAction.php", true);
           xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhttp.send("shop_id="+s+"&payment_id="+p);
    }

     function searchSales(){
       event.preventDefault();
       var s = document.getElementById('searchy').value;
      var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("search-order").innerHTML = xhttp.responseText;
              }
           };
           xhttp.open("POST", "inc/search-order.php", true);
           xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhttp.send("order_id="+s);
    }

    function searchme(){
       event.preventDefault();
       var s = document.getElementById('search').value;
      var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("myproducts").innerHTML = xhttp.responseText;
              }
           };
           xhttp.open("POST", "inc/search-pro.php", true);
           xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhttp.send("value="+s);
    }

 