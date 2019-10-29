<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>UIT Applicant Registeration</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/datatables.css')}}"/>
	<script type="text/javascript" src="{{asset('js/translate.js')}}"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<style type="text/css">




    	html{
    		scroll-behavior: smooth;
    	}

	</style>
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">


		<div class="main_menu">

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/uit.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php" name="translate" caption="h1">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login&nbsp;&nbsp;<i class="fa fa-sign-in"></i></a></li>
							<li class="nav-item"><a class="nav-link" href="add_student.php">Register&nbsp;&nbsp;<i class="fa fa-file-text"></i></a></li>

 							<!-- <li class="nav-item lang"><a class="nav-link lang_click">Language</a></li>
							<a id="tr_button" class="lang1">Myanmar</a> -->
							<!-- <a id="eng_button" class="lang2">English</a> -->

						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

@yield('content')




	<div class="registernow">

		<h1 class="register-title">Register Now</h1>
		<p class="qu-title">Registration is available until August 27</p>

		<a href="add_student.php" class="regi-but" style="text-decoration: none;">Register now</a>

		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="row clock_sec clockdiv" id="clockdiv">

						<div class="col clockinner1 clockinner">
							<h1 class="days">150</h1>
							<span class="smalltext">Days</span>
						</div>
						<div class="col clockinner clockinner1">
							<h1 class="hours">23</h1>
							<span class="smalltext">Hours</span>
						</div>
						<div class="col clockinner clockinner1">
							<h1 class="minutes">47</h1>
							<span class="smalltext">Mins</span>
						</div>
						<div class="col clockinner clockinner1">
							<h1 class="seconds">5</h1>
							<span class="smalltext">Secs</span>
						</div>
					</div>
				</div>

			</div>
		</div>


	</div>

	<footer class="footer-area section_gap">
		<div class="container">

			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright © 2012-2019 University of Information Technology All rights reserved </p>
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="https://www.facebook.com/UITMyanmar" target="_blank"><i class="fa fa-facebook"></i></a>

				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- <script src="translate.js"></script> -->
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/datatables.min.js"></script>
	<!-- <script src="js/countdown.js"></script> -->
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/theme.js"></script>


	<script type="text/javascript">
		$(document).ready( function () {
		    $('#table_id').DataTable();
		});


		$('.getnext').click(function(){

		});


		$('.getnext1').click(function(){

		});
	</script>

	<script type="text/javascript">

	  function getTimeRemaining(endtime) {

	  var t = Date.parse(endtime) - Date.parse(new Date());
	  var seconds = Math.floor((t / 1000) % 60);
	  var minutes = Math.floor((t / 1000 / 60) % 60);
	  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
	  var days = Math.floor(t / (1000 * 60 * 60 * 24));
	  return {
	    'total': t,
	    'days': days,
	    'hours': hours,
	    'minutes': minutes,
	    'seconds': seconds
	  };
	  }

	  function initializeClock(id, endtime) {
	  var clock = document.getElementById(id);
	  var daysSpan = clock.querySelector('.days');
	  var hoursSpan = clock.querySelector('.hours');
	  var minutesSpan = clock.querySelector('.minutes');
	  var secondsSpan = clock.querySelector('.seconds');

	  function updateClock() {
	  var t = getTimeRemaining(endtime);

	  daysSpan.innerHTML = t.days;
	  hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
	  minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
	  secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

	  if (t.total <= 0) {
	      clearInterval(timeinterval);
	  }
	  }

	  updateClock();
	  var timeinterval = setInterval(updateClock, 1000);
	  }
	  var aa=20;

	  var deadline = new Date(Date.parse(new Date()) + aa * 24 * 60 * 60 * 1000);
	  initializeClock('clockdiv', deadline);

	$('.guide').click(function(){
		$('.regguide').show();
		$('.reg-detail').show();

	});

	$('.span').click(function(){
		$('.regguide').hide();
		$('.reg-detail').hide();
	});

	</script>


</body>

</html>
