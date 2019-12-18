<!--header start-->
<div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/myweb/index.php">Boox-I-Change</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/myweb/index.php">Home</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">|  Career With US</a></li>
            </ul>
            <!--Search box starts-->
            <form class="navbar-form navbar-left" action="#">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!--Search box ended-->

            <ul class="nav navbar-nav navbar-right" style="padding:8px; margin:1px">
                <button class="btn btn-danger my-2 my-sm-0" onclick="window.location.href = '/myweb/php/cart.php';">
                    <i class="fa fa-shopping-cart"> | My Cart</i></button>
            <?php
            if (isset($_SESSION['email'])) {
            ?>
            <button onclick="window.location.href = '/myweb/php/setting.php';" class="btn btn-warning">Settings</button>
            <button onclick="window.location.href ='/myweb/php/logout.php';" class="btn btn-danger" >Logout</button>
             <?php 
             }
              else {
            ?>
            
            <button onclick="window.location.href = '/myweb/php/login.php';" class="btn btn-warning" >Login</button>
            <button onclick="window.location.href ='/myweb/php/signup.php';" class="btn btn-danger" >Register</button>
            </ul>
            <?php                                    
            }
            ?> 
        </div>
    </nav>
</div>
<!--header start-->