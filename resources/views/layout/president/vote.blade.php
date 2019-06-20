@extends('layout.main')

@section('head')

@extends('layout.head')

@endsection      <!-- display head content -->

@section('content')
	<div class="row">
		<div class="col-4 col-md-3 col-xl-2 box1">
			<div id="categ" class="row">
				<div class="col-10 category">
					<li><a href="vote">President</a></li>
				</div>
				<div class="col-10 category">
					<li><a href="vote/college">College</a></li>
				</div>
				<div class="col-10 category">
					<li><a href="vote/USSCR">USSCR</a></div></li>
				<div class="col-10 category">
					<li><a href="vote/class">Class</a></li>
				</div>
			</div>
		</div>

		<div class="col-8 col-md-9 col-xl-10 box1">
			<form>
				<div class="row">
					<div class="col-md-2 col-5 candTitle">Picture</div>
					<div class="col-md-8 col-4 candTitle">Names</div>
					<div class="col-md-2 col-3 candTitle">Vote box</div>
				</div>  <!-- row -->

				<div class="row">
					<div class="col-12 name">President Category</div>
				</div>
				<div class="row cut-line">
					<div class="col-xl-2 col-sm-4 col-md-3 col-6 candidate">Picture</div>
					<div class="col-xl-8 col-sm-5 col-md-7 col-6 candidate">Yusuph, Kaysoni C.</div>
					<div class="col-xl-2 col-sm-3 col-md-2 col-12 candidate">
						<input type="checkbox" name="president" class="checkbox">
					</div>
				</div>  <!-- row -->
				<div class="row cut-line">
					<div class="col-xl-2 col-sm-4 col-md-3 col-6 candidate">Picture</div>
					<div class="col-xl-8 col-sm-5 col-md-7 col-6 candidate">Kafwenji, Venance V.</div>
					<div class="col-xl-2 col-sm-3 col-md-2 col-12 candidate">
						<input type="checkbox" name="president" class="checkbox">
					</div>
				</div>  <!-- row -->
				<div class="row cut-line">
					<div class="col-xl-2 col-sm-4 col-md-3 col-6 candidate">Picture</div>
					<div class="col-xl-8 col-sm-5 col-md-7 col-6 candidate">Japhes, joas</div>
					<div class="col-xl-2 col-sm-3 col-md-2 col-12 candidate">
						<input type="checkbox" name="president" class="checkbox">
					</div>
				</div>  <!-- row -->

				<div class="row">
					<div class="col-12 name">Vice President Category</div>
				</div>
				<div class="row cut-line">
					<div class="col-xl-2 col-sm-4 col-md-3 col-6 candidate">Vice Picture</div>
					<div class="col-xl-8 col-sm-5 col-md-7 col-6 candidate">Mlay, Siah S.</div>
					<div class="col-xl-2 col-sm-3 col-md-2 col-12 candidate">
						<input type="checkbox" name="vicePresident" class="checkbox">
					</div>
				</div>  <!-- row -->
				<div class="row cut-line">

					<div class="col-xl-2 col-sm-4 col-md-3 col-6 candidate">
						Vice Picture
					</div>
					<div class="col-xl-8 col-sm-5 col-md-7 col-6 candidate">
						Mika, Ester W.
					</div>
					<div class="col-xl-2 col-sm-3 col-md-2 col-12 candidate">
						<input type="checkbox" name="vicePresident" class="checkbox">
					</div>
				</div>  <!-- row -->

				<div class="row">
					<div class="col vote">
						<input type="Submit" id="vote" name="" value="Vote Now">
					</div>
				<!-- </div>  roe -->


			</form>
		</div>
	</div>
@endsection       <!-- display main content -->

@section('footer')

	<div class="row footer col-10 offset-1">
			<div class="col-10 offset-1">
				<h2>Copyright &copy2019 ODVS</h2>
			</div>
	</div>

@endsection       <!-- display footer content -->


