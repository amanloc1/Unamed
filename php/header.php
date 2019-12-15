<nav class="navbar sticky-top navbar-light bg-light" >
  <div>
  <a href="index.php" class="navbar-brand">Boox-I-Change</a>
  <!--About us-->
  <button class="btn btn-light" type="button">About Us</button>
  <button class="btn btn-light" type="button">Contacts</button>
  </div>
  <!--Search-->
  <div class="search-container">
    <form>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Books....">
        <div class="input-group-append">
          <button class="btn btn-secondary" type="button">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
  <div>
  <button class="btn btn-outline-danger my-2 my-sm-0" type="button" a href="#">
    <i class="fa fa-shopping-cart"> | My Cart</i>
    <!--
      <?php
       //if (isset($_SESSION['itemno'])) {
    ?>
    <span class="badge badge-light"> 0</span>
    <?php 
    // }
    ?>
    -->
  </button>
  
  </div>
  <!--Login-register-->
  <div class="login-container">
        <button class="btn btn-outline-warning my-2 my-sm-0" onclick="window.location.href = 'others/login/login_index.html';">Login</button>
        <button class="btn btn-outline-danger my-2 my-sm-0" type="button" a href="#">Register</button>
  </div>
</nav>