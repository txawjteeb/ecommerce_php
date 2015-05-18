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
	      	
	        
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	  <div class="container" >
		  	<h1 style="text-align:center;">Admin Login</h1>	
		  	<div class="forms" style="margin:auto; text-align:center;">
		  		<?php 
				if ($this->session->flashdata('errors'))
					{	
						echo $this->session->flashdata("errors");	
					}
				?>
			  	<div class="login" style="display:inline-block;">
			  		
			  		<form action="/admin/login" method="post">
			  			<input type="hidden" name="login"><br><br>
			  			<input type="text" name="email" placeholder="email"><br><br>
			  			<input type="password" name="password" placeholder="password"><br><br><br>
			  			<button class="btn btn-success" style="float:right;" type="submit" value="Login">Login</button>
			  		</form>

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
	 	<h5 style="color: gray;">Copyright MBR Foods Pvt. Ltd.</h5>
	</footer>
</body>
</html>