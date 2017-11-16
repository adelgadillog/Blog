<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title','Default') | Admin</title>
	<link href="{{ asset('plugins/lumino/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/lumino/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/lumino/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/lumino/css/styles.css') }}" rel="stylesheet">
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/Trumbowyg/ui/trumbowyg.css') }}">
	bootstrap-fileinput-master\css
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap-fileinput-master/css/fileinput.css') }}">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>FirsTime &nbsp;</span>{{ Auth::user()->type }}</a>

				<div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="user-log">{{ Auth::user()->name }}</li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                     <span class="glyphicon glyphicon-off"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<!--<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>-->
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>{{ Auth::user()->type }}</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li @yield('active-home')><a href="{{url('admin')}}"><em class="glyphicon glyphicon-home">&nbsp;</em>Inicio</a></li>
			<li @yield('active-user')><a data-toggle="collapse" href="#sub-item-1">
				<em class="glyphicon glyphicon-user">&nbsp;</em> Usuarios<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="{{url('admin/users')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Ver Usuarios
					</a></li>
					<li><a class="" href="{{url('admin/users/create')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Crear Usuario
					</a></li>
				</ul>
					
			</li>
			<li @yield('active-categories')><a data-toggle="collapse" href="#sub-item-2">
				<em class="glyphicon glyphicon-th-large">&nbsp;</em> Categorias<span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="{{url('admin/categories')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Ver Categorias
					</a></li>
					<li><a class="" href="{{url('admin/categories/create')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Crear Categorias
					</a></li>
				</ul>
					
			</li>
			<li @yield('active-tags')><a data-toggle="collapse" href="#sub-item-3">
				<em class="glyphicon glyphicon-tag">&nbsp;</em> Etiquetas<span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li><a class="" href="{{url('admin/tags')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Ver Etiquetas
					</a></li>
					<li><a class="" href="{{url('admin/tags/create')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Crear Etiquetas
					</a></li>
				</ul>
					
			</li>
			<li @yield('active-articles')><a data-toggle="collapse" href="#sub-item-4">
				<em class="glyphicon glyphicon-folder-open">&nbsp;</em> Articulos<span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li><a class="" href="{{url('admin/articles')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Ver Articulos
					</a></li>
					<li><a class="" href="{{url('admin/articles/create')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Crear Articulos
					</a></li>
				</ul>
					
			</li>


			
			
			
			<li @yield('active-images')><a href="{{url('admin/images')}}"><em class="fa fa-clone">&nbsp;</em> Imagenes</a></li>
			
			<li><a href="{{ route('logout') }}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{url('admin')}}">
					<em class="fa fa-home"></em>
				</a></li>
				@yield('menu-lista')
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">@yield('dash-users')</h1>
			</div>
		</div><!--/.row-->
		<section>
			@include('flash::message')
			@include('admin.template.partials.errors')
			
			<div class="panel panel-container">
			@yield('content')
				
			</div>
		</section>


		
		
		
			
		</div><!--/.row-->
		
	</div>	<!--/.main-->
	<br><br><hr>
	<br><br>
	<div class="col-sm-12">
				<p class="back-link">Alejandro <a href="#">Delgadillo Garcia</a></p>
	</div>
	<script src="{{ asset('plugins/lumino/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{ asset('plugins/lumino/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('plugins/lumino/js/chart.min.js')}}"></script>
	<script src="{{ asset('plugins/chosen/chosen.jquery.js')}}"></script>
	<script src="{{ asset('plugins/lumino/js/chart-data.js')}}"></script>
	<script src="{{ asset('plugins/lumino/js/easypiechart.js')}}"></script>
	<script src="{{ asset('plugins/lumino/js/easypiechart-data.js')}}"></script>
	<script src="{{ asset('plugins/lumino/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{ asset('plugins/lumino/js/custom.js')}}"></script>
	<script src="{{ asset('plugins/Trumbowyg/trumbowyg.js')}}"></script>
	<script src="{{ asset('plugins/bootstrap-fileinput-master/js/fileinput.js')}}"></script>

	<!--<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>-->
	@yield('js');	
</body>

</html>
