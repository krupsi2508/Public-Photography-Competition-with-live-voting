<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Photography competition</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html">Photography competition<span>by CAPTURE</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="categories.html">Categories & Upload images</a></li>
					<li><a href="galleries.html">view Competition details</a></li>
				</ul>
			</nav>
			

		<!-- Banner -->
			<section class="banner full">
			
				<article>
					<img src="images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<p><a href="https://templated.co">CAPTURED</a></p>
							<h2> welcome user</h2>
						</header>
					</div>
				</article>
				
					
				<article>
					<img src="images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							<form action ="xyz.php" method="POST">
			<div class="group">
          <label for="category" class="label">Category</label>
          
	
	<select name="category" class="input" >
 	<option value= "nature">Nature</option>
 	<option  value="travel">Travel</option>
 	<option class="label"value="wedding">Wedding</option>
 	<option class="label"value="animal">Animals</option>
	<option class="label" value="lightining">Lightining</option>
 	<option class="label"value="food">Food </option>
 	<option class="label"value="fashion">Fashion</option>
	<option class="label" value="lifestyle">lifestyle</option>
	
	 <option selected="selected"class="label">select</option>
	 <?php 
	   $res = mysqli_query("SELECT * FROM table_img");
	   while($r=mysqli_fetch_row($res))
	   {
	      echo "<option value='$r[0]'> $r[0] </option>";
		}
      ?>		
    </select>
        </div>
		<div class="group">
		<br/>
		<input type="submit" name="insert" id="insert" value="go"/>
		</div>
		
	 </form>
						</header>
					</div>
				</article>
				
				
			</section>

		


		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>