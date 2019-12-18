<?php
    require 'common.php';
?>
<html>
    <head>
        <title>Lifestyle Store</title>        
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >     
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>     
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>          
        <?php
            include 'check_if_added.php';
        ?>
        <div class="container">
		<div class="body_content">
		<div class="jumbotron">
			<h1>Welcome to our Lifestyle Store!</h1>
			<p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
		</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="image/camera1.jpg" alt="camera image">
					<div class="caption">
						<center>
							<h3>Cannon EOS</h3>
							<p>Price Rs.36000.00</p>
                                                        <?php 
                                                            if (!isset($_SESSION['email'])) 
                                                            {
                                                        ?>
                                                                <a class="btn btn-primary btn-block" href="login.php">Add to Cart</a> 
                                                        <?php
                                                            }
                                                            else 
                                                            {
                                                               if(check_if_added_to_cart(1))
                                                               {                                                               
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="#" disabled>Add to Cart</a>
                                                        <?php
                                                               }
                                                               else 
                                                               {
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="cart_add.php?id=1">Add to Cart</a>
                                                        <?php
                                                               }
                                                            }
                                                        ?>                                                                
						</center>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="image/camera2.jpg" alt="camera image">
					<div class="caption">
						<center>
							<h3>Sony DSLR</h3>
							<p>Price Rs.40000.00</p>
							<?php 
                                                            if (!isset($_SESSION['email'])) 
                                                            {
                                                        ?>
                                                                <a class="btn btn-primary btn-block" href="login.php">Add to Cart</a> 
                                                        <?php
                                                            }
                                                            else 
                                                            {
                                                               if(check_if_added_to_cart(2))
                                                               {                                                               
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="#" disabled>Add to Cart</a>
                                                        <?php
                                                               }
                                                               else 
                                                               {
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="cart_add.php?id=2">Add to Cart</a>
                                                        <?php
                                                               }
                                                            }
                                                        ?>
						</center>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="image/camera3.jpg" alt="camera image">
					<div class="caption">
						<center>
							<h3>Sony DSLR</h3>
							<p>Price Rs.50000.00</p>
							<?php 
                                                            if (!isset($_SESSION['email'])) 
                                                            {
                                                        ?>
                                                                <a class="btn btn-primary btn-block" href="login.php">Add to Cart</a> 
                                                        <?php
                                                            }
                                                            else 
                                                            {
                                                               if(check_if_added_to_cart(3))
                                                               {                                                               
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="#" disabled>Add to Cart</a>
                                                        <?php
                                                               }
                                                               else 
                                                               {
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="cart_add.php?id=3">Add to Cart</a>
                                                        <?php
                                                               }
                                                            }
                                                        ?>
						</center>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="image/camera4.jpg" alt="camera image">
					<div class="caption">
						<center>
							<h3>Cannon DSLR</h3>
							<p>price Rs.65000.00</p>
							<?php 
                                                            if (!isset($_SESSION['email'])) 
                                                            {
                                                        ?>
                                                                <a class="btn btn-primary btn-block" href="login.php">Add to Cart</a> 
                                                        <?php
                                                            }
                                                            else 
                                                            {
                                                               if(check_if_added_to_cart(4))
                                                               {                                                               
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="#" disabled>Add to Cart</a>
                                                        <?php
                                                               }
                                                               else 
                                                               {
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="cart_add.php?id=4">Add to Cart</a>
                                                        <?php
                                                               }
                                                            }
                                                        ?>
						</center>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="image/watch1.jpg" alt="watch image">
					<div class="caption">
						<center>
							<h3>Titan Model #301</h3>
							<p>Price Rs.10000.00</p>
							<?php 
                                                            if (!isset($_SESSION['email'])) 
                                                            {
                                                        ?>
                                                                <a class="btn btn-primary btn-block" href="login.php">Add to Cart</a> 
                                                        <?php
                                                            }
                                                            else 
                                                            {
                                                               if(check_if_added_to_cart(5))
                                                               {                                                               
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="#" disabled>Add to Cart</a>
                                                        <?php
                                                               }
                                                               else 
                                                               {
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="cart_add.php?id=5">Add to Cart</a>
                                                        <?php
                                                               }
                                                            }
                                                        ?>
						</center>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="image/watch2.jpg" alt="watch image">
					<div class="caption">
						<center>
							<h3>Titan model #201</h3>
							<p>Price Rs.8000.00</p>
							<?php 
                                                            if (!isset($_SESSION['email'])) 
                                                            {
                                                        ?>
                                                                <a class="btn btn-primary btn-block" href="login.php">Add to Cart</a> 
                                                        <?php
                                                            }
                                                            else 
                                                            {
                                                               if(check_if_added_to_cart(6))
                                                               {                                                               
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="#" disabled>Add to Cart</a>
                                                        <?php
                                                               }
                                                               else 
                                                               {
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="cart_add.php?id=6">Add to Cart</a>
                                                        <?php
                                                               }
                                                            }
                                                        ?>
						</center>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="image/watch3.jpg" alt="watch image">
					<div class="caption">
						<center>
							<h3>Faber Luba #111</h3>
							<p>Price Rs.18000.00</p>
							<?php 
                                                            if (!isset($_SESSION['email'])) 
                                                            {
                                                        ?>
                                                                <a class="btn btn-primary btn-block" href="login.php">Add to Cart</a> 
                                                        <?php
                                                            }
                                                            else 
                                                            {
                                                               if(check_if_added_to_cart(7))
                                                               {                                                               
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="#" disabled>Add to Cart</a>
                                                        <?php
                                                               }
                                                               else 
                                                               {
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="cart_add.php?id=7">Add to Cart</a>
                                                        <?php
                                                               }
                                                            }
                                                        ?>
						</center>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="image/watch4.jpg" alt="watch image">
					<div class="caption">
						<center>
							<h3>HMT Milan</h3>
							<p>Price Rs.5000.00</p>
							<?php 
                                                            if (!isset($_SESSION['email'])) 
                                                            {
                                                        ?>
                                                                <a class="btn btn-primary btn-block" href="login.php">Add to Cart</a> 
                                                        <?php
                                                            }
                                                            else 
                                                            {
                                                               if(check_if_added_to_cart(8))
                                                               {                                                               
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="#" disabled>Add to Cart</a>
                                                        <?php
                                                               }
                                                               else 
                                                               {
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="cart_add.php?id=8">Add to Cart</a>
                                                        <?php
                                                               }
                                                            }
                                                        ?>
						</center>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="image/shirt1.jpg" alt="shirt image">
					<div class="caption">
						<center>
							<h3>John Zok</h3>
							<p>Price Rs.1200.00</p>
							<?php 
                                                            if (!isset($_SESSION['email'])) 
                                                            {
                                                        ?>
                                                                <a class="btn btn-primary btn-block" href="login.php">Add to Cart</a> 
                                                        <?php
                                                            }
                                                            else 
                                                            {
                                                               if(check_if_added_to_cart(9))
                                                               {                                                               
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="#" disabled>Add to Cart</a>
                                                        <?php
                                                               }
                                                               else 
                                                               {
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="cart_add.php?id=9">Add to Cart</a>
                                                        <?php
                                                               }
                                                            }
                                                        ?>
						</center>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="image/shirt.jpg" alt="shirt image">
					<div class="caption">
						<center>
							<h3>H&W</h3>
							<p>Price Rs.800.00</p>
                                                        <?php 
                                                            if (!isset($_SESSION['email'])) 
                                                            {
                                                        ?>
                                                                <a class="btn btn-primary btn-block" href="login.php">Add to Cart</a> 
                                                        <?php
                                                            }
                                                            else 
                                                            {
                                                               if(check_if_added_to_cart(10))
                                                               {                                                               
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="#" disabled>Add to Cart</a>
                                                        <?php
                                                               }
                                                               else 
                                                               {
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="cart_add.php?id=10">Add to Cart</a>
                                                        <?php
                                                               }
                                                            }
                                                        ?>
						</center>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="image/shirt3.jpg" alt="shirt image">
					<div class="caption">
						<center>
							<h3>Jhalsani</h3>
							<p>Price Rs.2000.00</p>
							<?php 
                                                            if (!isset($_SESSION['email'])) 
                                                            {
                                                        ?>
                                                                <a class="btn btn-primary btn-block" href="login.php">Add to Cart</a> 
                                                        <?php
                                                            }
                                                            else 
                                                            {
                                                               if(check_if_added_to_cart(11))
                                                               {                                                               
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="#" disabled>Add to Cart</a>
                                                        <?php
                                                               }
                                                               else 
                                                               {
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="cart_add.php?id=11">Add to Cart</a>
                                                        <?php
                                                               }
                                                            }
                                                        ?>
						</center>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnail">
					<img src="image/shirt4.jpg" alt="shirt image">
					<div class="caption">
						<center>
							<h3>Luis Phil</h3>
							<p>Price Rs.1500.00</p>
							<?php 
                                                            if (!isset($_SESSION['email'])) 
                                                            {
                                                        ?>
                                                        <a class="btn btn-primary btn-block" href="login.php">Add to Cart</a>
                                                        <?php
                                                            }
                                                            else 
                                                            {
                                                               if(check_if_added_to_cart(12))
                                                               {                                                               
                                                        ?>
                                                        <a class="btn btn-primary btn-block" href="#" disabled>Add to Cart</a>
                                                        <?php
                                                               }
                                                               else 
                                                               {
                                                        ?>
                                                                    <a class="btn btn-primary btn-block" href="cart_add.php?id=12">Add to Cart</a>
                                                        <?php
                                                               }
                                                            }
                                                        ?>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>
