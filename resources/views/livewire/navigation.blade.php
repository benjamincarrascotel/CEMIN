@extends('layouts.app')

@section('styles')

	    <!-- INTERNAL Prism Css -->
		<link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Navigation</h4>
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
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Nav Vertical</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 flex-column br-7">
											<li class="nav-item1">
												<a class="nav-link text-primary active" href="javascript:void(0);">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-primary" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-primary" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-primary disabled" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Nav Vertical With Border</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 flex-column br-7 border">
											<li class="nav-item1">
												<a class="nav-link text-primary active" href="javascript:void(0);">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-primary" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-primary" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-primary disabled" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Nav</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 br-7">
											<li class="nav-item1">
												<a class="nav-link text-primary active" href="javascript:void(0);">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-primary" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-primary" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-primary disabled" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Nav With Border</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 br-7 border">
											<li class="nav-item1">
												<a class="nav-link text-primary active" href="javascript:void(0);">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-primary" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-primary" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-primary disabled" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Icon With Text Navigation</h3>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills nav-pills-circle" id="tabs_2" role="tablist">
											<li class="nav-item">
												<a class="nav-link border py-3 px-5 m-2" id="tab1" data-bs-toggle="tab" href="#tabs_2_1" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-home"></i> Home</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border py-3 px-5 m-2" id="tab2" data-bs-toggle="tab" href="#tabs_2_2" role="tab"  aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-unlock"></i> Lock </span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link py-3 px-5 border active show m-2" id="tab3" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="true">
													<span class="nav-link-icon d-block"><i class="fe fe-play"></i> Videos</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link  border py-3 px-5 m-2" id="tab4" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-layers"></i> Severs</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border py-3 px-5 m-2" id="tab5" data-bs-toggle="tab" href="#tabs_2_4" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-image"></i> Gallery </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Justified Navigation</h3>
									</div>
									<div class="card-body">
										<ul class="nav nav-justified border">
											<li class="nav-item m-2">
												<a class="nav-link text-primary px-4 py-2" href="javascript:void(0);">Home</a>
											</li><li class="nav-item m-2">
												<a class="nav-link text-primary px-4 py-2" href="javascript:void(0);">About</a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link text-primary px-4 py-2" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link text-primary disabled px-4 py-2" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Center Navigation</h3>
									</div>
									<div class="card-body">
										<ul class="nav justify-content-center border">
											<li class="nav-item m-2">
												<a class="nav-link text-primary px-4 py-2" href="javascript:void(0);">Home</a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link active text-primary px-4 py-2">About</a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link text-primary px-4 py-2" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link text-primary disabled px-4 py-2" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Right Navigation</h3>
									</div>
									<div class="card-body">
										<ul class="nav justify-content-end border">
											<li class="nav-item m-2">
												<a class="nav-link text-primary px-4 py-2" href="javascript:void(0);">Home</a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link text-primary px-4 py-2" href="javascript:void(0);">About</a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link text-primary px-4 py-2" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link text-primary disabled px-4 py-2" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Navigation Wiith dropdown</h3>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills">
											<li class="nav-item m-2">
												<a class="nav-link text-primary px-4 py-2" href="javascript:void(0);">Home</a>
											</li>
											<li class="nav-item dropdown m-2">
												<a class="nav-link active dropdown-toggle px-4 py-2" data-bs-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
												</div>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link text-primary px-4 py-2" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link text-primary disabled px-4 py-2" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Icon Nav Bar</h3>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills nav-pills-circle" id="tabs_3" role="tablist">
											<li class="nav-item m-2">
												<a class="nav-link text-primary px-2 py-2" href="javascript:void(0);"><span class="nav-link-icon d-block text-primary text-center mx-auto"><i class="fe fe-home fs-15"></i></span></a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link text-primary px-2 py-2" href="javascript:void(0);"><span class="nav-link-icon d-block text-primary text-center mx-auto"><i class="fe fe-unlock fs-15"></i></span></a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link active px-2 py-2" href="javascript:void(0);"><span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-play fs-15"></i></span></a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link text-primary px-2 py-2" href="javascript:void(0);"><span class="nav-link-icon d-block text-primary text-center mx-auto"><i class="fe fe-layers fs-15"></i></span></a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link text-primary px-2 py-2" href="javascript:void(0);"><span class="nav-link-icon d-block text-primary text-center mx-auto"><i class="fe fe-image fs-15"></i> </span></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Colored Background Navigation</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 bg-primary br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="javascript:void(0);">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white disabled" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-warning mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="javascript:void(0);">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white disabled" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-success mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="javascript:void(0);">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white disabled" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-danger mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="javascript:void(0);">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-white" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Transparent Background Navigation</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 bg-primary-transparent br-7">
											<li class="nav-item1">
												<a class="nav-link active text-primary" href="javascript:void(0);">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-primary" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-primary" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-primary" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-warning-transparent mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-warning active" href="javascript:void(0);">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-warning" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-warning" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-warning disabled" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-success-transparent mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-success active" href="javascript:void(0);">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-success" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-success" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-success disabled" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-danger-transparent mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-danger active" href="javascript:void(0);">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-danger" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-danger" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-danger" href="javascript:void(0);">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection('content')

@section('scripts')

		<!-- INTERNAL Clipboard js -->
		<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

@endsection
