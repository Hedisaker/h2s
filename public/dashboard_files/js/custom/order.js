$(document).ready(function () {
    
    //add product btn
    $('.add-product-btn').on('click', function (e) {

        e.preventDefault();
        var name = $(this).data('name');
        var id = $(this).data('id');
        var sale_price = $(this).data('saleprice');
        var purchaseprice = $(this).data('purchaseprice');
        var price = accounting.formatMoney($(this).data('price'), " TTD ", ",");
        var stock = $(this).data('stock');
            $(this).removeClass('btn-success').addClass('btn-default disabled');

        var html =
            `<tr>
                <td>${name}</td>
                <td><input type="number" name="products[${id}][quantity]" onKeyUp="if(this.value>${stock}){this.value=${stock};}else if(this.value<'1'){this.value=1;}" data-price="${price}" class="form-control input-sm product-quantity" min="1" max="${stock}" value="1"></td>
                <td class="product-price">${price} </td>               
                <td><button class="btn btn-danger btn-sm remove-product-btn" data-id="${id}"><span class="fa fa-trash"></span></button></td>
                <td><input type="hidden" name="products[${id}][sale_price]"  value="${sale_price}"></td>
                <td><input type="hidden" name="products[${id}][purchase_price]"  value="${purchaseprice}"></td>
                </tr>`;

        $('.order-list').append(html);

        //to calculate total price
        calculateTotal();
    });

    //disabled btn
    $('body').on('click', '.disabled', function(e) {

        e.preventDefault();

    });//end of disabled

    //remove product btn
    $('body').on('click', '.remove-product-btn', function(e) {

        e.preventDefault();
        var id = $(this).data('id');

        $(this).closest('tr').remove();
        $('#product-' + id).removeClass('btn-default disabled').addClass('btn-success');

        //to calculate total price
        calculateTotal();

    });//end of remove product btn

    //change product quantity
    $('body').on('keyup change', '.product-quantity', function(e) {
       
        var quantity = Number($(this).val()); //2
        var unitPrice = parseFloat(accounting.parse($(this).data('price'))); //150

        var total=quantity * unitPrice;
        $(this).closest('tr').find('.product-price').html(accounting.formatMoney(total, " TTD ",  ","));
        calculateTotal();

    });//end of product quantity change
    $('form').bind("keypress", function(e) {
        if (e.keyCode == 13) {               
          e.preventDefault();
          return false;
        }
      });
//change tva

//end of tva change
//change discount
$("#tva").on('keyup change', function (){
    // Your stuff...
    calculateTotal();

 });
$("#discount").on('keyup change', function (){
    // Your stuff...
    calculateTotal();

 });

    //list all order products
    $('.order-products').on('click', function(e) {

        e.preventDefault();

        $('#loading').css('display', 'flex');
        
        var url = $(this).data('url');
        var method = $(this).data('method');
        $.ajax({
            url: url,
            method: method,
            success: function(data) {

                $('#loading').css('display', 'none');
                $('#order-product-list').empty();
                $('#order-product-list').append(data);

            }
        })

    });//end of order products click

    //print order
    $(document).on('click', '.print-btn', function() {

        $('#print-area').printThis();

    });//end of click function

});//end of document ready

//calculate the total
function calculateTotal() {

    var price = 0;
    var tva=0;
    var discount1=0;
    var tva=document.getElementById('tva').value;
    var discount=document.getElementById('discount').value;

    $('.order-list .product-price').each(function(index) {
        
        price += parseFloat(accounting.parse($(this).html()));

    });//end of product price
     price=price+((price / 100)*tva);
    price-= parseFloat(accounting.parse(discount));
    pricetotal=price;
    $('.total-price').html(accounting.formatMoney(pricetotal, "TTD",  ","));

    //check if price > 0
    if (price > 0) {

        $('#add-order-form-btn').removeClass('disabled')

    } else {

        $('#add-order-form-btn').addClass('disabled')

    }//end of else

}//end of calculate total
