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

	<!--================ Start onlinereg =================-->

	<div class="onlinereg">
		<h1 class="online-title">Online Enrollment System</h1>
		<p class="online-content" id="dld">University of Information Technology will start the online registration system from Academic Year (2019-2020).
		If you are willing to join University of Information Technology , you need to read the instruction guide before you make registration.This will help you a lot.
		</p>

		<a href="#dld"><button class="guide">Read Registration Guide</button></a>


		<div class="reg-detail">

			<div class="container-fluid">
				<span class="span">&times;</span>
					<div class="row">

						<div class="col-lg-6">

							<div class="first-year">

								<p class="regstep" style="text-align: left;padding-left: 5px;font-weight: bolder;font-size: 22px;">For the First year students who are new to UIT , there is three step to follow : </p>

								<p class="regstep" style="text-align: left;padding-left: 5px;font-weight: bolder;">- To make registration , click "Register" from page Navigaion . You will get a registration form .</p>

								<p class="regstep" style="text-align: left;padding-left: 5px;font-weight: bolder;">- Fill the form with correct datas . (All data must be correct so that you have no trouble to refill your data and you won't miss your oppotunities in case we need to contact you for some reasons. )</p>

								<p class="regstep" style="text-align: left;padding-left: 5px;font-weight: bolder;">- After filling all the fields , click the "Submit" button to send all your data to Department.</p>

								<p class="regstep" style="text-align: left;padding-left: 5px;font-weight: bolder;">- Then your task is accomplished and wait for the confirmation letter . You can also check accepted list in this page in case your region has a problem with receiving letters from Post Office.</p>



							</div>
							<div style="border-bottom:1px solid #222;width: 80%;margin: 0px auto;margin-top: -30px;margin-bottom: 30px;">.</div>

						</div>

						<div class="col-lg-6">

							<div class="first-year-up">

								 <p class="regstep" style="text-align: left;padding-left: 5px;font-weight: bolder;font-size: 22px;">If you are not First year student , there is four step you have to follow : </p>

								<p class="regstep" style="text-align: left;padding-left: 5px;font-weight: bolder;">- Click "LOGIN" from navigation and Log in to UIT with your username and password(same with your moodle account) . You can look up or change your  password at link <a href="https://www.uit.edu.mm/moodle/" target="_blank">https://www.uit.edu.mm/moodle/</a></p>

								<p class="regstep" style="text-align: left;padding-left: 5px;font-weight: bolder;">- You will get a search box . Fill your "SID" , "Name" , "Academic year(to which you want to enroll)" . Click "Search" button to check whether you've been registered or not.</p>

								<p class="regstep" style="text-align: left;padding-left: 5px;font-weight: bolder;">- If not , you will get a empty form to refill all your data (We ,UIT, start online registration from this year and sorry for your inconvenience to refill all data) .</p>

								<p class="regstep" style="text-align: left;padding-left: 5px;font-weight: bolder;">- If you are a registered student , you will get a new registration form for this Academic year in which a lot of fields filled with your last year data .</p>

								<p class="regstep" style="text-align: left;padding-left: 5px;font-weight: bolder;">- Modify this form with your new data and click "Submit".</p>

								<p class="regstep" style="text-align: left;padding-left: 5px;font-weight: bolder;">- Your Enrollment is complete . Review your status to make sure the course is registered correctly . </p>

							</div>
							<div style="border-bottom:1px solid #222;width: 80%;margin: 0px auto;">.</div>
						</div>

					</div>

			</div>

		</div>


		<div class="regguide" >
			<p class="regguide-content">For more details , you can download the registration guide PDF here. <i class="fa fa-hand-o-down"> </i></p>
			<a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fcdn.fbsbx.com%2Fv%2Ft59.2708-21%2F68453328_2382533048666359_8488011599271952384_n.txt%2F03.txt%3F_nc_cat%3D109%26_nc_oc%3DAQlAfsHDIR8EMeFhY7fV87LQiWuIE80cyKb19w5pRyrXNxsaZhkEpAk-XuweEg4v3KQ%26_nc_ht%3Dcdn.fbsbx.com%26oh%3D05ffa14e2ae7f535aaf16bce7e9ddc85%26oe%3D5D995409%26dl%3D1%26fbclid%3DIwAR3CLSS4PqQ2n53Sn3TWKTRb_BPmA9bkeVid91mpWSQDxTvawC7rINkBBEE&h=AT1EerJVENUDLhoJmYmHGkBjpVsJzwXVECS5GbHMD_ouifjdP_GyRxLq9sALKCzBr1SOS1D1ZyK7q5EoBYeRzYU-hk0KTby7BGcd67enU68c_WWehrLIQWr1a_RJEw5fTvZdOntLgDtE75q1"  class="dllink" target="_blank">Download Registration PDF &nbsp;&nbsp;&nbsp;<i class="fa fa-download"></i></a>


		</div>
	</div>

	<!--================ End onlinereg =================-->

	<!--================ Start Home Banner Area =================-->
	<div class="stu_list">
			<h1 class="list-title">Accepted Student List</h1>
			<h1 class="aca-title">Academic Year (2018-2019)</h1>
			<p class="list-content">Here is the list of accepted students for Academic Year(2019-20) . We choose them according to our terms , conditions and  requirements . Check you are in the list or not . You can enter your name in the search box to search easily .</p>
			<table id="table_id" class="cell-border  hover" style="width: 40%;">
			    <thead>
			        <tr>
			            <th>Student Name</th>
			            <th>Parent Name</th>
			            <th>Student Id</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>Mg Mg</td>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			        <tr>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			        </tr>
			        <tr>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			        <tr>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>

			        </tr>
			        <tr>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			        <tr>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>

			        </tr>

			         <tr>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			        <tr>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			        </tr>
			        <tr>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			        <tr>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			        </tr>
			        <tr>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			        <tr>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			            <td>Kyaw Kyaw</td>
			        </tr>
			    </tbody>
			</table>


	</div>
	<!--================ End Home Banner Area =================-->


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
