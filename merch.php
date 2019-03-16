<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">

	<title>Ünnëcëssärÿ Ümläüts</title>
	<link href="resources/img/uu.png" rel="icon">
	<link href="lib/bulma.css" rel="stylesheet">
	<link href="css/globals.css" rel="stylesheet">
	<link href="css/merch.css" rel="stylesheet">
	<script defer src="lib/fontawesome.js">
	</script>
</head>

<body>
	<nav aria-label="main navigation" class="navbar has-background-light is-fixed-top" role="navigation">
		<div class="navbar-brand">
			<a class="navbar-item" href="../"><img height="28" src="resources/img/uu.svg" width="112"></a> <a aria-expanded="false" aria-label="menu" class="navbar-burger burger" data-target="navbar" role="button"><span aria-hidden="true"></span> <span aria-hidden="true"></span> <span aria-hidden="true"></span></a>
		</div>


		<div class="navbar-menu is-bold" id="navbar">
			<div class="navbar-start">
				<a class="navbar-item" href="about.php">About Us</a> <a class="navbar-item" href="music.php">Our Music</a>

				<div class="navbar-item has-dropdown is-hoverable">
					<a class="navbar-link">More</a>

					<div class="navbar-dropdown">
						<a class="navbar-item" href="contact.php">Contact Us</a> <a class="navbar-item" href="merch.php">Our Merch</a>

						<hr class="navbar-divider">
						<a class="navbar-item" href="/cchs-tsa">About Chamblee Charter High School TSA</a>
					</div>
				</div>
			</div>


			<div class="navbar-end">
				<div class="navbar-item">
					<div class="buttons">
						<a class="button is-primary has-background-danger is-bold" href="performances.php"><strong>Upcoming Performances</strong></a>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<script type="text/javascript">
	     (function() {
	       var burger = document.querySelector('.burger');
	       var nav = document.querySelector('#'+burger.dataset.target);
	       burger.addEventListener('click', function(){
	         burger.classList.toggle('is-active');
	         nav.classList.toggle('is-active');
	       });
	     })();
	</script>

	<section class="hero has-background-black-ter">
		<div class="hero-body">
			<div class="container">
				<h1 class="title has-text-light">Merch</h1>


				<h2 class="subtitle has-text-white">A collection of insanely powerful limited edition relics of our career.</h2>
			</div>
		</div>
	</section>


	<br><div class='page-content'>
		<div class="columns has-text-centered">
			<div class="column">
				<img src="resources/img/uuoutline.png" style="width:500px; height:500px;">

				<p style="text-align:center;">Unncessary Umlauts EP Complete Album [$9]</p>
				<br>
				<img src="resources/img/bluehoodie.png" style="width:500px; height:500px;">

				<p style="text-align:center;">Blue U/U Hoodie [$28]</p>
			</div>


			<div class="column">
				<img src="resources/img/bigumlauts.png" style="width:500px; height:500px;">

				<p style="text-align:center;">Especially Big Umlauts Complete Album [$11]</p>
				<br>
				<img src="resources/img/lightsteelhoodie.png" style="width:500px; height:500px;">

				<p style="text-align:center">Light Gray U/U Hoodie [$28]</p>
			</div>


			<div class="column">
				<img src="resources/img/oceansofumlauts.png" style="width:500px; height:500px;">

				<p style="text-align:center;">Oceans of Umlauts Complete Album [$15]</p>
				<br>
				<img src="resources/img/omegaemoblackhoodie.png" style="width:500px; height:500px;">

				<p style="text-align:center">Omega Black on Black Hoodie [$35]</p>
			</div>
		</div>
	</div>
		<br><section>
	<footer class="box">
  <div class="has-text-centered">
      Website © 2019 Gabe Livengood and Matthew Tubbs. The site's source code is licensed under 
      <a href="LICENSE.txt">the AGPLv3</a>.
  </div>
</footer>
</section>
</body>
</html>