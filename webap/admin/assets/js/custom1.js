$(document).ready(function(){
  $(document).on('click','.delete_product_btn',function(e){
    e.preventDefault();
    var id=$(this).val();
    
    swal({
        title: "Are you sure ?",
        text: "Once deleted, you will not be able to recover this",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
       $.ajax({
    method:"POST",
    url:"code.php",
    data:{
        'product_id':id,
        'delete_product_btn':true,
    },
    
    success:function(response){
       console.log(response);
    if(response==200){
        swal("Success!","product Deleted Succesfully", "success"); 
        window.location.reload();
       // $(".product_table").load(location.href + " .product_table");
    }
    else if(response==500){
        swal("Error!","Something Went Wrong", "error"); 
    }
    }
       });
        } else {
          swal("Your file is safe!");
        }
      });
  });
$(document).on('click','.delete_category_btn',function(e){
  e.preventDefault();
  var id=$(this).val();
  
  swal({
      title: "Are you sure ?",
      text: "Once deleted, you will not be able to recover this",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
     $.ajax({
  method:"POST",
  url:"code.php",
  data:{
      'category_id':id,
      'delete_category_btn':true,
  },
  
  success:function(response){
     //console.log(response);
  if(response==200){
      swal("Success!","Category Deleted Succesfully", "success");
      window.location.reload();
     // $('.category_table').load(location.href+" .category_table");
  }
  else if(response==500){
      swal("Error!","Something Went Wrong", "error"); 
  }
  }
     });
      } else {
        swal("Your file is safe!");
      }
    });
});
});