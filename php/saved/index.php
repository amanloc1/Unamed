<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require 'common.php';
  if (isset($_SESSION['email'])) 
    {   
        header('location:products.php');       
    } 
?>
<html>
    <head>
        <title>Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>     
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="stylesheet" type="text/css" href="bootstrap_css.css">
    </head>
    <body>
        <?php
            include 'header.php'
        ?>
        <div id="banner_image">
		<div class="container">
			<center>
			<div id="banner_content">
				<h1>We sell lifestyle</h1>
				<p>FLAT 40% OFF on premium brands</p>
				<a class="btn btn-lg btn-danger active" href="products.php">SHOP NOW</a>
			</div>
			</center>
		</div> 
	</div>
        <?php
            include 'footer.php'
        ?>
    </body>
</html>
