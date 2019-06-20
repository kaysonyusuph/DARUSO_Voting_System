@extends('layout.main')

@section('head')

@extends('layout.head')

@endsection      <!-- display head content -->

@section('content')
	<div class="row">
		<div class="col-12">
			<div class="row">
				<div class="col-12 result"> @yield('result')</div>
			</div>

			<div class="row">
				<div class="col-4 col-md-3 col-xl-2 box1">
					<div id="categ" class="row">
						<div class="col-12 category">
							<li><a href="result">President</a></li>
						</div>
						<div class="col-12 category">
							<li><a href="resultcollege">College</a></li>
						</div>
						<div class="col-12 category">
							<li><a href="resultUSSCR">USSCR</a></div></li>
						<div class="col-12 category">
							<li><a href="resultclass">Class</a></li>
						</div>
					</div>
				</div>

				<div class="col-8 col-md-9 col-xl-10 box1">
					<div class="row cut-line">
						<div class="col-2 candTitle">Picture</div>
						<div class="col-6 candTitle">Names</div>
						<div class="col-2 candTitle">Total Votes</div>
						<div class="col-2 candTitle">Votes percent</div>
					</div>  <!-- row -->

					<div class="row">
						<div class="col-12 name">Male CRs Category</div>
					</div>
					<div class="row cut-line">
						<div class="col-lg-2 col-sm-4 col-6 candidate">Picture</div>
						<div class="col-lg-6 col-sm-4 col-6 candidate">Sanzu, Machiya N.</div>
						<div class="col-lg-2 col-sm-4 col-6 candidate">
							<div class="row" style="margin-left: 10px;">
								Votes
							</div>
							<div class="row" style="margin-top: 20px; margin-left: 20px;">
								258
							</div>
						</div>
						<div class="col-lg-2 col-sm-4 col-6 candidate">
							<div class="row" style="margin-left: 10px;">
								Percent
							</div>
							<div class="row" style="margin-top: 20px; margin-left: 20px;">
								35%
							</div>
						</div>
					</div>  <!-- row -->
					<div class="row cut-line">
						<div class="col-lg-2 col-sm-4 col-6 candidate">Picture</div>
						<div class="col-lg-6 col-sm-4 col-6 candidate">Rutayuga, Devis R.</div>
						<div class="col-lg-2 col-sm-4 col-6 candidate">
							<div class="row" style="margin-left: 10px;">
								Votes
							</div>
							<div class="row" style="margin-top: 20px; margin-left: 20px;">
								258
							</div>
						</div>
						<div class="col-lg-2 col-sm-4 col-6 candidate">
							<div class="row" style="margin-left: 10px;">
								Percent
							</div>
							<div class="row" style="margin-top: 20px; margin-left: 20px;">
								35%
							</div>
						</div>
					</div>  <!-- row -->
					<!-- <div class="row">
						<div class="col-2 candidate">Picture</div>
						<div class="col-6 candidate">Names</div>
						<div class="col-2 candidate">Votes</div>
						<div class="col-2 candidate">Percent</div>
					</div> -->

					<div class="row">
						<div class="col-12 name">Female CRs Category</div>
					</div>
					<div class="row cut-line">
						<div class="col-lg-2 col-sm-4 col-6 candidate">Picture</div>
						<div class="col-lg-6 col-sm-4 col-6 candidate">Nyaindi, Grace</div>
						<div class="col-lg-2 col-sm-4 col-6 candidate">
							<div class="row" style="margin-left: 10px;">
								Votes
							</div>
							<div class="row" style="margin-top: 20px; margin-left: 20px;">
								258
							</div>
						</div>
						<div class="col-lg-2 col-sm-4 col-6 candidate">
							<div class="row" style="margin-left: 10px;">
								Percent
							</div>
							<div class="row" style="margin-top: 20px; margin-left: 20px;">
								35%
							</div>
						</div>
					</div>  <!-- row -->
					<div class="row cut-line">
						<div class="col-lg-2 col-sm-4 col-6 candidate">Picture</div>
						<div class="col-lg-6 col-sm-4 col-6 candidate">Bori, Asha O.</div>
						<div class="col-lg-2 col-sm-4 col-6 candidate">
							<div class="row" style="margin-left: 10px;">
								Votes
							</div>
							<div class="row" style="margin-top: 20px; margin-left: 20px;">
								258
							</div>
						</div>
						<div class="col-lg-2 col-sm-4 col-6 candidate">
							<div class="row" style="margin-left: 10px;">
								Percent
							</div>
							<div class="row" style="margin-top: 20px; margin-left: 20px;">
								35%
							</div>
						</div>
					</div>  <!-- row -->


				</div>

			</div>
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


