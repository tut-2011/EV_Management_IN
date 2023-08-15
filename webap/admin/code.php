<?php
session_start();
include('../config/dbcon.php');
include('../functions/myfunctions.php');
if(isset($_POST['add_category_btn'])){

    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['desctiption'];
    $meta_title=$_POST['meta_title'];
    $meta_description=$_POST['meta_description'];
    $meta_keywords=$_POST['meta_keywords'];
    $status=isset($_POST['status'])?"1":"0";
    $popular=isset($_POST['popular'])?"1":"0";
    $image=$_FILES['image']['name'];
    $path="../uploads";
    $image_ext=pathinfo($image,PATHINFO_EXTENSION);
    $filename=time().'.'.$image_ext;
$category_query="INSERT INTO categories (name,slug,description,meta_title,meta_description,meta_keywords,status,popular,image) VALUES
('$name','$slug','$description','$meta_title','$meta_description','$meta_keywords','$status','$popular','$filename')";
$category_query_run=mysqli_query($con,$category_query);

if($category_query_run){
move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$filename);
redirect("add-category.php","Category Added Successfully");
}
else{

redirect("add-category.php","Something Went Wrong");
}
}
else if(isset($_POST['update_category_btn'])){
    $category_id=$_POST['category_id'];
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $meta_title=$_POST['meta_title'];
    $meta_description=$_POST['meta_description'];
    $meta_keywords=$_POST['meta_keywords'];
    $old_image=$_POST['old_image'];
    $status=isset($_POST['status'])?"1":"0";

    $popular=isset($_POST['popular'])?"1":"0";
    $new_image=$_FILES['image']['name'];
    if($new_image!=""){
//$update_filename=$new_image;
$image_ext=pathinfo($image,PATHINFO_EXTENSION);
$update_filename=time().'.'.$image_ext;

    }
    else{
        $update_filename=$old_image;
    }
    $update_query="UPDATE categories SET name='$name',slug='$slug',description='$description',meta_title='$meta_title',meta_description='$meta_description', meta_keywords='$meta_keywords',status='$status', popular='$popular',image='$update_filename' WHERE id='$category_id'";
    $update_query_run=mysqli_query($con,$update_query);
    if($update_query_run){
        if($_FILES['image']['name']!=""){
            move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$new_image);
            if(file_exists("../uploads/".$old_image)){
                unlink("../uploads/".$old_image);
                
            }
        }
        redirect("edit-category.php?id=$category_id","Category updated Successfully");
    }
    redirect("edit-category.php?id=$category_id","Something went wrong");
}
else if(isset($_POST['delete_category_btn'])){
//echo "delete pressed";
    $category_id=mysqli_real_escape_string($con,$_POST['category_id']);
   // echo $category_id;
   $category_query="SELECT * FROM categories where id='$category_id'";
$category_query_run=mysqli_query($con,$category_query);
$category_data=mysqli_fetch_array($category_query_run);
$image_cat=$category_data['image'];
$delete_query="DELETE FROM categories WHERE `categories`.`id` ='$category_id'";
$delete_query_run=mysqli_query($con,$delete_query);

if($delete_query_run){
    if(file_exists("../uploads/".$image_cat)){
        unlink("../uploads/".$image_cat);
        
    }
    //redirect("products.php","product Removed Successfully".$product_id);
   echo 200;

}
else{
   // redirect("products.php","Something went wrong");
   echo 500;
}
}
else  if(isset($_POST['add_product_btn'])){
    $category_id=$_POST['category_id'];
    //echo $category_id;
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $meta_title=$_POST['meta_title'];
    $meta_description=$_POST['meta_description'];
    $meta_keywords=$_POST['meta_keywords'];
    $status=isset($_POST['status'])?"1":"0";
    $trending=isset($_POST['trending'])?"1":"0";
    $image=$_FILES['image']['name'];
    $o_cost=$_POST['o_cost'];
    $s_cost=$_POST['s_cost'];
    $location=$_POST['location'];
    $path="../uploads";
    $image_ext=pathinfo($image,PATHINFO_EXTENSION);
    $filename=time().'.'.$image_ext;
    if($name!="" and $slug!="" and $description=!""){
    $product_query="INSERT INTO products(category_id, name, slug, description, image, status, location, trending, meta_title, meta_keywords, meta_description, o_cost, s_cost) VALUES ('$category_id', '$name', '$slug', '$description', '$filename', '$status', '$location', '$trending','$meta_title','$meta_keywords','$meta_description', '$o_cost', '$s_cost')";
    $product_query_run=mysqli_query($con,$product_query);
    if($product_query_run){
        move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$filename);
        redirect("add-product.php","Product Added Successfully");
    }
    else{
       
        redirect("add-product.php","Product could not be added");
    }}

    else{
        redirect("add-product.php","All field are mandatory");
    }
}
else if(isset($_POST['update_product_btn'])){
    $product_id=$_POST['product_id'];
    $category_id=$_POST['category_id'];
    echo $category_id;
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $meta_title=$_POST['meta_title'];
    $meta_description=$_POST['meta_description'];
    $meta_keywords=$_POST['meta_keywords'];
    $status=isset($_POST['status'])?"1":"0";
    $trending=isset($_POST['trending'])?"1":"0";
    $image=$_FILES['image']['name'];
    $o_cost=$_POST['o_cost'];
    $s_cost=$_POST['s_cost'];
    $location=$_POST['location'];
    $path="../uploads";
    $image_ext=pathinfo($image,PATHINFO_EXTENSION);
    $filename=time().'.'.$image_ext;
    $old_image=$_POST['old_image'];
    $new_image=$_FILES['image']['name'];
   // $update_filename;
    if($new_image!=""){
//$update_filename=$new_image;
$image_ext=pathinfo($image,PATHINFO_EXTENSION);
$update_filename=time().'.'.$image_ext;

    }
    else{
        $update_filename=$old_image;
    }
    $update_product_query="UPDATE products SET trending='$trending',status='$status',name='$name',slug='$slug',description='$description',meta_title='$meta_title',meta_description='$meta_description',meta_keywords='$meta_keywords',o_cost='$o_cost',s_cost='$s_cost',location='$location',image='$update_filename' where id='$product_id'";
    $update_product_query_run=mysqli_query($con,$update_product_query);
    if($update_product_query_run){
        if($_FILES['image']['name']!=""){
            move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$new_image);
            if(file_exists("../uploads/".$old_image)){
                unlink("../uploads/".$old_image);
                
            }
        }
        redirect("edit-product.php?id=$product_id","Product updated Successfully");
    }
    else{
    redirect("edit-product.php?id=$product_id","Something went wrong");}
}
else if(isset($_POST['delete_product_btn'])){
  

    $product_id=mysqli_real_escape_string($con,$_POST['product_id']);
   // echo $product_id;
   $product_query="SELECT * FROM products where id='$product_id'";
$product_query_run=mysqli_query($con,$product_query);
$product_data=mysqli_fetch_array($product_query_run);
$image_cat=$product_data['image'];
$delete_query="DELETE FROM products WHERE `id` ='$product_id'";
$delete_query_run=mysqli_query($con,$delete_query);

if($delete_query_run){
    if(file_exists("../uploads/".$image_cat)){
        unlink("../uploads/".$image_cat);
        
    }
    //redirect("products.php","product Removed Successfully".$product_id);
     echo 200;

}
else{
   // redirect("products.php","Something went wrong");
   echo 500;
}
}
else{
    header("Location: index.php");
}
?>