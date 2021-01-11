<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Movies- For all choices</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href=" {{ asset('assets/css/main.css') }}" />

	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="{{ url('/')}}">Movies</a></div>
			</header>
			
		<!-- Content -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="post" class="wrapper bg-img" data-bg="banner2.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>One of the best movies!</h2>
						</header>
						<div class="w-50 pt-3">
							<table class="table  table-striped table-primary align-middle">
								<thead>
								<tr>
									<th scope="col">Id</th>
									<th scope="col">Name</th>
									<th scope="col">Release Year</th>
									<th scope="col">Language</th>
									{{-- @if(!empty($producers)) --}}
										<th scope="col">Producer</th>
									{{-- @endif
									@if(!empty($genres)) --}}
									<th scope="col">Genre</th>
								{{-- @endif --}}
								</tr>
								</thead>
								<tbody>
									<td>{{$movie->id}}</td>
									<td>{{$movie->name}}</td>
									<td>{{$movie->releaseYear}}</td>
									<td>{{$movie->language}}</td>
									{{-- @if(!empty($producers)) --}}
									<td>
										@foreach($producers as $producer)
												@foreach($producer as $currentProducer)
													{{$currentProducer['firstName']}} {{$currentProducer['lastName']}}
													<br>
												@endforeach
										@endforeach
									</td>
									{{-- @endif --}}
									
									@if(!empty($genres))
									<td>
										@foreach($genres as $genre)
												@foreach($genre as $currentGenre)
													Type: {{$currentGenre['type']}} | Note: {{$currentGenre['note']}}
													<br>
												@endforeach
										@endforeach
									</td>
									@endif
								</tbody>
							</table>
							<a class="btn btn-secondary" href="{{ url('movies') }}" > Back to movies' list</a>
						</div>
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