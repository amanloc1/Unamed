<nav class="navbar sticky-top navbar-light bg-light" >
  <div>
  <a href="/myweb/index.php" class="navbar-brand">Boox-I-Change</a>
  <!--About us-->
  <button class="btn btn-light" onclick="window.location.href = '/myweb/php/team.php';" type="button">About Us</button>
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
  <!--Login-register-->
  <div class="login-container">
  <button class="btn btn-outline-danger my-2 my-sm-0" type="button" a href="#">
    <i class="fa fa-shopping-cart"> | My Cart</i>
    <span class="badge badge-light"> 0</span>
  </button>
        <?php
           if (isset($_SESSION['email'])) {
        ?>
				<button class="btn btn-outline-warning my-2 my-sm-0" onclick="window.location.href = '/myweb/php/setting.php';">Setting</button>
        <button class="btn btn-outline-danger my-2 my-sm-0" onclick="window.location.href ='/myweb/php/logout.php';">Logout</button>
        <?php 
        }
        else {
        ?>        
        <button class="btn btn-outline-warning my-2 my-sm-0" onclick="window.location.href = '/myweb/php/login.php';">Login</button>
        <button class="btn btn-outline-danger my-2 my-sm-0" onclick="window.location.href ='/myweb/php/signup.php';">Register</button>
   <?php                                    
     }
     ?>
  </div>
</nav>