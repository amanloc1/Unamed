<!DOCTYPE html>
<?php
    require 'common.php';
    if (isset($_SESSION['email'])) 
    {   
        header('location:/myweb/index.php'); 
        
    } 
?>
<html>
    <head>
       <title>BOOK-I-CHANGE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">    
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>     
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" type="text/css" href="/myweb/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <div class="main_body">
	<div class="container">
		<div class="body_content">
		<div class="col-xs-6 col-xs-offset-3">
			<h2>Sign up</h2>
			<form method="post" action="/myweb/php/signup_script.php">
				<div class="form-group">
                                    <input type="text" name="name" placeholder="Name" class="form-control" required="true">
				</div>
				<div class="form-group">
                                    <input type="email" name="email" placeholder="Email" class="form-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
				</div>
				<div class="form-group">
                                    <input type="password" name="password" placeholder="Password" class="form-control" required="true" pattern=".{6,}">
				</div>
				<div class="form-group">
					<input type="text" name="contact" placeholder="Contact" class="form-control" required="true">
				</div>
				<div class="form-group">
					<input type="text" name="city" placeholder="City" class="form-control" required="true">
				</div>
				<div class="form-group">
					<input type="text" name="address" placeholder="Address" class="form-control" required="true">
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Submit</button>
				</div>
                                <div>
                                    <?php 
                                    if(isset($_GET['signup_msg']))
                                    { echo $_GET['signup_msg']; }
                                    ?>
                                </div>
                            
			</form>
		</div>
		</div>
	</div>
	</div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>
