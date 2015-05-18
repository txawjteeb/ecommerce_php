<html>
<head>
	<title>Cart and Checkout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/main.css');?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <!-- <div class="navbar-header">
	      <a class="navbar-brand" href="/">MBR Foods</a>
	    </div> -->
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      	<!-- <ul class="nav navbar-nav navbar-left">
	        	<li><a href="login.php">Login</a></li>
	    	</ul> -->
	    	<a href="/"><img src="/assets/mbr.png" style="display: inline-block; width:80px; margin-top:10px;"></a>
	      	<ul class="nav navbar-nav navbar-right" style="margin-top:20px;">
	        <?php 
	        if($this->session->userdata('is_login') == true)
	        	{
		        	echo '<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Welcome'.' '.$this->session->userdata('user_fname').'!<span class="caret"></span></a>';
		        	echo '<ul class="dropdown-menu" role="menu">';
		        	echo '<li><a href="/main/logoff">Log Off</a></li></ul>';
		        }
	        else
	        	echo '<li><a href="/main/login">Login</a></li>';
	        ?>
	        <li><a href="/main/cart">Shopping Cart (<?= $this->session->userdata('cart')['total_items'] ?>)</a></li>
	      	</ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div id="wrapper">
		<div class="container">
			<div class="cart">
				<h3>Your Shopping Cart</h3>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Name</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Action</th>
							<th>Total</th>
						</tr>
					</thead>
	 				<?php

	 				// var_dump($cart);
	 				// die();

					foreach( $cart as $item)
					{?>
					<?php if($item['price'] !== null) 
						{ ?>
						<tr>
							<td style="width:700px;"><?= $item['name'] ?></td>
							<td style="width:100px;">$<?= $item['price'] ?></td>
							<td ><?= $item['quantity'] ?></td>
							<td><a href="/main/update/<?= $item['id'] ?>"> Update |</a><a href="/main/delete/<?= $item['id'] ?>"> Delete </a> </td>
							<td>$<?= $item['subtotal'] ?></td>
						</tr>
					<?php } ?>

				<?php } ?>
				</table>
				<br>
				<div id="total">
					<h4>Grand total: $<?= $cart['total_price'] ?></h4>
					<a href="/main/product_category">Continue Shopping</a>
				</div>
			</div>

			<div id="shipbill">
				<div id="shipping">
					<h4>Shipping Information</h4><br>
					<!-- shipping form starts-->
					<form action="/main/payment" method="POST">
					<label>First Name</label>  <input type="text" name="ship_first_name"><br>
					<label>Last Name</label>  <input type="text" name="ship_last_name"><br>
					<label>Address</label>
					<input type="text" name="ship_address1"  placeholder="street name 1"><br>
					<input type="text" name="ship_address2" placeholder="street name 2"><br>
					<input type="text" name="ship_city" placeholder="city"><br>
					<input type="number" name="ship_zipcode" placeholder="zipcode"><br>
					<select name='ship_state'>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
				</div>
				<!-- shipping form ends -->
				<!-- billing form starts -->
				<div id="billing">
					<h4>Billing Information</h4><br>
					
					<input type="checkbox" name="address" value="shipping-info">Same as Shipping<br><br>
					<label>First Name</label>  <input type="text" name="first_name"><br>
					<label>Last Name</label>  <input type="text" name="last_name"><br>
					<label>Address</label>
					<input type="text" name="address1"  placeholder="Street name 1"><br>
					<input type="text" name="address2" placeholder="Street name 2"><br>
					<input type="text" name="city" placeholder="city"><br>
					<input type="number" name="zipcode" placeholder="zipcode"><br>
					<select name='state'>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
				</div>
				<!-- billing form ends -->


				<div id="payment">
					<h4>Payment Method</h4><br>
					<label>Credit Card Number</label><input type="text" name="credit_card">
					<label>Expiration Date</label><input type="date" name="expiration">
					<input id="buy" type="submit" value="Place Order" disabled>
				</div>
				</form>
			</div>
		</div>
		<footer class="footer">
		 	<ul>
		 		<li><a href="">Terms and Conditions</a></li>
		 		<li><a href="">Privacy Policy</a></li>
		 		<li><a href="">About Us</a></li>
		 		<li><a href="">Contact</a></li>
		 	</ul>
		 	<h5 style="color: gray;">Copyright &copy 2015 MBR Foods Pvt. Ltd.</h5>
		</footer>
	</div>
</body>
</html>