 <!DOCTYPE html>
 <?php
    $con=mysqli_connect("localhost","root","","book-i-change") or die(mysqli_error($con));
    session_start();
?>

<html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>booxichange</title>
       <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
    body {
    margin:0px 0;
    padding:0;
    text-align:center;
    }

    #Content {
    width:500px;
    margin:0 auto;
    text-align:left;
    padding:15px;
    border:1px dashed #333;
    background-color:#eee;
    }
    body{    
    font-family: 'Roboto Condensed', sans-serif;
    
}
    body{
        background-image:url(/myweb/img/video-bg-1.jpg);
         
    }
.testimonial{
    background: #fff;
    text-align: center;
    padding: 30px 30px 50px;
    margin: 0 15px 100px;
    position: relative;
    margin-top: 168px;
}
.testimonial:before,
.testimonial:after{
    content: "";
    border-top: 40px solid #fff;
    border-right: 125px solid transparent;
    position: absolute;
    bottom: -40px;
    left: 0;
}
.testimonial:after{
    border-right: none;
    border-left: 125px solid transparent;
    left: auto;
    right: 0;
}
.testimonial .icon{
    display: inline-block;
    font-size: 80px;
    color: #bd986b;
    margin-bottom: 20px;
    opacity: 0.6;
}
.testimonial .description{
    font-size: 16px;
    color: #777;
    text-align: justify;
    margin-bottom: 30px;
    opacity: 0.9;
    letter-spacing: -1px;
}
.testimonial .testimonial-content{
    width: 100%;
    position: absolute;
    left: 0;
}
.testimonial .pic{
    display: inline-block;
    border: 6px solid white;
    border-radius: 50%;
    box-shadow: 0 0 2px 2px #daad86;
    overflow: hidden;
    z-index: 1;
    position: relative;
}
.testimonial .pic img{
    width: 100%;
    height: auto;
}
.testimonial .title{
    font-size: 15px;
    font-weight: bold;
    color: #fff;
    text-transform: capitalize;
    margin: 0 0 5px 0;
}
.testimonial .post{
    display: block;
    font-size: 14px;
    color: #ffd9b8;
}
.owl-theme .owl-controls{
    margin-top: 60px;
}
.owl-theme .owl-controls .owl-page span{
    width: 32px;
    height: 10px;
    background: #fff;
    border: 2px solid #bd986b;
    margin: 5px;
    opacity: 1;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span{
    background: #ffd9b8;
    border-color: #fff;
}
    .pic img{
        width: 100px !important;
        height: 50px;
    }
    </style>
 </head>
 <body>
<?php
            include 'header3.php'
?>

<h1 style="display: block; font-size: 4vw; color:black; text-align:center;">About Us...</h1>
    
<div class="demo">
    <h3 style="display: block; font-size: 2vw; color:black; text-align:center;"">" Ever wanted to buy a book but could
        not because it was too expensive? worry not! because Boox-I-Change is here! Boox-I-Change, these days in news,is
        being called as the Robinhood of the world of books. Boox-I-Change team is committed to bring to you all kinds
        of best books at the minimal prices ever seen anywhere. Yes, we are literally giving you away a steal."</h3>


    <div class="container">
        <div class="row">
            <h3 style="display: block; font-size: 4vw; color:black; text-align:center;"">MEET THE TEAM...</h3>
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            4th year, CSE<br>Heritage Institute of Technology <br>Web Designer</p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="/myweb/img/abhishek.jpg" alt="Abhishek"></div>
                            <h3 class="title">Abhishek Ranjan</h3>
                        </div>
                    </div>
                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            4th year, CSE<br>Heritage Institute of Technology <br>Web Developer | Data Science Enthusiast
                            |
                            Gamer</p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="/myweb/img/aman.jpg" alt="Aman"></div>
                            <h3 class="title">Aman Kumar</h3>
                        </div>
                    </div>
                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            4th year, CSE<br>Heritage Institute of Technology <br>Web Designer</p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="/myweb/img/ravi.jpeg" alt="Ravi"></div>
                            <h3 class="title">Ravi Kumar Nonia</h3>
                            
                        </div>
                    </div>

                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            4th year, CSE<br>Heritage Institute of Technology <br>Web Designer
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="/myweb/img/saurav.jpeg" alt="Saurav"></div>
                            <h3 class="title">Saurav Kumar</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer" style="background-color: #1e1f2e; color:white;">
    <div>
        Copyrigh © 2019 <a href="/myweb/index.php">Boox-I-Change</a> All Rights Reserved.
    </div>
    <div class="footer-made">
        Mail us: <a href="mailto:bookichange@gmail.com" target="_blank">booxichange@gmail.com</a><br>
        Hossainpur,Madurdaha,Kolkata-700107,West Bengal<br>
        Contact us: (+91) 9163208148,7549299680 <br>
        Let's Share Knowledge.
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 <script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        autoPlay:true
    });
});
     </script>
 </body>
 </html>