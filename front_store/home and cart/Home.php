<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- css file link -->
	<link rel="stylesheet" href="../../images/font_awesome/all.min.css">
	<link rel="stylesheet" href="../home and cart/Home.css">


</head>

<body>
	<!-- header section  -->
	<header class="header">

		<div class="top_header">

			<a href="#" class="logo">
				<h2>Food<span>Hub</span></h2>
			</a>

			<nav class="nav_bar_1">
				<a href="../signupsignin/login.php">Sign in</a>
			</nav>

		</div>

		<div class="header_1">

			<a href="#" class="slogan"><i class="fas fa-shopping-basket"></i>E-shopping<br>made easy!</a>
			<form action="" class="search_box_container">
				<input type="search" id="search_box" placeholder="search here...">
				<label for="search_box" class="fas fa-search"></label>
			</form>
		</div>

		<div class="header_2">

			<nav class="nav_bar_2">
				<a href="../home and cart/Home.html">Home</a>
				<a href="../aisles/aisles.html">Aisles</a>
				<a href="#about_us">About Us</a>
				<a href="#contact_us">Contact Us</a>
			</nav>

			<div class="icons">
				<a class="cart" href="../../front_store/home and cart/cart.html"><ion-icon name="basket"></ion-icon>Cart<span>0</span></a>
			</div>

	</header>
	<!-- logged in user information -->

    <!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="../home and cart/Home.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

	<section class="aisles" id="aisles">

		<h1 class="heading"> Product <span>Aisles</span> </h1>

		<div class="box-container">

			<div class="box">
				<a href="../aisles/fruit and vege/fruitsandvegetables.html">
					<img src="../../images/aisles/fruits and vegetables/vegetables.jpg">
				</a>
				<h3>Fruits and Vegetables</h3>
				<a href="../aisles/fruit and vege/fruitsandvegetables.html" class="btn">Shop Now</a>
			</div>

			<div class="box">
				<a href="../aisles/snacks/snacks.html">
					<img src="../../images/aisles/snacks/snacks.jpg">
				</a>
				<h3>Snacks</h3>
				<a href="../aisles/snacks/snacks.html" class="btn">Shop Now</a>
			</div>

			<div class="box">
				<a href="../aisles/dairy/dairyproducts.html">
					<img src="../../images/aisles/dairy products/dairy.jpg">
				</a>
				<h3>Dairy Products</h3>
				<a href="../aisles/dairy/dairyproducts.html" class="btn">Shop Now</a>
			</div>

			<div class="box">
				<a href="../aisles/meat/meatpoultryfish.html">
					<img src="../../images/aisles/meat poultry and fish/meat.jpg">
				</a>
				<h3>Meat, Poultry and Fish</h3>
				<a href="../aisles/meat/meatpoultryfish.html" class="btn">Shop Now</a>
			</div>
			
			<div class="box">
				<a href="../aisles/beverages/beverages.html">
					<img src="../../images/aisles/beverages/beverages.jpg">
				</a>
				<h3>Beverages</h3>
				<a href="../aisles/beverages/beverages.html" class="btn">Shop Now</a>
			</div>

			<div class="box">
				<a href="../aisles/baked/bakedgoods.html">
					<img src="../../images/aisles/baked goods/dessert.jpg">
				</a>
				<h3>Baked Goods</h3>
				<a href="../aisles/baked/bakedgoods.html" class="btn">Shop Now</a>
			</div>

		</div>

	</section>

	<footer>

		<div class="footer_sec about_us">

			<h2 id="about_us">About<span>Us</span></h2>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel esse natus enim nesciunt rerum delectus molestiae,
				sequi deserunt officia blanditiis exercitationem ut aperiam porro veritatis accusantium dolor error mollitia
				nihil.
			</p>

			<div class="social_media_logos">
				<a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
				<a href="https://twitter.com/home"><i class="fab fa-twitter-square"></i></a>
				<a href="https://www.instagram.com/"><i class="fab fa-instagram-square"></i></a>
				<a href="https://www.youtube.com/"><i class="fab fa-youtube-square"></i></a>
			</div>
		</div>

		<div class="footer_sec quick_links">

			<h2>Quick <span>links</span></h2>
			<br>
			<ul>
				<a href="../home and cart/Home.html">
					<li>Home</li>
				</a>
				<a href="../aisles/aisles.html">
					<li>Aisles</li>
				</a>
				<a href="#">
					<li>Team</li>
				</a>
				<a href="#">
					<li>Terms and Conditions</li>
				</a>
			</ul>
		</div>

		<div class="footer_sec contact_us">
			<h2 id="contact_us">Contact <span>Us</span></h2>
			<br>
			<form action="P1.html" method="post">
				<input type="email" name="email" class="contact_input email_input" placeholder="Your email address...">
				<textarea name="message" id="" class="contact_input email_input" placeholder="Your message..."></textarea>
				<button type="submit" class="btn btn-big">
					<i class="fas fa-envelope"></i>
					Send
				</button>
			</form>

		</div>

		<div class="footer_bottom">
			 FoodHub.com ~ designed by BellyGeek
		</div>

	</footer>
	<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>
