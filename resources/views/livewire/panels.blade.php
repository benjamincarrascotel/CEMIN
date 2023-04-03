@extends('layouts.app')

@section('styles')


		<!-- INTERNAL Prism Css -->
		<link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('content')

					<!--Page header-->
					<div class="page-header">
						<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Panels</h4>
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
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Panels</h3>
									</div>
									<div class="card-body">
										<div class="expanel expanel-default m-0">
											<div class="expanel-body">
												Basic panel example
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel with heading</h3>
									</div>
									<div class="card-body">
										<div class="row mt-4">
											<div class="col-lg-6">
												<div class="expanel expanel-default">
													<div class="expanel-heading">Panel heading without title</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="expanel expanel-default">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel with footer</h3>
									</div>
									<div class="card-body">
										<div class="expanel expanel-default m-0">
											<div class="expanel-body">
												Panel content
											</div>
											<div class="expanel-footer">Panel footer</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End  Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel with color header</h3>
									</div>
									<div class="card-body">
										<div class="row mt-4">
											<div class="col-lg-6">
												<div class="expanel expanel-primary">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="expanel expanel-secondary">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6">
												<div class="expanel expanel-success">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="expanel expanel-danger">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

@endsection('content')

@section('scripts')

        <!-- INTERNAL Clipboard js -->
		<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

@endsection
