
@extends('layout.main')

@section('head')

	<div class="row">
		<div class="col-10 offset-1">
			<h2 style="border: 3px solid white; background-color: #333; margin-top: 10px; color: white; padding-top:15px; height: 100px; margin:100px 0 50px 0; border-radius: 0 0 10px 10px; text-align: center; ">Registration Page</h2>
		</div>
	</div>

@endsection 

@section('content')

	<div class="row">
		<div class="col-6  offset-3 registry">

			<div class="row">
				<div class="col-12">
					<form action="index.html" method="">
						<div class="row">
							<div class="col-xl-6 register col-lg-12">
								<label class="label" for="regno">Registration number</label>
							</div>

							<div class="col-xl-6 register col-lg-12">
								<input type="text" placeholder="2015-04-02535" class="input" id="regno" name="">
							</div>
						</div>  <!-- Regno row -->

						<div class="row">
							<div class="col-xl-6 register col-lg-12">
								<label class="label" for="email">Email</label>
							</div>

							<div class="col-xl-6 register col-lg-12">
								<input type="email" placeholder="enteremail#gmail.com" class="input" id="email" name="">
							</div>
						</div> <!-- email row -->

						<div class="row">
							<div class="col-xl-6 register col-lg-12">
								<label class="label" for="password1">Password</label>
							</div>

							<div class="col-xl-6 register col-lg-12">
								<input type="password" placeholder="New password" class="input" id="password1" name="">
							</div>
						</div> <!-- password row -->

						<div class="row">
							<div class="col-xl-6 register col-lg-12">
								<label class="label" for="password2">Cormirm Password</label>
							</div>

							<div class="col-xl-6 register col-lg-12">
								<input type="password" placeholder="re-type password" class="input" id="password1" name="">
							</div>
						</div> <!-- re-type Password row -->

						<div class="row">
							<div class="col-xl-6 register col-lg-12 offset-3">
								<input type="submit" class="input batani button-round" value="Register" id="registerbutton" name="">
							</div>
						</div> <!-- register button row -->

						<div class="row">
							<div class="col-6 offset-3">
								<button id="loginbutton" class="batani button-round"><li><a href='index.html'>Login Here</a><li></button>
								<!-- <input type="submit" id="loginbutton" class="batani" value="
								" name=""> -->
							</div>
						</div>  <!-- submit button -->
					</form>
				</div>
			</div>  <!-- first menu -->
		</div>

		<div class="row footer col-10 offset-1">
			<div class="col-10 offset-1">
				<h2>Copyright &copy2019 ODVS</h2>
			</div>
		</div>
	
	</div>  <!-- main row -->
@endsection