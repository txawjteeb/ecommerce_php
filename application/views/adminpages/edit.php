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
	  <div id="wrapper">
	  <div class="container" >
	  	<a href="/admin/dashboard">Dashboard > </a><a href="/admin/inventory">Product Inventory ></a>
		  	<h1 style="text-align:center;">Edit <?=$product->name ?></h1>	
		  	<br><br>
		  	<?php var_dump($product); ?>
		  	
		  	<div style="width:300px; margin:auto;">
		  	<form  action='/admin/update' method='post'>
		  		<div class="form-group">
		  			
		  			<input type="hidden" name='id' value="<?=$product->id ?>">
		  			<p>Product ID (for ref) # <?=$product->id ?></p>
					<input class="form-control" type='text' name='name' value='<?=$product->name ?>'>	<br>				
					<textarea class="form-control" name='description'><?= $product->description; ?></textarea><br>
					<select class="form-control" name="category">
						<option style="color:grey;"value="" disabled selected> <?=$product->categoryname; ?> </option>
						<?php  
							foreach ($categories as $category)
							{?>
							<option value='<?= $category->categoryid; ?>'><?= $category->categoryname; ?></option>
							<?php } ?>
						
					</select>
					<br>
					<input class="form-control" type='text' name="price" value='<?= $product->price ?>'><br>
					<input class="form-control" type='number' name="quantity" value="<?= $product->quantity ?>"><br>
					<input class="form-control" type="text" name="imgurl" value="<?= $product->imgurl ?>"><br>
				</div>
				<button type="Reset" class="btn btn-default" value="Reset">Reset</button>
				<button class="btn btn-success" style="float:right;" type="submit" value="Submit">Submit</button>

			</form>
		  </div>

	
<br><br>
	
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