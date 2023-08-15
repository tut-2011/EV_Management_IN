<?php 
include('includes/header.php')?> 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                <h4>Add Category</h4>
                <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="row">
                    <div class="col-md-6">
                    <label for="">Name</label>
                    <input type="text"name="name" placeholder="Enter Category Name" class="form-control">
                    </div>
                    <div class="col-md-6">
                    <label for="">Slug</label>
                    <input type="text" name="slug" placeholder="Enter Slug" class="form-control text-custom">
                    </div>
                    
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                    <label for="">Description</label>
                    <textarea rows="3"name="description" placeholder="Enter Description" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                    <label for="">Upload Image/Location</label>
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
                    <textarea rows="3"name="meta_keywords" placeholder="Enter Keywords" class="form-control"></textarea>
                    </div>
                  
                    <div class="row">
                    <div class="col-md-6">
                    <label for="">Popular</label>
                    <input type="checkbox"name="popular" >
                    </div>  <div class="col-md-6">
                    <label for="">Status</label>
                    <input type="checkbox" name="status">
                    </div>
               
                    
                   </div>
                   <div class="col-mid-12"><button type="submit" name="add_category_btn" class="btn btn-primary">Save</button>
                    
                   </div>
                </div>
               
                </div></form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php")?>
            </div>
