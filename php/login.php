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
        header('location:/myweb/index.php'); 
        
    } 
?>
<html>
    <head>
        <title>Boox-I-change</title>
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
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3>Login</h3>
						</div>
						<div class="panel-body">
                            <form method="post" action="login_submit.php">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
								</div>
								<div class="form-group">
									<label for="pass">Password</label>
									<input type="password" name="pass" class="form-control" required="true" pattern=".{6,}">
								</div>
								<div class="form-group">
									<button class="btn btn-primary">Login</button>
								</div>
                                                            <div>
                                                                <?php
                                                                if(isset($_GET['login_msg']))
                                                                { echo $_GET['login_msg']; }
                                                                ?>
                                                            </div>
							</form>
						</div>
						<div class="panel-footer">
							<center>
								<p>Don't have a Account? <a href="signup.php">Register</a></p>
							</center>
						</div>
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
