<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">

	<title>Ünnëcëssärÿ Ümläüts</title>
	<link href="resources/img/uu.png" rel="icon">
	<link href="lib/bulma.css" rel="stylesheet">
	<link href="css/globals.css" rel="stylesheet">
	<link href="css/performances.css" rel="stylesheet">
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

	<div class="iframe-container">
		<iframe frameborder="0" height="600" scrolling="no" src="https://calendar.google.com/calendar/embed?src=unnecessaryumlauts%40gmail.com&ctz=America%2FNew_York" style="border: 0" width="800"></iframe>
	</div>
		<section>
	<footer class="box">
  <div class="has-text-centered">
      Website © 2019 Gabe Livengood and Matthew Tubbs. The site's source code is licensed under
      <a href="LICENSE">the AGPLv3</a>.
  </div>
</footer>
</section>
</body>
</html>
