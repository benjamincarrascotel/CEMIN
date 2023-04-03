@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Prism Css -->
		<link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Dropdowns</h4>
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
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-light btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-success btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-info btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-danger btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-light">Action</button>
													<button type="button" class="btn btn-light dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary">Action</button>
													<button type="button" class="btn btn-primary dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-success">Action</button>
													<button type="button" class="btn btn-success dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-info">Action</button>
													<button type="button" class="btn btn-info dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-warning">Action</button>
													<button type="button" class="btn btn-warning dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-danger">Action</button>
													<button type="button" class="btn btn-danger dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-light">Action</button>
													<button type="button" class="btn btn-pill btn-light dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-primary">Action</button>
													<button type="button" class="btn btn-pill btn-primary dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-success">Action</button>
													<button type="button" class="btn btn-pill btn-success dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-info">Action</button>
													<button type="button" class="btn btn-pill btn-info dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-warning">Action</button>
													<button type="button" class="btn btn-warning btn-pill dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-danger">Action</button>
													<button type="button" class="btn btn-pill btn-danger dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single Square outline button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">

												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-primary btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-success btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-info btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">

												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-primary">Action</button>
													<button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-success">Action</button>
													<button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-info">Action</button>
													<button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-warning">Action</button>
													<button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-danger">Action</button>
													<button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-primary">Action</button>
													<button type="button" class="btn btn-pill btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-success">Action</button>
													<button type="button" class="btn btn-pill btn-outline-success dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-info">Action</button>
													<button type="button" class="btn btn-pill btn-outline-info dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-warning">Action</button>
													<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-danger">Action</button>
													<button type="button" class="btn btn-pill btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Dropright dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="btn-group mb-2 mt-2 dropend">
											<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
											  Dropright
											</button>
											<ul class="dropdown-menu">
												<li class="dropdown-plus-title">
													Dropdown
													<b class="fa fa-angle-up"></b>
												</li>
												<li><a href="javascript:void(0);">Action</a></li>
												<li><a href="javascript:void(0);">Another action</a></li>
												<li><a href="javascript:void(0);">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="javascript:void(0);">Separated link</a></li>
											</ul>
										  </div>

										  <div class="btn-group dropend">
											<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
											  Dropright
											</button>
											<ul class="dropdown-menu">
												<li class="dropdown-plus-title">
													Dropdown
													<b class="fa fa-angle-up"></b>
												</li>
												<li><a href="javascript:void(0);">Action</a></li>
												<li><a href="javascript:void(0);">Another action</a></li>
												<li><a href="javascript:void(0);">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="javascript:void(0);">Separated link</a></li>
											</ul>
										  </div>

										  <div class="btn-group dropend">
											<button type="button" class="btn btn-info">
											  Split dropend
											</button>
											<button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
											  <span class="visually-hidden">Toggle Dropright</span>
											</button>
											<ul class="dropdown-menu">
												<li class="dropdown-plus-title">
													Dropdown
													<b class="fa fa-angle-up"></b>
												</li>
												<li><a href="javascript:void(0);">Action</a></li>
												<li><a href="javascript:void(0);">Another action</a></li>
												<li><a href="javascript:void(0);">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="javascript:void(0);">Separated link</a></li>
											</ul>
										  </div>
										  <div class="btn-group dropend">
											<button type="button" class="btn btn-danger">
											  Split dropend
											</button>
											<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
											  <span class="visually-hidden">Toggle Dropright</span>
											</button>
											<ul class="dropdown-menu">
												<li class="dropdown-plus-title">
													Dropdown
													<b class="fa fa-angle-up"></b>
												</li>
												<li><a href="javascript:void(0);">Action</a></li>
												<li><a href="javascript:void(0);">Another action</a></li>
												<li><a href="javascript:void(0);">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="javascript:void(0);">Separated link</a></li>
											</ul>
										  </div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Dropleft dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="btn-group mt-2 mb-2 dropstart">
											<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
											  Dropstart
											</button>
											<ul class="dropdown-menu">
												<li class="dropdown-plus-title">
													Dropdown
													<b class="fa fa-angle-up"></b>
												</li>
												<li><a href="javascript:void(0);">Action</a></li>
												<li><a href="javascript:void(0);">Another action</a></li>
												<li><a href="javascript:void(0);">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="javascript:void(0);">Separated link</a></li>
											</ul>
										  </div>

										  <div class="btn-group dropstart">
											<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
											  Dropstart
											</button>
											<ul class="dropdown-menu">
												<li class="dropdown-plus-title">
													Dropdown
													<b class="fa fa-angle-up"></b>
												</li>
												<li><a href="javascript:void(0);">Action</a></li>
												<li><a href="javascript:void(0);">Another action</a></li>
												<li><a href="javascript:void(0);">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="javascript:void(0);">Separated link</a></li>
											</ul>
										  </div>

										  <div class="btn-group">
											<div class="btn-group dropstart" role="group">
											  <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
												<span class="visually-hidden">Toggle Dropstart</span>
											  </button>
											  <ul class="dropdown-menu">
												<li class="dropdown-plus-title">
													Dropdown
													<b class="fa fa-angle-up"></b>
												</li>
												<li><a href="javascript:void(0);">Action</a></li>
												<li><a href="javascript:void(0);">Another action</a></li>
												<li><a href="javascript:void(0);">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="javascript:void(0);">Separated link</a></li>
											  </ul>
											</div>
											<button type="button" class="btn btn-info">
											  Split dropstart
											</button>
										  </div>
										  <div class="btn-group">
											<div class="btn-group dropstart" role="group">
											  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
												<span class="visually-hidden">Toggle Dropstart</span>
											  </button>
											  <ul class="dropdown-menu">
												<li class="dropdown-plus-title">
													Dropdown
													<b class="fa fa-angle-up"></b>
												</li>
												<li><a href="javascript:void(0);">Action</a></li>
												<li><a href="javascript:void(0);">Another action</a></li>
												<li><a href="javascript:void(0);">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="javascript:void(0);">Separated link</a></li>
											  </ul>
											</div>
											<button type="button" class="btn btn-danger">
											  Split dropstart
											</button>
										  </div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Dropup variation</h3>
									</div>
									<div class="card-body">
										<div class="dropup btn-group mt-2 mb-2">
											<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropup1
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="javascript:void(0);">HTML</a></li>
												<li><a href="javascript:void(0);">CSS</a></li>
												<li><a href="javascript:void(0);">JavaScript</a></li>
												<li class="divider"></li>
												<li><a href="javascript:void(0);">About Us</a></li>
											</ul>
										</div>

										<!-- Split dropup button -->
										<div class="dropup btn-group mt-2 mb-2">
											<button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropup2
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="javascript:void(0);">HTML</a></li>
												<li><a href="javascript:void(0);">CSS</a></li>
												<li><a href="javascript:void(0);">JavaScript</a></li>
												<li class="divider"></li>
												<li><a href="javascript:void(0);">About Us</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Icon Drop Downs dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
														<i class="fa fa-cog me-1"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
														<i class="fa fa-ellipsis-h me-1"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
														<i class="fa fa-ellipsis-v me-1"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
														<i class="fa fa-chain me-1"></i><span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="javascript:void(0);">Action</a></li>
														<li><a href="javascript:void(0);">Another action</a></li>
														<li><a href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

@endsection('content')

@section('scripts')

		<!-- INTERNAL Clipboard js -->
		<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

@endsection