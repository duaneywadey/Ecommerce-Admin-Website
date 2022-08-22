<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
  <div class="container">
    <a class="navbar-brand" href="./index.php">PHP Ecom</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link  

          <?php if(basename($_SERVER['PHP_SELF']) == "index.php") {

               echo "active"; 
            }
            else {
               echo " ";
            }
            ?>" aria-current="page" href="index.php">Home</a>
        </li>

         <li class="nav-item">
          <a class="nav-link 

          <?php if(basename($_SERVER['PHP_SELF']) == "categories.php") {

               echo "active"; 
            }
            else {
               echo " ";
            }
            ?>" href="categories.php">Collections</a>
        </li>

         <li class="nav-item">
          <a class="nav-link 

          <?php if(basename($_SERVER['PHP_SELF']) == "cart.php") {

               echo "active"; 
            }
            else {
               echo " ";
            }
            ?>" href="cart.php">Cart</a>
        </li>

         <li class="nav-item">
          <a class="nav-link 

          <?php if(basename($_SERVER['PHP_SELF']) == "my-orders.php") {

               echo "active"; 
            }
            else {
               echo " ";
            }
            ?>" href="my-orders.php">My Orders</a>
        </li>



        <!-- If user is logged in, show his name in dropdown link -->

        <?php if(isset($_SESSION['auth'])) { ?>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              <?= $_SESSION['auth_user']['name']; ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>

      <!-- Or else, give him the option to register/login -->
      
        <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <?php } ?>

      </ul>
    </div>
  </div>
</nav>