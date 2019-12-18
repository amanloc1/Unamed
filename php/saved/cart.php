<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) 
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
	<link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <body>
        <?php
            include 'header.php';
            $user_id = $_SESSION['user_id'];
            $cart_display_query = "select * from items inner join users_items on items.id = users_items.item_id where users_items.user_id = '$user_id' and users_items.status = 'added to cart'";
            $display_query_submit = mysqli_query($con, $cart_display_query) or die(mysqli_error($con));
            $display_query_result = mysqli_num_rows($display_query_submit);
            if($display_query_result==0)
            {
        ?>
                <center>
                <img src="image/cart.png" alt="cart image"><br>
                <p><a href="products.php">click </a>to add items in the cart!!</p>
                </center>
        <?php
            }
            else 
            {
        ?>
                <div class="main_body">
		<div class="container">
			<div class="body_content">
				<div class="col-xs-6 col-xs-offset-3">
					<table class="table table-hover">
						<tbody>
							<tr>
								<th>Item Number</th>
								<th>Item Name</th>
								<th>Price</th>
								<th></th>
							</tr>
        <?php
                $row = mysqli_fetch_array($display_query_submit);
                $sum=$row['price'];
                $id=$row['item_id'];
                $display_query_result--;
        ?>
                <tr>
                    <td><?php echo $row['item_id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><a href="cart_remove.php?id=<?php echo $row['item_id'] ?>" class="remove_item_link"> Remove</a></td>
                </tr>
        <?php
                while($display_query_result)
                {
                    $row = mysqli_fetch_array($display_query_submit);
                    $sum = $sum+$row['price'];
                    $id.=",".$row['item_id'];
        ?>          
                    <tr>
                        <td><?php echo $row['item_id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><a href="cart_remove.php?id=<?php echo $row['item_id'] ?>" class="remove_item_link"> Remove</a></td>
                    </tr>
        <?php
                    $display_query_result--;
                }                
        ?>
                    <tr>
                        <td></td>
			<td>Total</td>
                        <td>Rs <?php echo $sum?>/-</td>
                        <td><a href="success.php?id=<?php echo $id ?>"><button class="btn btn-primary">Confirm order</button></a></td>
                    </tr>
        <?php
            }
        ?>
                                    </tbody>
                                    </table>
				</div>
			</div>
		</div>
                </div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>
