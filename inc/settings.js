
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
    var phone = $('#phone').val();
    var fullname = $('#fullname').val();
    var address = document.getElementById('address').value;
    var cart_id = document.getElementById('cart_id').value;
    amount = amount*100;
    if (email == '' || address == '' || phone == '' || fullname == '') {
      alert('Please fill all fields');
    }else{
      var handler = PaystackPop.setup({
      key: 'pk_test_18e695b12a9f4f345d816405a442c53fd531d945',
      email: email,
      amount: amount,
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: fullname,
                variable_name: "mobile_number",
                value: phone
            }
         ]
      },
      callback: function(response){
          alert('Payment Successful ');
          $.ajax({
                url: "checkout.php?payment=" + response.reference+"&address="+address+"&email="+email+"&cart_id="+cart_id+"&phone="+phone+"&fullname="+fullname,
                type: "GET",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    var responseMe = data.trim();
                    if (responseMe == 'done') {
                      alert('Check your mail, your Order ID has been sent to you');
                        window.location.href = 'order-detail.php?orderID='+cart_id;
                    }if(responseMe == 'Transaction was unsuccessful'){
                         alert('Transaction Unsuccessful');
                    }else if(responseMe == 'error'){
                         alert('Something Happened');
                    } else {
                        //Do something here
                        //alert('Error! Try Again.');
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
  }

   $("#checkout").on('submit',(function(e) {
  e.preventDefault();
   payWithPaystack();
  }));