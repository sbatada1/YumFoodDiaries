<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The YumFood Diaries - Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/manual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image: url('img/backgrnd.jpg');">
    <div class="brand">The YumFood Diaries </div>
    <div class="address-bar">A102345 Hills  | Golden Nest, GCC club | 123.456.7890</div>

	<?php
		
	if (isset($_GET["logout"])) {
		
		if ($_GET["logout"] == "true") { ?>
			
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>You have been logged out of the system.</strong>
			</div>   

	<?php
		}
	}
	?>	
    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/car1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/car2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/car3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">The YumFood Diaries</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Vidya Rautela</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="box">
        <div class="container1">
            <h2>Try Out Our Fresh Cakes</h2> 
   <div id="alerts"></div>
<div class="productcont">
        <div class="product">
            <h3 class="productname">Pound Cake</h3>
            <p class="price">Rs. 750</p>
            <button class="addtocart">Add To Cart</button>
        </div>
        <div class="product">
            <h3 class="productname">Sponge Cake</h3>
            <p class="price">Rs. 950</p>
            <button class="addtocart">Add To Cart</button>
        </div>
        <div class="product">
            <h3 class="productname">Chiffon Cake</h3>
            <p class="price">Rs. 1050</p>
            <button class="addtocart">Add To Cart</button>
        </div>
        </div>
        <div class="cart-container1">
          <h2>Cart</h2>
          <table>
            <thead>
              <tr>
              <th><strong>Product</strong></th>
              <th><strong>Price</strong></th>
            </tr>
            </thead>
            <tbody id="carttable">
            </tbody>
          </table>

          <table id="carttotals">
            <tr>
              <td><strong>Items</strong></td>
              <td><strong>Total</strong></td>
            </tr>
            <tr>
              <td>x <span id="itemsquantity">0</span></td>
             
              <td>Rs. <span id="total">0</span></td>
            </tr></table>

            
          <div class="cart-buttons">  
            <button id="emptycart">Empty Cart</button>
            <button id="checkout">Checkout</button>
          </div>
        </div>
        
</div>
        </div>

<div class="box">
    <div class="container">
        
<div class="cart-container">
  <div class="cart-header">
    <h1 class="cart-title">Pizza Stories</h1>
    <p class="cart-subtitle">Thanks for your order #2357654, your package will be on it's way shortly.</p>
  </div>
  <div class="cart-body">
    <div class="cart-items">
      <div class="cart-item">
        <div class="item-name">Special Mozzarella Cheese Pizza</div>
        <div class="item-price">317</div>
      </div>
      <div class="cart-item">
        <div class="item-name">Add Ons: Cheddar Cheese</div>
        <div class="item-price">39</div>
      </div>
      <div class="cart-item">
        <div class="item-name">TOTAL</div>
        <div class="item-price">356</div>
      </div>
    </div>
  </div>
  <div class="cart-bg"><img src="img/pizza.jpg" alt="Pizza" style="width: 380px; height: 190px; margin-top:110px; margin-left: 27px;"/></div>
</div>
    </div>
</div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">HOW TO MAKE 
                        <strong>THE YumFood Diaries</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/onion-potato.jpg" alt="">
                    <hr class="visible-xs">
                    <p>Making the Yum food can be challenging! With so many unique flavours and recipes to choose from, where do you begin? This website provides you with the best recipes from around the world. 
                    Whether you prefer your drinks or delicious different categories of food - we are sure to have what you are looking for. For access to unlimited recipes you must direct <a href="#contactus">contact us!</a></p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>&copy 2021 </p>
                </div>
            </div>
        </div>
    </footer>
    <br>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //can changes the speed
    })
    </script>

</body>
<script src="js/style.js"></script>
</html>
