<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Genres</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="{{ url('/')}}">Movies</a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="{{ url('/')}}">Home</a></li>
					<li><a href="{{ url('movies') }}">Movies</a></li>
					<li><a href="{{ url('producers') }}">Producers</a></li>
				</ul>
			</nav>
        <section id="main" class="wrapper">
			@yield('table  table-striped table-primary align-middle')
		</section>
		<!-- Content -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="post" class="wrapper bg-img" data-bg="popcorn.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Look for the best genres!</h2>
						</header>
						<table class="table  table-striped table-primary align-middle">
							<thead>
							<tr>
								<th scope="col">Id</th>
								<th scope="col">Type</th>
								<th scope="col">Note</th>
								<th scope="col">View More</th>
							</tr>
							</thead>
							<tbody>
								@include('layouts.partials.genres.all-genres')
							</tbody>
						</table>
						<footer>
							<ul class="actions">
								<li><a href="#" class="button alt icon fa-chevron-left"><span class="label">Previous</span></a></li>
								<li><a href="#" class="button alt icon fa-chevron-right"><span class="label">Next</span></a></li>
							</ul>
						</footer>
					</article>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h2>Contact Me</h2>
					<ul class="icons">
						<li><a href="https://www.facebook.com/profile.php?id=100013204865384" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/nabilasarvari01/" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://www.pinterest.com/nabiivanova4/_saved/" class="icon round fa-pinterest"><span class="label">Twitter</span></a></li>
					</ul>

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>