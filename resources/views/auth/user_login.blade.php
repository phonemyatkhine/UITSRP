@extends('layouts.register_app')
@section('content')

<link rel="icon" href="img/favicon.png" type="image/png">
<title>UIT Applicant Registeration</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<style type="text/css">
  body{
    background: #fff;
    /*background:   rgba(0, 230, 238, 0.7);*/
  }
</style>
<div class="container">


	<div class="row">


		<div class="col-lg-12 col-md-12 col-sm-12">
			<!-- <h1 class="login-title">Log In</h1>
			<p class="Welcome-title">To handle your information more securely...</p> -->

			<div class="mstbox">University of Information Technology</div>
			<div class="loginform">

			<form>

				<input type="text" name="username" class="name" placeholder="Username">
				<input type="password" name="password" class="password" placeholder="Password">
				<input type="submit" name="submit" value="Submit" class="submit">
				<a href="index.php" class="backtohome" style="text-decoration: none;">Back To Home</a>
			</form>

			</div>


		</div>


	</div>


</div>


@endsection
