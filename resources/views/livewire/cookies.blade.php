@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Cookies css -->
		<link href="{{asset('assets/plugins/cookies/accept-cookies.css')}}" rel="stylesheet" />
		<link href="{{asset('assets/plugins/cookies/cookies.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Cookies</h4>
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
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Cookies Position
										</div>
									</div>
									<div class="card-body">
										<div class="btn-list  position-buttons">
											<a href="javascript:void(0);" class="btn btn-primary position-button mg-t-5" data-position="topleft">Top Left Cookie</a>
											<a href="javascript:void(0);" class="btn btn-secondary position-button mg-t-5" data-position="top">Top Cookie</a>
											<a href="javascript:void(0);" class="btn btn-success position-button mg-t-5" data-position="topright">Top Right Cookie</a>
											<a href="javascript:void(0);" class="btn btn-warning position-button mg-t-5" data-position="bottomleft">Bottom Left Cookie</a>
											<a href="javascript:void(0);" class="btn btn-info position-button mg-t-5" data-position="bottom">Bottom Cookie</a>
											<a href="javascript:void(0);" class="btn btn-danger position-button mg-t-5" data-position="bottomright">Bottom Right Cookie</a>
											<a href="javascript:void(0);" class="btn btn-teal option-button mg-t-5" data-option="default">Default Cookie</a>
										</div>
									</div>
								</div>
								<!-- /div -->
								<!-- div -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Cookies Background
										</div>
									</div>
									<div class="card-body">
										<div id="theme-buttons" class="btn-list theme-buttons">
											<a href="javascript:void(0);" class="btn btn-light theme-button mg-t-5" data-theme1="theme-light">Light</a>
											<a href="javascript:void(0);" class="btn btn-dark theme-button mg-t-5" data-theme1="theme-dark">Dark</a>
											<a href="javascript:void(0);" class="btn btn-primary theme-button mg-t-5" data-theme1="theme-primary">primary</a>
											<a href="javascript:void(0);" class="btn btn-info theme-button mg-t-5" data-theme1="theme-info">Info</a>
											<a href="javascript:void(0);" class="btn btn-danger theme-button mg-t-5" data-theme1="theme-danger">Danger</a>
											<a href="javascript:void(0);" class="btn btn-success theme-button mg-t-5" data-theme1="theme-success">Success</a>
											<a href="javascript:void(0);" class="btn btn-warning theme-button mg-t-5" data-theme1="theme-warning">Warning</a>
										</div>
									</div>
								</div>
								<!-- /div -->
								<!-- div -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Customize Cookie Text
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="customHeader" id="customHeader" value="" placeholder="Popup Header Text...">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="customSubHeader" id="customSubHeader" value="" placeholder="Popup Sub Header Text...">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="customAccept" id="customAccept" value="" placeholder="Accept Button Text...">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="customLearnMore" id="customLearnMore" value="" placeholder="Learn More Button Text...">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="customLearnMoreInfo" id="customLearnMoreInfo" value="" placeholder="Learn More Info Text...">
												</div>
												<div class="">
													<a href="javascript:void(0);" class="btn btn-primary px-6 option-button" data-option="customtext">Apply</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- div -->
							</div>
						</div>

@endsection('content')

@section('scripts')

		<!-- INTERNAL Cookies js-->
		<script src="{{asset('assets/plugins/cookies/cookiepopup.js')}}"></script>
		<script src="{{asset('assets/js/cookie.js')}}"></script>

@endsection