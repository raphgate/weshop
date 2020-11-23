//set up category1 add product

    $('#main_cat').change(function () {
        var cat = $('#main_cat').val();
        //alert(cat);
        $('#maincategory').val(cat);
        $.ajax({
            url: 'init/category1.php',
            method: 'POST',
            data: {cat: cat},
            success: function (data) {
                $('#category1').html(data);
            }
        });
    })


//set up category2 add product
    $('#category1').change(function () {
        var sub_cat2 = $('#category1').val();
        $.ajax({
            url: 'init/category2.php',
            method: 'POST',
            data: {sub_cat2: sub_cat2},
            success: function (data) {
                $('#category3').html(data);
            }
        });
    })

