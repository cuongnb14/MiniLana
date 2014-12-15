<!DOCTYPE html>
<html>
<head>
<title>Trang chu</title>
<meta charset="utf-8" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{Asset('public/assets/css/bootstrap.min.css')}}">
<!-- Optional theme -->
<link rel="stylesheet" href="{{Asset('public/assets/css/comos-theme.css')}}">
<!-- Animation CSS 3 -->
<link rel="stylesheet" href="{{Asset('public/assets/css/animate.css')}}">
<!-- font-awesome -->
<link rel="stylesheet" href="{{Asset('public/assets/css/font-awesome.css')}}">
<!-- hover animation -->
<link rel="stylesheet" href="{{Asset('public/assets/css/hover.css')}}">
<!-- Custom -->
<link rel="stylesheet" href="{{Asset('public/assets/css/icss.css')}}">
</head>
<body>
	<div id="wapper" class="container-fluid">
		<div id="header">
			<div class="navbar navbar-inverse">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-inverse-collapse">
						<span class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{URL::route('home')}}">IMENU</a>
				</div>
				<div class="navbar-collapse collapse navbar-inverse-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Active</a></li>
						<li><a href="#">Link</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li class="dropdown-header">Dropdown header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul></li>
					</ul>
					<form class="navbar-form navbar-left">
						<input type="text" class="form-control col-lg-8"
							placeholder="Search">
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul></li>
					</ul>
				</div>
			</div>
		<!-- Start #content -->
			 @yield('content')
		<!-- End #content -->

		<div id="footer" class="container-fluid">
			<div class="col-md-4 foo-box">
				<span>Design by BaCuong</span>
			</div>
			<div class="col-md-4 foo-box"></div>
			<div class="col-md-4 foo-box"></div>
		</div>
		<!-- End #footer -->
	</div>
	<!-- End #wapper -->
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{Asset('public/assets/js/jquery.js')}}"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="{{Asset('public/assets/js/bootstrap.min.js')}}"></script>
<!-- Custom -->
<script src="{{Asset('public/assets/js/iscript.js')}}"></script>
</html>