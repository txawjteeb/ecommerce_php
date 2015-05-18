<html>
<head>
	<title> Admin Login</title>
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
	       	<li><a href="">Welcome, <?=$this->session->userdata('admin_name') ?></a></li>
	      	<li><a href="/admin">Logout</a></li>
	        
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	  <div class="container" >
	  	
		  	<h1 style="text-align:center;">Admin Dashboard</h1>	
		  	<br><br>
		  	<div class="container-fluid" style="text-align:center;">
			  		<a class="btn btn-primary" href="/admin/inventory" role="button">Products</a>
			  		<a class="btn btn-success" href="/admin/orders" role="button">Orders</a>
			  		<a class="btn btn-danger" href="/admin/users" role="button">Users</a>
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
</body>
</html>