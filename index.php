<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">

	<title>Ünnëcëssärÿ Ümläüts</title>
	<link href="resources/img/uu.png" rel="icon">
	<link href="lib/bulma.css" rel="stylesheet">
	<link href="lib/bulma-carousel.css" rel="stylesheet">
	<link href="css/globals.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<script defer src="lib/fontawesome.js">
	</script>
	<script defer src="lib/jquery.js">
	</script>
	<script defer src="lib/bulma-carousel.js">
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


	<section>
		<div class="is-hidden-mobile" style="position:relative;">
			<img src="resources/img/indexpic.png" style='height: 100%; width: 100%; object-fit: contain'>

			<div style="position:absolute; bottom:8px; left:16px; font-size:0.75rem;">
				By Alexis Mincolla - Alexis Mincolla, 3teeth, <u><a href="https://creativecommons.org/licenses/by-sa/4.0" style="color:inherit;" title="Creative Commons Attribution-Share Alike 4.0">CC BY-SA 4.0</a></u> / image cropped and text added. <a href="https://commons.wikimedia.org/w/index.php?curid=75342925" style="color:inherit;"><u>Wikimedia Commons Link</u></a>
			</div>
		</div>


		<div class="is-hidden-tablet"><img src="resources/img/2ndindex.png">
		</div>


		<section class="hero is-large is-danger is-bold">
			<div class="page-content">
				<div class="is-size-3">
					<p><br>
					Welcome to the wonderful website of the band Ünnëcëssärÿ Ümläüts.</p>
				</div>
				Prepare yourself to feel the most powerful wave of awe you have ever experienced.
			</div>
			<br>
		</section>
	</section>


	<section class="hero is-dark is-bold">
		<div class="hero-header page-content" style="font-size:3em;">
			<br>
			Information regarding the unholy formation of the Ünnëcëssärÿ Ümläüts
		</div>


		<div class="page-content">
			<div class="hero-body" style="font-size:1.5em;">
				The Ünnëcëssärÿ Ümläüts were formed to combat the overwhelming themes of happiness and love in today's music and to replace them with darkness, pain, and loneliness. We accomplish this through heavy metal that rips and tears through the souls of our victims, we serve our master and he will not be named. Music is life, and life after all is just a precoursor to death...
			</div>
		</div>
	</section>


	<section>
		<footer class="box">
			<div class="has-text-centered">
				Website © 2019 Gabe Livengood and Matthew Tubbs. The site's source code is licensed under <a href="LICENSE">the AGPLv3</a>.
			</div>
		</footer>
	</section>
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
</body>
</html>
