<?php 
include('includes/header.php');

?> 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
               <div class="card-header"><h4>Products</h4>
               </div>
               <div class="card-body" id="products_table">
                <table class="table table-bordered table-striped products_table">

                <thead>

                <tr>

                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Status</th>
                <th>Edit</th>
                </tr>
                </thead>
                <tbody>
<?php  
$products=getAll("products");
if(mysqli_num_rows($products)>0){
    foreach($products as $item){
?> <tr>

<td><?=$item['id'];?></td>
<td><?=$item['name'];?></td>
<td><img src="../uploads/<?=$item['image'];?>" width="50px" height="50px" alt="<?=$item['name'];?>"></td>
<td><?=$item['status']=='1'?"Visible":"Hidden";?></td>
<td><a href="edit-product.php?id=<?=$item['id'];?>" class="btn btn-primary">Edit</a>
<form action="code.php" method="POST">
    <input type="hidden" name="product_id" value="<?=$item['id'];?>">
<button type="button" class="btn btn-danger delete_product_btn" value="<?=$item['id']?>">DELETE</button></form></td>
</tr>
    
<?php
    }

}
else{
    echo "No records found";
}
?>
                <!-- <tr>

                <td>1</td>
                <td>Shoes</td>
                <td>1</td>
                <td>Visible</td>
                <td>Edit</td>
                </tr> -->
                </tbody>
                </table>
               </div>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php")?>
            </div>
