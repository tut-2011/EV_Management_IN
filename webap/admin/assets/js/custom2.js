function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
            document.getElementById('number').value = value;
    }
}
function decrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById('number').value = value;
    }

}
function incrementValueCustom(id)
{

    var value = parseInt(document.getElementById('number_'+id).value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
            document.getElementById('number_'+id).value = value;
    }
}
function decrementValueCustom(id)
{//console.log(id);
    var value = parseInt(document.getElementById('number_'+id).value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById('number_'+id).value = value;
    }

}


$(document).ready(function(){
    $(document).on('click','.addToCartBtn', function (e){
e.preventDefault();
var qty=parseInt(document.getElementById('number').value, 10);
var prod_id=$(this).val();

$.ajax({
    method:"POST",
    url: "functions/handlecart.php",
    data: {

        "prod_id":prod_id,
        "prod_qty":qty,
        "scope":"add",
    },
    
    success: function (response) {
       // console.log(response);
        if(response==201){
          alertify.success("Product Added To Cart");
        }
        else if(response==301){
            alertify.success("Product Already In Cart");
        }
        else if(response==401){
            alertify.success("Login to continue");
        }
        else if(response==500){
            alertify.success("Something went wrong");
        }
     
    }
});

    });
    
    $(document).on('click','.updateQty', function () {
        var qty=$(this).closest('.container').find('.input-qty').val();
        var prod_id=$(this).closest('.container').find('.prodId').val();
        //console.log(prod_id);
        $.ajax({
            method:"POST",
            url: "functions/handlecart.php",
            data: {

                "prod_id":prod_id,
                "prod_qty":qty,
                "scope":"update",
            },
            
            success: function (response) {
              
                if(response==200){
                    alertify.success("Product Quantity Updated in Cart");
                  }
                 
                  else if(response==401){
                      alertify.success("Login to continue");
                  }
                  else if(response==500){
                      alertify.success("Something went wrong");
                  }
            }
        });
       
    });
$(document).on('click','.deleteItem', function () {
    var cart_id=$(this).val();

      $.ajax({
            method:"POST",
            url: "functions/handlecart.php",
            data: {

                "cart_id":cart_id,
             
                "scope":"delete",
            },
            
            success: function (response) {
              console.log(response);
                if(response==202){
                    alertify.success("Product Removed from Cart");
                    $('.mycart').load(location.href+" .mycart");
              //  setTimeout(1);
                 //   window.location.reload();
                    
                  }
                 
                  else if(response==401){
                      alertify.success("Login to continue");
                  }
                  else if(response==500){
                      alertify.success("Something went wrong");
                  }
            }})
});

});