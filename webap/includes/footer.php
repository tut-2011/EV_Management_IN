
<script defer src="assets/js/jquery-3.6.0.min.js"></script>

   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script defer src="assets/js/owl.carousel.min.js"></script>
 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script defer src="admin/assets/js/custom1.js"></script>

<script defer src="admin/assets/js/custom2.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<?php if(isset($_SESSION['message'])){?>


<script> alertify.set('notifier','position', 'top-right');
 alertify.success('<?= $_SESSION['message']?>');
  </script><?php 
  unset($_SESSION['message']);

}
  ?>
 
  </body>
</html>