<?php 
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);?>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 ps custom-color" id="sidenav-main">

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
     
      <h3 class="ms-1 text-custom font-weight-bold">EV Dashboard</h3>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse w-auto ps ps--active-x" id="sidenav-collapse-main">
    <ul class="navbar-nav">          
<li class="nav-item">
  <a class="nav-link text-white <?=$page=="index.php"?"active bg-gradient-primary":""?>" href="index.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons text-custom opacity-10">dashboard</i>
      </div>
    
    <span class="nav-link-text ms-1 text-custom">Dashboard</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link text-white <?=$page=="category.php"?"active bg-gradient-primary":""?>" href="category.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons text-custom opacity-10">table_view</i>
      </div>
    
    <span class="nav-link-text ms-1 text-custom">All Category</span>
  </a>
</li>
  
<li class="nav-item">
  <a class="nav-link text-white <?=$page=="add-category.php"?"active bg-gradient-primary":""?>" href="add-category.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons text-custom opacity-10">receipt_long</i>
      </div>
    
    <span class="nav-link-text ms-1 text-custom">Add Category</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link text-white <?=$page=="products.php"?"active bg-gradient-primary":""?>" href="products.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons text-custom opacity-10">table_view</i>
      </div>
    
    <span class="nav-link-text ms-1 text-custom">All Products</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link text-white <?=$page=="add-product.php"?"active bg-gradient-primary":""?> " href="add-product.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10 text-custom">shopping_cart</i>
      </div>
    
    <span class="nav-link-text ms-1 text-custom">Add Product</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link text-white" target="_blank" href="https://e-amrit.niti.gov.in/charging-station-locators">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10 text-custom">public</i>
      </div>
    
    <span class="nav-link-text ms-1 text-custom">Geography</span>
  </a>
</li>

    </ul>
  <div class="ps__rail-x" style="width: 250px; left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 214px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
  
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn btn-outline-primary mt-4 w-100" href="../logout.php" type="button">Logout</a>
      <!-- <a class="btn bg-gradient-primary w-100" href="../logout.php">Logout</a> -->
    </div>
    
  </div>
  
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></aside>