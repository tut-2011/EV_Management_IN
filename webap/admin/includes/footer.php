
<footer class="footer py-4  ">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6 mb-lg-0 mb-4">
  
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
          <li class="nav-item">
            <a href="index.php" class="nav-link text-muted" target="_blank">EV Dashboard</a>
          </li>
          <li class="nav-item">
            <a href="../index.php" class="nav-link text-muted" target="_blank">About Us</a>
          </li>
          <li class="nav-item">
            <a href="../categories.php" class="nav-link text-muted" target="_blank">Categories</a>
          </li>
  
        </ul>
      </div>
    </div>
  </div>
</footer>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/sweetalert.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/perfect-scrollbar.min.js"></script>
<script src="assets/js/smooth-scrollbar.min.js"></script>
<script src="assets/js/custom1.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<?php if(isset($_SESSION['message'])){?>


<script> alertify.set('notifier','position', 'top-right');
 alertify.success('<?= $_SESSION['message']?>');
  </script><?php 
  unset($_SESSION['message']);

}
  
  
  ?>
