<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contacts</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('css/reset.css')}}" type="text/css" media="screen">
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="screen">
	<link rel="stylesheet" href="{{asset('css/grid.css')}}" type="text/css" media="screen">
	<link rel="stylesheet" href="{{asset('izitoast/css/iziToast.min.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
			<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
		</a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
 		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>

<body id="page5">
	<!--==============================header=================================-->
	<header>
		<div class="border-bot">
			<div class="main">
				<h1><a href="{{route('user.home')}}">InternetCafe</a></h1>
				<nav>
					<ul class="menu">
						<li><a href="{{route('user.home')}}">Home</a></li>
						<li><a href="{{route('user.event')}}">Events</a></li>
						<li><a href="{{route('user.service')}}">Services</a></li>
						<li><a href="{{route('user.job')}}">Jobs</a></li>
						<li><a class="active" href="{{route('user.contact')}}">Contacts</a></li>
					</ul>
				</nav>
				<div class="clear"></div>
			</div>
		</div>
	</header>
	@yield('content')
   <!--==============================footer=================================-->
	<footer>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<div class="grid_3">
						<div class="spacer-1">
							<a href="index.html"><img src="images/footer-logo.png" alt=""></a>
						</div>
					</div>
					<div class="grid_5">
						<div class="indent-top2">
							<p class="prev-indent-bot">&copy; 2012 Interior <a rel="nofollow"
									href="http://www.templatemonster.com/" target="_blank">TemplateMonster.com</a> | <a
									rel="nofollow" href="http://www.html5xcss3.com">html5xcss3.com</a></p>
							Phone: +1 800 559 6580 Email: <a href="#">info@internetcafe.com</a>
						</div>
					</div>
					<div class="grid_4">
						<ul class="list-services">
							<li><a class="item-1" href="#"></a></li>
							<li><a class="item-2" href="#"></a></li>
							<li><a class="item-3" href="#"></a></li>
							<li><a class="item-4" href="#"></a></li>
						</ul>
						<span class="footer-text">&copy; 2012 <a class="link color-2" href="#">Privacy Policy</a></span>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script src="{{asset('js/jquery-1.7.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/cufon-yui.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/cufon-replace.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/Vegur_500.font.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/Ropa_Sans_400.font.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/FF-cash.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/script.js')}}" type="text/javascript"></script>
	<script src="{{asset('izitoast/js/iziToast.min.js')}}"></script>