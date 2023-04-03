@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Rating css -->
		<link rel="stylesheet" href="{{asset('assets/plugins/rating/css/examples.css')}}">

		<!-- INTERNAl Themes  css-->
		<link rel="stylesheet" href="{{asset('assets/plugins/rating/dist/themes/bars-1to10.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/rating/dist/themes/bars-movie.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/rating/dist/themes/bars-square.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/rating/dist/themes/bars-pill.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/rating/dist/themes/bars-reversed.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/rating/dist/themes/bars-horizontal.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/rating/dist/themes/fontawesome-stars.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/rating/dist/themes/css-stars.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/rating/dist/themes/bootstrap-stars.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/rating/dist/themes/fontawesome-stars-o.css')}}">

@endsection

@section('content')

					<!--Page header-->
					<div class="page-header">
						<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Ratings</h4>
						</div>
						<div class="page-rightheader">
							<div class="btn-list">
								<button class="btn btn-outline-primary"><i class="fe fe-download"></i>
									Import</button>
								<a href="javascript:void(0);"  class="btn btn-primary btn-pill" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-calendar me-2 fs-14"></i> Search By Date</a>
								<div class="dropdown-menu border-0">
										<a class="dropdown-item" href="javascript:void(0);">Today</a>
										<a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
										<a class="dropdown-item active bg-primary text-white" href="javascript:void(0);">Last 7 days</a>
										<a class="dropdown-item" href="javascript:void(0);">Last 30 days</a>
										<a class="dropdown-item" href="javascript:void(0);">Last Month</a>
										<a class="dropdown-item" href="javascript:void(0);">Last 6 months</a>
										<a class="dropdown-item" href="javascript:void(0);">Last year</a>
								</div>
							</div>
						</div>
					</div>
					<!--End Page header-->

						<!-- Row -->
						<div class="row row-deck">
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Fractional Star rating</h3>
									</div>
									<div class="card-body">
										<div class="star-ratings mt-5 mb-5">
											<div class="stars stars-example-fontawesome-o">
												<select id="example-fontawesome-o" name="rating" data-current-rating="3.6" autocomplete="off">
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Font Awesome Star Rating</h3>
									</div>
									<div class="card-body text-center">
										<div class="star-ratings left-ratings-main clearfix  mt-5 mb-5">
											<div class="stars stars-example-fontawesome">
												<select id="example-fontawesome" name="rating" autocomplete="off">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bar 1/10 Rating</h3>
									</div>
									<div class="card-body">
										<div class="box1  box-example-1to10">
											<div class="box-body">
												<select id="example-1to10" name="rating" autocomplete="off">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7" selected="selected">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Opinion rating</h3>
									</div>
									<div class="card-body">
										<div class="box1 box-example-movie">
											<div class="box-body">
												<select id="example-movie" name="rating" autocomplete="off">
													<option value="Bad">Bad</option>
													<option value="Mediocre">Mediocre</option>
													<option value="Good" selected="selected">Good</option>
													<option value="Awesome">Awesome</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Square Rating</h3>
									</div>
									<div class="card-body">
										<div class="box1 box-example-square">
											<div class="box-body">
												<select id="example-square" name="rating" autocomplete="off">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Grade Rating</h3>
									</div>
									<div class="card-body">
										<div class="box1  box-example-pill">
											<div class="box-body">
												<select id="example-pill" name="rating" autocomplete="off">
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="C">C</option>
													<option value="D">D</option>
													<option value="E">E</option>
													<option value="F">F</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Horizontal Bar Rating</h3>
									</div>
									<div class="card-body">
										<div class="box1 box-large box-example-horizontal">
											<div class="box-body">
												<select id="example-horizontal" name="rating" autocomplete="off">
													<option value="10">10</option>
													<option value="9">9</option>
													<option value="8">8</option>
													<option value="7">7</option>
													<option value="6">6</option>
													<option value="5">5</option>
													<option value="4">4</option>
													<option value="3">3</option>
													<option value="2">2</option>
													<option value="1" selected="selected">1</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection('content')

@section('scripts')

		<!-- INTERNAL Rating js-->
		<script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
		<script src="{{asset('assets/plugins/rating/jquery.barrating.js')}}"></script>
		<script src="{{asset('assets/plugins/rating/js/examples.js')}}"></script>

@endsection
