<style>
.portlet-title{
	text-align: left;
}
.portlet-body{
	text-align: center;
}
</style>
<!-- BEGIN CONTENT -->			
<div class="portlet" >
        <div class="portlet-title">
            <div class="caption">
                <!--<h2>Recently added</h2>-->
			</div>
            <div class="tools">
                <span class="h3"></span>
            </div>
        </div>
		
		<div class="portlet-body">
            <div class="owl-carousel owl-carousel6-brands">
					
			<?php
				$conn = mysqli_connect("localhost", "root", "", "book-i-change");
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT book_name,img_path,our_price,seller_price,new_book_price FROM newlyaddedbooks";
				$result = $conn->query($sql);
				if ($result->num_rows > 0)
				// output data of each row
				while($row = $result->fetch_assoc()) 
				{
			?>
					<div>
					<div class="product-item">
					<div class="pi-img-wrapper">
					<a href="index.php">
					<img src="<?php $row["img_path"] ?> " class="img-responsive center-block hidden-xs" alt="bookimg" style="height: 220px;">
					</a>
					</div>
					<h3><a href="index.php"><?php $row["book_name"] ?> </a></h3>
					<div class="pi-price-center">Rs<?php $row["our_price"] ?></div>
					<div class="pi-price-left">Rs<?php $row["our_price"] ?> </div>
					<div class="pi-price-right">Rs<?php $row["our_price"] ?></div>
					</div>
				</div>
			<?php
				}
			?>

					<div>
						<div class="product-item">
							<div class="pi-img-wrapper">
								<a href="#">
									<img src="imgpath" class="img-responsive center-block hidden-xs" alt="bookimg" style="height: 220px;">
								</a>
							</div>
						  	<h3><a href="product link">name of book</a></h3>
							<div class="pi-price-center">
								Rs. our price
							</div>
							<div class="pi-price-left">
								<s>Rs. sell pr</s>
							</div>
							<div class="pi-price-right">
								<s>Rs. new price</s>
							</div>
						</div>
					</div>
					
					<div>
						<div class="product-item">
							<div class="pi-img-wrapper">
								<a href="#">
									<img src="imgpath" class="img-responsive center-block hidden-xs" alt="bookimg" style="height: 220px;">
								</a>
							</div>
						  	<h3><a href="product link">name of book</a></h3>
							<div class="pi-price-center">
								Rs. our price
							</div>
							<div class="pi-price-left">
								<s>Rs. sell pr</s>
							</div>
							<div class="pi-price-right">
								<s>Rs. new price</s>
							</div>
						</div>
					</div>
					
					<div>
						<div class="product-item">
							<div class="pi-img-wrapper">
								<a href="#">
									<img src="imgpath" class="img-responsive center-block hidden-xs" alt="bookimg" style="height: 220px;">
								</a>
							</div>
						  	<h3><a href="product link">name of book</a></h3>
							<div class="pi-price-center">
								Rs. our price
							</div>
							<div class="pi-price-left">
								<s>Rs. sell pr</s>
							</div>
							<div class="pi-price-right">
								<s>Rs. new price</s>
							</div>
						</div>
					</div>
					
					<div>
						<div class="product-item">
							<div class="pi-img-wrapper">
								<a href="#">
									<img src="imgpath" class="img-responsive center-block hidden-xs" alt="bookimg" style="height: 220px;">
								</a>
							</div>
						  	<h3><a href="product link">name of book</a></h3>
							<div class="pi-price-center">
								Rs. our price
							</div>
							<div class="pi-price-left">
								<s>Rs. sell pr</s>
							</div>
							<div class="pi-price-right">
								<s>Rs. new price</s>
							</div>
						</div>
					</div>
					
					<div>
						<div class="product-item">
							<div class="pi-img-wrapper">
								<a href="#">
									<img src="imgpath" class="img-responsive center-block hidden-xs" alt="bookimg" style="height: 220px;">
								</a>
							</div>
						  	<h3><a href="product link">name of book</a></h3>
							<div class="pi-price-center">
								Rs. our price
							</div>
							<div class="pi-price-left">
								<s>Rs. sell pr</s>
							</div>
							<div class="pi-price-right">
								<s>Rs. new price</s>
							</div>
						</div>
					</div>
					
					<div>
						<div class="product-item">
							<div class="pi-img-wrapper">
								<a href="#">
									<img src="imgpath" class="img-responsive center-block hidden-xs" alt="bookimg" style="height: 220px;">
								</a>
							</div>
						  	<h3><a href="product link">name of book</a></h3>
							<div class="pi-price-center">
								Rs. our price
							</div>
							<div class="pi-price-left">
								<s>Rs. sell pr</s>
							</div>
							<div class="pi-price-right">
								<s>Rs. new price</s>
							</div>
						</div>
					</div>
					
					<div>
						<div class="product-item">
							<div class="pi-img-wrapper">
								<a href="#">
									<img src="imgpath" class="img-responsive center-block hidden-xs" alt="bookimg" style="height: 220px;">
								</a>
							</div>
						  	<h3><a href="product link">name of book</a></h3>
							<div class="pi-price-center">
								Rs. our price
							</div>
							<div class="pi-price-left">
								<s>Rs. sell pr</s>
							</div>
							<div class="pi-price-right">
								<s>Rs. new price</s>
							</div>
						</div>
					</div>
					
					<div>
						<div class="product-item">
							<div class="pi-img-wrapper">
								<a href="#">
									<img src="imgpath" class="img-responsive center-block hidden-xs" alt="bookimg" style="height: 220px;">
								</a>
							</div>
						  	<h3><a href="product link">name of book</a></h3>
							<div class="pi-price-center">
								Rs. our price
							</div>
							<div class="pi-price-left">
								<s>Rs. sell pr</s>
							</div>
							<div class="pi-price-right">
								<s>Rs. new price</s>
							</div>
						</div>
					</div>
					
					<div>
						<div class="product-item">
							<div class="pi-img-wrapper">
								<a href="#">
									<img src="imgpath" class="img-responsive center-block hidden-xs" alt="bookimg" style="height: 220px;">
								</a>
							</div>
						  	<h3><a href="product link">name of book</a></h3>
							<div class="pi-price-center">
								Rs. our price
							</div>
							<div class="pi-price-left">
								<s>Rs. sell pr</s>
							</div>
							<div class="pi-price-right">
								<s>Rs. new price</s>
							</div>
						</div>
					</div>
					
					<div>
						<div class="product-item">
							<div class="pi-img-wrapper">
								<a href="#">
									<img src="imgpath" class="img-responsive center-block hidden-xs" alt="bookimg" style="height: 220px;">
								</a>
							</div>
						  	<h3><a href="product link">name of book</a></h3>
							<div class="pi-price-center">
								Rs. our price
							</div>
							<div class="pi-price-left">
								<s>Rs. sell pr</s>
							</div>
							<div class="pi-price-right">
								<s>Rs. new price</s>
							</div>
						</div>
					</div>
					
			</div>
		</div>
</div>
<!-- END CONTENT -->