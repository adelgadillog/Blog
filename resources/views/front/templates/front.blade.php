<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>FirsTime Blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link href="{{ asset('plugins/lumino/css/bootstrap.min.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('plugins/phantom-front/assets/css/main.css') }}" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<!-- Wrapper -->
		
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="{{ route('front.index') }}" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">FirsTime</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="{{ route('login') }}">Login</a></li>
							<li><a href="generic.html">Tempus etiam</a></li>
							<li><a href="generic.html">Consequat dolor</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
					</nav>

				<!-- Main -->
				@yield('main')
					
				<!-- Footer -->
					<footer id="footer">
						<div class="inner ">
							<section>
								<h2>Categorias</h2>
								@foreach($categories as $category)
										<li><a href="{{ route('front.search.category',$category->name) }}" class="icon style2 fa-cubes"><span class="label"></span></a><b>&nbsp;<a href="{{ route('front.search.category',$category->name) }}" >{{ $category->name }}</b></a><span class="badge">{{ $category->articles->count() }}</span></li>
									@endforeach
							</section>
							<section>
								<h2>Etiquetas</h2>
								<ul class="icons">
									@foreach($tags as $tag)
										<li><a href="{{ route('front.search.tag',$tag->name) }}" class="icon style2 fa-cubes"><span class="label"></span></a><b>&nbsp;<a href="{{ route('front.search.tag',$tag->name) }}">{{ $tag->name }}</a></b><span class="badge">{{ $tag->articles->count() }}</span></li>
									@endforeach
									
									<!--<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>-->
								</ul>
							</section>
							<ul class="copyright">
								
							</ul>
						</div>

					</footer>

			</div>

		<!-- Scripts -->

			<script src="{{ asset('plugins/phantom-front/assets/js/jquery.min.js')}}"></script>
			<script src="{{ asset('plugins/phantom-front/assets/js/skel.min.js')}}"></script>
			<script src="{{ asset('plugins/phantom-front/assets/js/util.js') }}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="{{ asset('plugins/phantom-front/assets/js/main.js')}}"></script>

	</body>
</html>