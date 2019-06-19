
@extends('layout.main')

@section('head')

	<div class="row">
		<div class="col-10 offset-1" id="logintitle">
			<h3>ONLINE DARUSO VOTING SYSTEM</h3>
		</div>
	</div>

@endsection 

@section('content')

	   <!-- End of the first row element -->



	<!-- <div class="row"> -->
		<!-- <div class="col"> -->
			<!-- <h4>Login Page</h4> -->
			<!-- <p>Here is where the login page will be allocated</p> -->
	<!-- <div class="container">		 -->
	<div class="row" >
		<div class="col-10 offset-1 order-3 col-lg-4 order-lg-2" id="loginpage">
			<form action="home.html" method="">
				<div class="row">
					<div class="col-10 offset-1">
						<h2>Login Form</h2>
					</div>
				</div>  <!-- login form -->

				<div class="row">
					<div class="col-12 col-md-6">
						<label class="label login" for="username">Username</label>
					</div>
					<div class="col-12 col-md-6">
						<input type="text" class="input userpass" placeholder="2015-04-02535" id="username" name="">
					</div>
				</div> <!-- usernsme -->

				<div class="row">
					<div class="col-12 col-md-6">
						<label class="label login" for="password">Password</label>
					</div>
					<div class="col-12 col-md-6">
						<input type="Password" class="input userpass" placeholder="Password" id="password" name="">
					</div>
				</div>  <!-- password -->

				<div class="row">
					<div class="col-6 offset-3">
						<input type="submit" id="loginbutton" class="batani button-round" value="Login" name="">
					</div>
				</div>  <!-- submit button -->

				<div class="row">
					<div class="col-6 offset-3">
						<button id="registerloginbutton" class="batani button-round input"><li style="list-style: none;"><a href='registration.html'>Register Here</a></li></button>
						<!-- <input type="button" id="registerhere" class="batani" value="Register Here" name=""> -->
					</div>
				</div>  <!-- register here -->
			</form>
		</div>

		<div class="col-12 order-2 col-lg-6 order-lg-3 note">
			<h2 style="text-decoration: underline;">Help desk:</h2>
			<p>Just incase of any issue concerning this site and DARUSO in general, please check with the following:</p>
			<h3>+255 769 473 811</h3>
			<h3>+255 739 473 811</h3>
			<h3>+255 783 157 477</h3>
		</div>

		<div class="col-12 order-1 col-lg-6 order-lg-1 note">
			<h2>Welcome ODVS</h2>
			<h3>Site description</h3>
			<h4>Student</4>
			<p>You will have the ability of voting against your favourity leader for the sake of DARUSO.</p>
			<P>Getting results immeadiately after ekection is process is completed.</P>
		</div>
	</div>
	<!-- </div> -->
	<div class="row footer col-10 offset-1">
		<div class="col-10 offset-1">
			<h2>Copyright &copy2019 ODVS</h2>
		</div>
	</div>

@endsection

