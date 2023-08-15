<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow">
  <div class="container text-custom">
    <a class="text-custom navbar-brand " href="#">EV Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="categories.php">Collections</a>
        </li>
        <?php if(isset($_SESSION['auth'])){
          ?>
                  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <?=$_SESSION['auth_user']['name'];?>
          </a>
          
          <ul class="dropdown-menu">
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
        <?php
      
        }

        else{
          ?>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        <?php
        }
        
        ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cart.php">Cart</a>
        </li>

        <!-- <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
 
    </div>
  </div>
</nav>