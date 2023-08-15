<?php 
include('includes/header.php')?> 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if(isset($_GET['id'])){
            $id=$_GET['id'];
           $product=getById("products",$id);

           if(mysqli_num_rows($product)>0){
            $data=mysqli_fetch_array($product);
            ?>
            <div class="card">
                <div class="card-header">

                <h4>Edit Product<a href="products.php" class="btn btn-primary float-end">Back</a>
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

<option value="<?=$item['id'];?>" <?=$data['category_id']==$item['id']?"selected":"" ?>> <?=$item['name'];?> </option>
    
<?php
                   }
        
                     
                     
                  
                   }
                   else{
                    echo "No category available";
                   }

                   ?></select>
                    </div>
                    <input type="hidden" name="product_id" value="<?=$data['id']?>">
                    <div class="col-md-6">
                    <label for="">Slug</label>
                    <input type="text" name="slug"  value="<?=$data['slug']?>" placeholder="Enter Slug" class="form-control">
                    </div>
                    <div class="col-md-6">
                    <label for="">Name</label>
                    <input type="text" name="name" value="<?=$data['name']?>" placeholder="Enter Name" class="form-control">
                    </div>
                    
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                    <label for="">Description</label>
                    <textarea rows="3"name="description" placeholder="Enter Description" class="form-control"><?=$data['description']?></textarea>
                    </div>
                    <div class="col-md-6">
                    <label class="mb-0">Upload Image</label>
                    <input type="hidden" name="old_image" value="<?=$data['image']?>">
                    <input type="file" name="image" placeholder="Enter Image" class="form-control">
                    <label class="mb-0">Current Image</label>
                    <img src="../uploads/<?=$data['image']?>;" alt="Product Image" height="50px" width="50px">
                    </div>
                    
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                    <label for="">Meta Title</label>
                    <textarea rows="3" name="meta_title" placeholder="Enter Meta Title" class="form-control"><?=$data['meta_title']?></textarea>
                    </div>
                    <div class="col-md-6">
                    <label for="">Meta Description</label>
                    <textarea rows="3" name="meta_description" placeholder="Enter Meta Description" class="form-control"><?=$data['meta_description']?></textarea>
                    </div>
                    
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                    <label for="">Meta Keywords</label>
                    <textarea rows="3"name="meta_keywords" placeholder="Enter Keywords" class="form-control"><?=$data['meta_keywords']?></textarea></div>
                    <div class="col-md-6">
                    <label for="">Location</label>
              
                    <textarea rows="3" name="location" placeholder="Enter Location" class="form-control"><?=$data['location']?></textarea>
                    </div>
                    </div>
                  
                    <div class="row">
                    <div class="col-md-6">
                    <label for="">Trending</label>
                    <input type="checkbox"name="trending"  <?=$data['trending']=="1"?"checked":""?>>
                    </div>  <div class="col-md-6">
                    <label for="">Status</label>
                    <input type="checkbox" name="status" <?=$data['status']=="1"?"checked":""?>>
                    </div>
               
                    
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                    <label for="">Original Cost</label>
                    <input type="number" name="o_cost" placeholder="Enter Original Cost" value="<?=$data['o_cost']?>" class="form-control">
                    </div>
                    <div class="col-md-6">
                    <label for="">Subsidized Cost</label>
                    <input type="number" name="s_cost" placeholder="Enter Subsidized Cost" value="<?=$data['s_cost']?>"class="form-control">
                    </div>
                    
                   </div>
                   <div class="col-mid-12"><button type="submit" name="update_product_btn" class="btn btn-primary">Update</button>
                    
                   </div>
                </div>
               
                </div></form>
            </div>
        </div>
             
        <?php 
           }
           else{

            echo "Products Not Found for given ID";
        }
            
          
           }
        else{

            echo "Id missing from URL";
        }
        ?>
    </div>
</div>
<?php include("includes/footer.php")?>
            </div>
