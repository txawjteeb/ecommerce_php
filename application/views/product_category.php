<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MBR Foods</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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
      <div class="navigation-and-search">
        <ul id="menu">
              <li><a href="#">Specials</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/main/sort/2">Candy</a></li>
                  <li><a href="/main/sort/1">Snacks</a></li>
                  <li><a href="/main/sort/3">Ready to Eat</a></li>
                  <li><a href="/main/sort/4">Fruits and Veggies</a></li>
                  <li><a href="/main/sort/5">Meats</a></li>
                  <li><a href="/main/sort/6">Spices and Sauces</a></li>
                </ul>
              </li>
              <li><a href="#">New Arrivals</a></li>
            </ul> 

          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
       </div>
       <br>
      <h3>All Products</h3>
      <div class="row">
          <?php foreach ($products as $product)
          { ?>

  
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail" style="height:430px;">
            <img src="<?= $product['imgurl'] ?>" alt="...">
            <div class="caption">
              <h4 style="color:red;">$<?= $product['price'] ?></h4>
              <h3><?= $product['name'] ?></h3>
              <p><?= $product['description'] ?></p>
              <p><a href="/main/product_view/<?= $product['id'] ?>" class="btn btn-primary" role="button">Learn More</a></p>
            </div>
          </div>
        </div>

    
    <?php   }?>

    

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