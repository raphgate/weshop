 function getCategory(){
    
    var category = document.getElementById('category').value;
    //alert(product);
     if (category == 'Mobile Phone') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/mobile-phones.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(category == 'Computer'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/computer.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(category == 'Electronics'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/electronics.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(category == 'Other'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/main_other.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(category == 'Repair'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/repairs.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }
  }


   function getSubCategory(){
    
    var sub_category = document.getElementById('sub_category').value;
    //alert(product);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("the_product").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/the-product.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("sub_category="+sub_category);
  }

  function getForm(){
    
    var sub_category = document.getElementById('sub_category').value;
    //alert(product);
        if (sub_category == 'Smart Phone' || sub_category == 'Tablet') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("the-form").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/smart-phone.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send();
     }else if(sub_category == 'Laptop And Notebook' || sub_category == 'Used Laptop'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("the-form").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/laptop.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send();
     }else if(sub_category == 'Television'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("the-form").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/television.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send();
     }else if(sub_category == 'Accessory'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("the-form").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/accessory.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send();
     }else if(sub_category == 'Other'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("the-form").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/orther.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send();
     }
  }


   function checkPassword(){
            var newP = document.getElementById('newP').value;
            var conP = document.getElementById('conP').value;
            if (newP != conP) {
                document.getElementById('msg').innerHTML='Password does not match';
                document.getElementById('mybtn').style.setProperty('display','none');
            }else if(newP == conP || (newP=='' && conP=='')){
                document.getElementById('msg').innerHTML='';
               document.getElementById('mybtn').style.setProperty('display','block');
            }
        }

        function checkPassword2(){
            var newP = document.getElementById('newP').value;
            var conP = document.getElementById('conP').value;
            if ((newP != '' && conP != '') && (newP != conP) ) {
                document.getElementById('msg').innerHTML='Password does not match';
                document.getElementById('mybtn').style.setProperty('display','none');
            }else if(newP == conP || (newP=='' && conP=='')){
                document.getElementById('msg').innerHTML='';
               document.getElementById('mybtn').style.setProperty('display','block');
            }
        }


        function payWithPaystack(){
    event.preventDefault();
    var amount = $('#amount').val();
    var email = $('#email').val();
    var address = document.getElementById('address').value;
    amount = amount*100;
    var handler = PaystackPop.setup({
      key: 'pk_test_545db562da007d1a0307d64d5eb91cd954d76dfe',
      email: email,
      amount: amount,
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          alert('Payment Successful ');
          $.ajax({
                url: "https://yelocode.com/grathe/checkout.php?payment=" + response.reference+"&address="+address+"&email="+email,
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    if (data == 'done') {
                        window.location.href = 'customer-dashboard.php';
                    }else if(data == 'guest'){
                         alert('Check your email, a mail has been sent to you containing your order ID');
                    }
                     else {
                        //Do something here
                        alert('Error! Try Again.');
                        // window.location.reload();
                    }
                }
            });
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }


   function getCategory_2(){
    
    var category = document.getElementById('category').value;
    //alert(product);
     if (category == 'Mobile Phone') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/mobile-phones_2.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(category == 'Computer'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/computer_2.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(category == 'Electronics'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/electronics_2.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }
  }


   function getSubCategory_2(){
    
    var sub_category = document.getElementById('sub_category').value;
    //alert(product);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("the_product").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "product-pages/the-product_2.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("sub_category="+sub_category);
  }
  