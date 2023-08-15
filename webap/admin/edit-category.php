<?php 
include('includes/header.php')?> 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php 
          
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $category=getById("categories",$id);
               // $my_query_run=mysqli_query($con,$my_query);
                if(mysqli_num_rows($category)>0){
                        $data=mysqli_fetch_array($category);
                ?>

            
            <div class="card">
                <div class="card-header">

                <h4>Edit Category</h4>
                <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" name="category_id" value="<?=$data['id']?>">
                    <label for="">Name</label>
                    <input type="text" value="<?=$data['name']?>" name="name" placeholder="Enter Category Name" class="form-control">
                    </div>
                    <div class="col-md-6">
                    <label for="">Slug</label>
                    <input type="text"  value="<?=$data['slug']?>" name="slug" placeholder="Enter Slug" class="form-control">
                    </div>
                    
                   </div>
                   <div class="row">
                   <div class="col-md-10">
                    <label for="">Description</label>
                    <textarea rows="3"name="description" class="form-control"><?=$data['description']?></textarea>
                    </div></div>
                    <div class="row">
                    <div class="col-md-6">
                    <label for="">Upload Image/Location</label>
                    <input type="file" name="image" placeholder="Enter Image" class="form-control">
                    <label for="">Current Image</label>
                    <input type="hidden" name="old_image" value="<?=$data['image']?>">
                    <img src="../uploads/<?=$data['image']?>" height="50px" width="50px">
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
                    <textarea rows="3"name="meta_keywords" placeholder="Enter Keywords" class="form-control"><?=$data['meta_keywords']?></textarea>
                    </div>
                  
                    <div class="row">
                    <div class="col-md-6">
                    <label for="">Popular</label>
                    <input type="checkbox" <?=$data['popular']=='1'?"checked":""?> name="popular" >
                    </div>  <div class="col-md-6">
                    <label for="">Status</label>
                    <input type="checkbox" <?=$data['status']=='1'?"checked":""?> name="status">
                    </div>
               
                    
                   </div>
                   <div class="col-mid-12"><button type="submit" name="update_category_btn" class="btn btn-primary">Update</button>
                    
                   </div>
                </div>
               
                </div></form>
            </div>
        </div><?php 
            }
else{
    echo "Category not Found";
}}
        else{
            echo "Id missing from URL";
        }
        ?>
    </div>
</div>
<?php include("includes/footer.php")?>
            </div>
