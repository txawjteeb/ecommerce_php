<html>
<head>
	<title> Login and Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/main.css');?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
	      	<li><a href="/main/login">Login</a></li>
	        <li><a href="/main/cart">Shopping Cart (<?= $this->session->userdata('cart')['total_items'] ?>)</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	  <div id="wrapper">
	  <div class="container" >
	  		<?php 
			  			if($this->session->flashdata('errors'))
			  			{
			  				echo $this->session->flashdata('errors');
			  			}
			  			if($this->session->flashdata('success'))
			  			{
			  				echo $this->session->flashdata('success');
			  			}
			  		 ?>

		  	<h1 style="text-align:center;">Please Login or Register</h1>
		  	<div class="forms" style="margin:auto; text-align:center;">
			  	<div class="login" style="display:inline-block; height:400px; vertical-align:top; padding-left:100px; padding-right:100px; border-right:1px solid black;">
			  		<h3>Login</h3><br>
			  		<form action="/main/user_login" method="post">
			  			<input type="hidden" name="login"><br><br>
			  			<input type="text" name="email" placeholder="email"><br><br>
			  			<input type="password" name="password" placeholder="password"><br><br><br>
			  			<input type="submit" value="Login" style="float:right;">
			  		</form>
				</div>

				<div class="register" style="display:inline-block; padding-left:100px; padding-right:100px; vertical-align:top; margin:auto;">
					<h3>New Users</h3>
					
			  					  		<form action="/main/reg_user" method="post">
			  			<!-- <input type="hidden" name="login"><br><br> -->
			  			<input type="text" name="first_name" placeholder="first name"><br><br>
			  			<input type="text" name="last_name" placeholder="last name"><br><br>
			  			<input type="text" name="email" placeholder="email"><br><br>
			  			<input type="password" name="password" placeholder="password"><br><br>
			  			<input type="password" name="confirm" placeholder="confirm password"><br><br>

			  			<br>
			  			<input type="submit" value="Register" style="float:right;">
			  		</form>
				</div>
		</div>




	  </div>

<!-- <nav class="navbar navbar-inverse" style="width:100%; height:15%;">
	<p style="color:white;">This is a footer</p>
</nav>
 -->
		 <footer class="footer">
			 	<ul>
			 		<li><a href="">Terms and Conditions</a></li>
			 		<li><a href="">Privacy Policy</a></li>
			 		<li><a href="">About Us</a></li>
			 		<li><a href="">Contact</a></li>
			 	</ul>
			 	<h5 style="color: gray;">Copyright MBR Foods Pvt. Ltd.</h5>
		</footer>
	</div>
</body>
</html>