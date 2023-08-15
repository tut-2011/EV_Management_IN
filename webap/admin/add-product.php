<?php 
include('includes/header.php')?> 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                <h4>Add Product
                </h4>
                <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="row">
                    <div class="col-md-6">
                    <label for="">Select Category</label>
                   <select name="category_id" class="form-select mb-2">
                    <option selected>Option Category</option>

                   <?php 
                   
                   $categories=getAll('categories');
                   if(mysqli_num_rows($categories)>0){
                    foreach($categories as $item){
                        ?>

<option value="<?=$item['id'];?>"><?=$item['name'];?> </option>
    
<?php
                   }
        
                     
                     
                  
                   }
                   else{
                    echo "No category available";
                   }

                   ?></select>
                    </div>
                    <div class="col-md-6">
                    <label for="">Slug</label>
                    <input type="text" name="slug" placeholder="Enter Slug" class="text-custom form-control">
                    </div>
                    <div class="col-md-6">
                    <label for="">Name</label>
                    <input type="text" name="name" placeholder="Enter Name" class="text-custom form-control">
                    </div>
                    
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                    <label for="">Description</label>
                    <textarea rows="3"name="description" placeholder="Enter Description" class="text-custom form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                    <label for="">Upload Image</label>
                    <input type="file" name="image" placeholder="Enter Image" class="form-control">
                    </div>
                    
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                    <label for="">Meta Title</label>
                    <textarea rows="3" name="meta_title" placeholder="Enter Meta Title" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                    <label for="">Meta Description</label>
                    <textarea rows="3" name="meta_description" placeholder="Enter Meta Description" class="form-control"></textarea>
                    </div>
                    
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                    <label for="">Meta Keywords</label>
                    <textarea rows="3"name="meta_keywords" placeholder="Enter Keywords" class="form-control"></textarea></div>
                    <div class="col-md-6">
                    <label for="">Location</label>
              
                    <textarea rows="3" name="location" placeholder="Enter Location" class="form-control"></textarea>
                    </div>
                    </div>
                  
                    <div class="row">
                    <div class="col-md-6">
                    <label for="">Trending</label>
                    <input type="checkbox"name="popular" >
                    </div>  <div class="col-md-6">
                    <label for="">Status</label>
                    <input type="checkbox" name="status">
                    </div>
               
                    
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                    <label for="">Original Cost</label>
                    <input type="number" name="o_cost" placeholder="Enter Original Cost" class="form-control">
                    </div>
                    <div class="col-md-6">
                    <label for="">Subsidized Cost</label>
                    <input type="number" name="s_cost" placeholder="Enter Subsidized Cost" class="form-control">
                    </div>
                    
                   </div>
                   <div class="col-mid-12"><button type="submit" name="add_product_btn" class="btn btn-primary">Save</button>
                    
                   </div>
                </div>
               
                </div></form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php")?>
            </div>
