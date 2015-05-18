<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MBR Foods</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/main.css');?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	})
	</script>
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

	    	<img src="assets/mbr.png" style="display: inline-block; width:80px; margin-top:10px;">
	      
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
			<div class="navigation-and-search">
				<ul id="menu">
			        <li><a href="#">Specials</a></li>
			        <li class="dropdown">
			          <a href="/main/products" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products<span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			          	<li><a href="/main/product_category">All Products</a></li>
			            <li><a href="/main/sort/2">Candy</a></li>
			            <li><a href="/main/sort/1">Snacks</a></li>
			            <li><a href="/main/sort/3">Ready to Eat</a></li>
			            <li><a href="/main/sort/6">Fruits and Veggies</a></li>
			            <li><a href="/main/sort/5">Meats</a></li>
			            <li><a href="/main/sort/4">Spices and Sauces</a></li>
			          </ul>
			        </li>
			        <li><a href="#">New Arrivals</a></li>
			      </ul> 

			    <!-- <form class="navbar-form navbar-right" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form> -->
	 		 </div>
			<div class="bs-example">
			    <div id="myCarousel" class="carousel slide" data-interval="10000" data-ride="carousel">
			    	<!-- Carousel indicators -->
			        <ol class="carousel-indicators">
			            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			            <li data-target="#myCarousel" data-slide-to="1"></li>
			            <li data-target="#myCarousel" data-slide-to="2"></li>
			        </ol>   
			       <!-- Carousel items -->
			        <div class="carousel-inner">
			            <a href="/main/product_view/5"><div class="active item">
			            	<img src="http://ecx.images-amazon.com/images/I/71dSeRs6eQL._SL1005_.jpg" style="height:370px; margin-left:150px;">
			                <h2>Slide 1</h2>
			                <div class="carousel-caption">
			                  <h3>Nong Shim Instant Ramen on sale!</h3>
			                  <p>A Favorite in Korea! Spicy and delicious!</p>
			                </div></a>
			            </div>
			            <a href="/main/product_view/23"><div class="item">
			                <img src="http://ecx.images-amazon.com/images/I/41bYnC1I8RL.jpg" style="height:370px; margin-left:140px;">
			                <h2>Slide 2</h2>
			                <div class="carousel-caption">
			                  <h3>Bison Steak Sampler</h3>
			                  <p>Next time you have a craving for beef, try bison instead. Extra lean and with all the goodness</p>
			                </div></a>
			            </div>
			            <a href="/main/product_view/3"><div class="item">
			                <img src="http://ecx.images-amazon.com/images/I/413DFETWRRL.jpg" style="height:370px; margin-left:150px;">
			                <h2>Slide 3</h2>
			                <div class="carousel-caption">
			                  <h3>Eat more Nori Maki Arare</h3>
			                  <p>A classic snack Japanese snack, you never had anything like this before!</p>
			                </div></a>
			            </div>
			        </div>
			        <!-- Carousel nav -->
			        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left"></span>
			        </a>
			        <a class="carousel-control right" href="#myCarousel" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right"></span>
			        </a>
			    </div>
			</div>
			<h3>Featured Products</h3>
			<div class="row" style="margin-bottom:40px;">
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
			      <img src="http://ecx.images-amazon.com/images/I/61V9RY-dL6L.jpg" alt="...">
			      <div class="caption">
			        <h3>McVities Chocolate Digestives</h3>
			        <p>A favorite among Brits! Wheat biscuits topped with a thin layer of smooth milk chocolate!</p>
			        <p><a href="/main/product_view/32" class="btn btn-primary" role="button">Learn More</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
			      <img src="http://ecx.images-amazon.com/images/I/71HHWsfWcJL._SL1000_.jpg" alt="...">
			      <div class="caption">
			        <h3>Green Tea Kit Kat</h3>
			        <p>Originating from Japan. This bag contains 12 individually wrapped mini bars.</p>
			        <p><a href="/main/product_view/33" class="btn btn-primary" role="button">Learn More</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
			      <img src="http://martjackstorage.blob.core.windows.net/in-resources/23c09df6-eb5f-49c2-b8a7-48a42be26ed9/Images/ProductImages/Large/650030257_F.jpg" alt="...">
			      <div class="caption">
			        <h3>Nachni Soy Chips</h3>
			        <p>These Nachni Chips not only makes a great tasty snack, but also add nutritious value to your body.</p>
			        <p><a href="/main/product_view/11" class="btn btn-primary" role="button">Learn More</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
			      <img src="http://www.chitalebandhu.in/content/images/thumbs/0000078_bakarwadi_360.jpeg" alt="...">
			      <div class="caption">
			        <h3>Chitlebandhu Bhakarwadi</h3>
			        <p>Fried crispy spicy spring rolls delivered to your doorstep!</p>
			        <p><a href="/main/product_view/18" class="btn btn-primary" role="button">Learn More</a>
			      </div>
			    </div>
			  </div>
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