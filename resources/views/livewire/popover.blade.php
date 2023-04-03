@extends('layouts.app')

@section('styles')

    	<!-- INTERNAL Prism Css -->
		<link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Popovers</h4>
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
								<!--div-->
								<div class="card mb-4" id="popover">
									<div class="card-header">
										<div class="card-title">
											Default Popover
										</div>
									</div>
									<div class="card-body">

										<div class="form-label mb-2">
											Static Example
										</div>
										<div class="popover-static-demo mb-4 border br-3 pb-6">
											<div class="row row-sm">
												<div class="col-md-6 mt-4">
													<div class="popover bs-popover-top">
														<div class="popover-arrow"></div>
														<h3 class="popover-header">Popover top</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-4">
													<div class="popover bs-popover-bottom">
														<div class="popover-arrow"></div>
														<h3 class="popover-header">Popover Bottom</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-4">
													<div class="popover bs-popover-start">
														<div class="popover-arrow"></div>
														<h3 class="popover-header">Popover Left</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-4">
													<div class="popover bs-popover-end">
														<div class="popover-arrow"></div>
														<h3 class="popover-header">Popover Right</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-label mb-2">
											Example
										</div>
										<div class="px-4 bg-light border br-3 pt-4 pb-5">
											<div class="row row-sm text-center">
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="default" data-bs-toggle="popover" title="Popover top" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="bottom" data-bs-popover-color="default1" data-bs-toggle="popover" title="Popover bottom" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="right" data-bs-popover-color="default2" data-bs-toggle="popover" title="Popover right" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="left" data-bs-popover-color="default3" data-bs-toggle="popover" title="Popover left" type="button">Click me</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card mb-4" id="popover1">
									<div class="card-header">
										<div class="card-title">
											Colored Head Popover
										</div>
									</div>
									<div class="card-body">
										<div class="form-label mb-2">
											Static Example
										</div>
										<div class="popover-static-demo mb-4">
											<div class="row row-sm">
												<div class="col-md-6">
													<div class="popover popover-head-primary bs-popover-top">
														<div class="popover-arrow"></div>
														<h3 class="popover-header">Popover top</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-5 mt-md-0">
													<div class="popover popover-head-secondary bs-popover-top">
														<div class="popover-arrow"></div>
														<h3 class="popover-header">Popover Bottom</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-label mb-2">
											Example
										</div>
										<div class="px-4 bg-light border br-3 pt-4 pb-5">
											<div class="row row-sm text-center">
												<div class="col-sm-6 col-lg-3  mt-3 text-center">
													<button class="btn btn-secondary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="head-primary" data-bs-toggle="popover" title="Popover top" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3 text-center">
													<button class="btn btn-secondary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="head-secondary" data-bs-toggle="popover" title="Popover bottom" type="button">Click me</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="popover2">
									<div class="card-header">
										<div class="card-title">
											Full Colored Popover
										</div>
									</div>
									<div class="card-body">
										<div class="form-label mb-2">
											Static Example
										</div>
										<div class="popover-static-demo mb-4 pb-6">
											<div class="row row-sm">
												<div class="col-md-6 mt-4">
													<div class="popover popover-primary bs-popover-top">
														<div class="popover-arrow"></div>
														<h3 class="popover-header">Popover top</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-4">
													<div class="popover popover-secondary bs-popover-bottom">
														<div class="popover-arrow"></div>
														<h3 class="popover-header">Popover Bottom</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-label mb-2">
											Example
										</div>
										<div class="px-4 bg-light border br-3 pb-5 pt-4">
											<div class="row row-sm text-center">
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="primary" title="Popover top" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="bottom" data-bs-popover-color="secondary" title="Popover bottom" type="button">Click me</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->
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

		<!-- INTERNAL popover js -->
        <script src="{{asset('assets/js/popover.js')}}"></script>

@endsection
