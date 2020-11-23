 function getProduct(){
    
    var product = document.getElementById('product').value;
    //alert(product);
    var level = '1';
     if (product == 'Pen') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/pen.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Pencil'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/pencil.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Pen refills & cartridges'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/pen-refil.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Correction & Eraser'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/correction.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Sharpener'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/sharpener.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Highlighter & Marker'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/highlighter.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Board'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/board.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Lamination'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/lamination.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Binding'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/binding.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Files & Folders'){
      var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/files.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Binders'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/binders.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Display Pockets'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/display_pockets.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Document Wallet'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/document_wallet.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Labelling Accessories'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/labelling.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Envelopes'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/envelopes.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Indexing'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/indexing.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Stationery Box & Treys'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/box_treys.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Paper'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/paper.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Cards'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/cards.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Tagging'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/tagging.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Dictionary, Calendar, Maps and Organizers'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/dictionary.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Staplers and Accessories'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/staplers.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Ruler'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/ruler.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Measuring Tapes and Guages'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/measuring.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Binder Clips'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/binder_clips.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Fastener'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/fastener.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Perforators & Accessories'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/perforators.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Binder Clips'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/binder-clips.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Scissors & Cutters'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/scissors.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Pin & Clips'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/pin_clips.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Ink Stamp & Seal'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/ink_stamp.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Adhesives'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/adhesives.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Engraving & Embosser'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/engraving.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Clocks'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/clocks.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Rubber Bands'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/rubber_bands.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Calculator'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/calculator.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Socket & Extension'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/socket_extensions.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Surge Protector'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/socket_protector.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Socket Adaptors'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/socket_adaptors.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Uninterruptible Power Supply (UPS)'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/ups.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Inverters & Solar Panels'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/inverters.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Batteries'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/batteries.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Light Switches'){
      var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/light_switches.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Plugs'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/plugs.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Sockets'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/sockets.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Plug Adapter'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/plug_adapter.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Extension'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/extension.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Bulbs'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/bulbs.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Lamp Holder'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/lamp_holder.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Lamp'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/lamp.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if (product == 'Cash boxes' || product == 'Shelves and Filing Cabinets') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/cash_box.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Safes'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/safes.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Cupboards and Drawers'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/cupboard.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Executive Desks'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/executive_desk.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if (product == 'Writing Desk') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/writing_desk.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Computer Desk' || product == 'Credenza Desk' || product == 'Floating Desk' || product == 'Waiting Room Tables' || product == 'Coffee Tables' || product == 'Work Stations' || product == 'Conference Tables'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/computer_desk.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Corner Desk'){ 
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/corner_desk.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Reception Chair' || product == '24 Hour Chairs' || product == 'Big and Tall Chairs' || product == 'Computer Chairs' || product == 'Conference Chairs' || product == 'Drafting Chairs' || product == 'Ergonomic Chairs' || product == 'Executive Chairs' || product == 'Petite Chairs/ Work Station Chairs' || product == 'Armless Chairs' || product == 'Benches' || product == 'Folding Chairs' || product == 'Stacking Chairs' || product == 'Coffee Chairs'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/recept_chairs.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if (product == 'Waiting Room Sittings') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/waiting_room.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Coat Hangers' || product == 'First Aid Boxes' || product == 'Post Boxes' || product == 'Wall Hooks' || product == 'Wall Frames' || product == 'Trolleys' || product == 'Magazine Racks' || product == 'Carpets and Door Mats' || product == 'Arts'){
        var level = '1';  
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/other_funiture.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Desktop' || product == 'Workstations'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/desktop.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Laptops and notebooks'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/laptop.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if (product == 'Monitors') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/monitor.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if (product == 'Tablets and handhelds') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/tablet.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Tower'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/tower.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Rack'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/rack.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Bridges And Routers'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/bridges.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Hub And Switches'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/hub.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Network And Adapter'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/network_adapter.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if (product == 'Modems') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/modems.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Tranceivers And Multiplexers'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/tranceiver.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Telephones'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/telephones.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Wireless'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/wireless.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Network Cables'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/network_cable.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Network Security'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/network_security.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if (product == 'KVM') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/KVM.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Cable'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/cable.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Processor'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/processor.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Mother Board'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/mother_board.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Controller Cards'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/controller_card.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Sound Cards'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/sound_card.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if (product == 'Video Cards') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/video_card.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Power Supplies'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/power_supply.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Fan And Cooling Systems'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/cooling.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Keyboard And Mouse'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/keyboard_mouse.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Web And Network Camera'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/web_network.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Accessories And Parts'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/accessory_part.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if (product == 'Air Conditioner') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/air_condition.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Display And Projectors'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/display_projector.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Television'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/television.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Music Player'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/music_player.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Speakers'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/speakers.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Water Dispencer'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/water_dispenser.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if (product == 'Printer') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/printer.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Scanners'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/scanners.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Shredders'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/shredders.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Security Appliances'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/security_appliances.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if (product == 'Machines') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/machines.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Utensils'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/utensils.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Toilet rolls' || product == 'Paper towels'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/toilet_rolls.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Trash Can Bags' || product == 'Trash Cans' || product == 'Large bin containers' || product == 'Zip-lock Bags'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/trash.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Detergents' || product == 'Bar Soaps' || product == 'Liquid Soap'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/detergents.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Broom' || product=='Brushes' || product=='Dusters' || product=='Mops and Buckets' || product=='Cleaning Cloths' || product=='Cleaning Towels' || product=='Screen Cleaning Cloth' || product=='Cleaning Spray' || product=='Sponges' || product=='Cleaning Agents' || product=='Fabric Softener' || product=='Floor Cleaning Chemical' || product=='Furniture Polish' || product=='Glass Cleaning Chemical' || product=='Kitchen Cleaning Chemical' || product=='Bleach and Disinfectants' || product=='Washroom and Bathroom Chemicals' || product=='Trash cans'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/broom.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if (product == 'Sprays' || product=='Plug Ins' || product=='Gels' || product=='Potpourri' || product=='Accessories') {
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/sprays.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Floor And Carpet Care' || product=='Floor Pads' || product=='Steam Cleaners' || product=='Toilet Cleaners' || product=='Vacuum Cleaners'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/carpets.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Tea' || product=='Coffee' || product=='Chocolate Drinks' || product=='Milk' || product=='Sugar' || product=='Sweetener' || product=='Honey' || product=='Soft Drinks' || product=='Water' || product=='Snacks And Confectionery'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/tea.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }else if(product == 'Bags' || product=='Luggages'){
        var level = '1';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("muni").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/bags.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level);
     }
  }

  

  /////////////////////////// Function to change filter value/////////////////////////

  function filterValue(){
    event.preventDefault();
       var product = document.getElementById('product').value;
       var key = document.getElementById('filterKey').value; 
       var level = '2';
     if (product == 'Pen') {
      //alert(key);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/pen.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Pencil'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/pencil.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Pen refills & cartridges'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/pen-refil.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Correction & Eraser'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/correction.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Sharpener'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/sharpener.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Highlighter & Marker'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/highlighter.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Board'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/board.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Lamination'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/lamination.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Binding'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/binding.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Files & Folders'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/files.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Binders'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/binders.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Display Pockets'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/display_pockets.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Document Wallet'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/document_wallet.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Labelling Accessories'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/labelling.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Envelopes'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/envelopes.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Indexing'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/indexing.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Stationery Box & Treys'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/box_treys.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Paper'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/paper.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Cards'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/cards.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Tagging'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/tagging.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Dictionary, Calendar, Maps and Organizers'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/dictionary.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Staplers and Accessories'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/staplers.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Ruler'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/ruler.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Measuring Tapes and Guages'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/measuring.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Binder Clips'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/binder_clips.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Fastener'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/fastener.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Perforators & Accessories'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/perforators.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Binder Clips'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/binder-clips.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Scissors & Cutters'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/scissors.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Pin & Clips'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/pin_clips.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Ink Stamp & Seal'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/ink_stamp.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Adhesives'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/adhesives.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Engraving & Embosser'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/engraving.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Clocks'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/clocks.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Rubber Bands'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/rubber_bands.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Calculator'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/calculator.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Socket & Extension'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/socket_extensions.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Surge Protector'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/socket_protector.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Socket Adaptors'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/socket_adaptors.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Uninterruptible Power Supply (UPS)'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/ups.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Inverters & Solar Panels'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/inverters.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Batteries'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/batteries.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Light Switches'){
      var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/light_switches.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Plugs'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/plugs.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Sockets'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/sockets.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Plug Adapter'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/plug_adapter.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Extension'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/extension.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Bulbs'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/bulbs.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Lamp Holder'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/lamp_holder.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Lamp'){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/lamp.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if (product == 'Cash boxes' || product == 'Shelves and Filing Cabinets') {
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/cash_box.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Safes'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/safes.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Cupboards and Drawers'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/cupboard.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Executive Desks'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/executive_desk.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if (product == 'Writing Desk') {
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/writing_desk.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Computer Desk' || product == 'Credenza Desk' || product == 'Floating Desk' || product == 'Waiting Room Tables' || product == 'Coffee Tables' || product == 'Work Stations' || product == 'Conference Tables'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/computer_desk.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Corner Desk'){ 
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/corner_desk.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Reception Chair' || product == '24 Hour Chairs' || product == 'Big and Tall Chairs' || product == 'Computer Chairs' || product == 'Conference Chairs' || product == 'Drafting Chairs' || product == 'Ergonomic Chairs' || product == 'Executive Chairs' || product == 'Petite Chairs/ Work Station Chairs' || product == 'Armless Chairs' || product == 'Benches' || product == 'Folding Chairs' || product == 'Stacking Chairs' || product == 'Coffee Chairs'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/recept_chairs.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if (product == 'Waiting Room Sittings') {
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/waiting_room.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Coat Hangers' || product == 'First Aid Boxes' || product == 'Post Boxes' || product == 'Wall Hooks' || product == 'Wall Frames' || product == 'Trolleys' || product == 'Magazine Racks' || product == 'Carpets and Door Mats' || product == 'Arts'){
        var level = '2';  
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/other_funiture.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Desktop' || product == 'Workstations'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/desktop.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Laptops and notebooks'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/laptop.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if (product == 'Monitors') {
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/monitor.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if (product == 'Tablets and handhelds') {
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/tablet.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Tower'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/tower.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Rack'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/rack.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Bridges And Routers'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/bridges.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Hub And Switches'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/hub.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Network And Adapter'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/network_adapter.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if (product == 'Modems') {
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/modems.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Tranceivers And Multiplexers'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/tranceiver.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Telephones'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/telephones.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Wireless'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/wireless.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Network Cables'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/network_cable.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Network Security'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/network_security.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if (product == 'KVM') {
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/KVM.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Cable'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/cable.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Processor'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/processor.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Mother Board'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/mother_board.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Controller Cards'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/controller_card.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Sound Cards'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/sound_card.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if (product == 'Video Cards') {
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/video_card.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Power Supplies'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/power_supply.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Fan And Cooling Systems'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/cooling.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Keyboard And Mouse'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/keyboard_mouse.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Web And Network Camera'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/web_network.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Accessories And Parts'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/accessory_part.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if (product == 'Air Conditioner') {
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/air_condition.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Display And Projectors'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/display_projector.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Television'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/television.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Music Player'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/music_player.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Speakers'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/speakers.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Water Dispencer'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/water_dispenser.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if (product == 'Printer') {
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/printer.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Scanners'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/scanners.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Shredders'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/shredders.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Security Appliances'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/security_appliances.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if (product == 'Machines') {
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/machines.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Utensils'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/utensils.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Toilet rolls' || product == 'Paper towels'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/toilet_rolls.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Trash Can Bags' || product == 'Trash Cans' || product == 'Large bin containers' || product == 'Zip-lock Bags'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/trash.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Detergents' || product == 'Bar Soaps' || product == 'Liquid Soap'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/detergents.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Broom' || product=='Brushes' || product=='Dusters' || product=='Mops and Buckets' || product=='Cleaning Cloths' || product=='Cleaning Towels' || product=='Screen Cleaning Cloth' || product=='Cleaning Spray' || product=='Sponges' || product=='Cleaning Agents' || product=='Fabric Softener' || product=='Floor Cleaning Chemical' || product=='Furniture Polish' || product=='Glass Cleaning Chemical' || product=='Kitchen Cleaning Chemical' || product=='Bleach and Disinfectants' || product=='Washroom and Bathroom Chemicals' || product=='Trash cans'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/broom.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if (product == 'Sprays' || product=='Plug Ins' || product=='Gels' || product=='Potpourri' || product=='Accessories') {
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/sprays.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Floor And Carpet Care' || product=='Floor Pads' || product=='Steam Cleaners' || product=='Toilet Cleaners' || product=='Vacuum Cleaners'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/carpets.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Tea' || product=='Coffee' || product=='Chocolate Drinks' || product=='Milk' || product=='Sugar' || product=='Sweetener' || product=='Honey' || product=='Soft Drinks' || product=='Water' || product=='Snacks And Confectionery'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/tea.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }else if(product == 'Bags' || product=='Luggages'){
        var level = '2';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("value_here").innerHTML = xhttp.responseText;
          }
       };
       xhttp.open("POST", "filter_pages/bags.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send("level="+level+"&key="+key);
     }
   }