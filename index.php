<!DOCTYPE html>
<?php
    $con=mysqli_connect("localhost","root","","book-i-change") or die(mysqli_error($con));
    session_start();
?>
<html>
<head>
<meta charset="utf-8">
	<title>Boox-I-change - Buy Old Books, Second Hand Books, New Books</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">    
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap-4-navbar.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       
<!--   Theme styles START isko edit marna hai bro-->

  <link rel="stylesheet" href="css\owl.carousel.css" >
  <link  href="css\style-shop.css" rel="stylesheet" type="text/css">
<!--   Theme styles END -->
</head>
<body>
    <?php
           if (isset($_SESSION['email'])) {
        ?>
        Welcome Back!!
        <?php 
        }
        ?> 
<!--header-->
<?php
            include 'php/header.php'
?>
<?php
            include 'php/crousal.php'
?>

<div class="container">
    <br>
<h2>Recently added</h2>
<?php
            include 'php/dealoftheday.php'
?>
<br>
</div>

<div class="container">
    <br>
<h2>Engineering Books</h2>
<?php
            include 'php/dealoftheday.php'
?>
<br>
</div>



<!--Footer -->
<?php
            include 'php/footer.php'
?>

<!--Script in order-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="js\owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <!--//how it works-->
    <script src="js\layout.js" type="text/javascript"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {  
            Layout.initOWL();
        });
    </script>
	</body>
</html>
