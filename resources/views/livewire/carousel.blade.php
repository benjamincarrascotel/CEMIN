@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Prism Css -->
		<link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Carousel</h4>
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
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel</h3>
									</div>
									<div class="card-body">
										<div id="carousel-default" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/19.jpg')}}" data-bs-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/20.jpg')}}" data-bs-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/21.jpg')}}" data-bs-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/22.jpg')}}" data-bs-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/23.jpg')}}" data-bs-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with indicators</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-indicators">
												<button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="0" class="active"></button>
												<button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="1" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="2" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="3" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="4" class=""></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/24.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/25.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/1.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/2.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/3.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-controls" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/4.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/5.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/6.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/7.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/8.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-controls" role="button" data-bs-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="visually-hidden">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-controls" role="button" data-bs-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="visually-hidden">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with captions</h3>
									</div>
									<div class="card-body">
										<div id="carousel-captions" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/9.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/10.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/11.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/12.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/13.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-captions" role="button" data-bs-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="visually-hidden">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-captions" role="button" data-bs-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="visually-hidden">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top indicators</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators1" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-indicators carousel-top-indicators">
												<button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="0" class="active"></button>
												<button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="1" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="2" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="3" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="4" class=""></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/14.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/15.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/16.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/17.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/18.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top-right indicators</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators2" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-indicators carousel-top-right-indicators">
												<button type="button" data-bs-target="#carousel-indicators2" data-bs-slide-to="0" class="active"></button>
												<button type="button" data-bs-target="#carousel-indicators2" data-bs-slide-to="1" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators2" data-bs-slide-to="2" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators2" data-bs-slide-to="3" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators2" data-bs-slide-to="4" class=""></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/19.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/20.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/21.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/22.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/23.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top-left indicators</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators3" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-indicators carousel-top-left-indicators">
												<button type="button" data-bs-target="#carousel-indicators3" data-bs-slide-to="0" class="active"></button>
												<button type="button" data-bs-target="#carousel-indicators3" data-bs-slide-to="1" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators3" data-bs-slide-to="2" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators3" data-bs-slide-to="3" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators3" data-bs-slide-to="4" class=""></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/24.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/25.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/1.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/2.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/3.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with bottom-right indicators</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators4" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-indicators carousel-bottom-right-indicators">
												<button type="button" data-bs-target="#carousel-indicators4" data-bs-slide-to="0" class="active"></button>
												<button type="button" data-bs-target="#carousel-indicators4" data-bs-slide-to="1" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators4" data-bs-slide-to="2" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators4" data-bs-slide-to="3" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators4" data-bs-slide-to="4" class=""></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/4.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/5.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/6.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/7.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/8.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with bottom-left indicators</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators5" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-indicators carousel-bottom-left-indicators">
												<button type="button" data-bs-target="#carousel-indicators5" data-bs-slide-to="0" class="active"></button>
												<button type="button" data-bs-target="#carousel-indicators5" data-bs-slide-to="1" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators5" data-bs-slide-to="2" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators5" data-bs-slide-to="3" class=""></button>
												<button type="button" data-bs-target="#carousel-indicators5" data-bs-slide-to="4" class=""></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/9.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/10.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/11.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/12.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/13.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with Background color captions</h3>
									</div>
									<div class="card-body">
										<div id="carousel-captions2" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/gradient1.jpg')}}" data-holder-rendered="true">
													<div class="carousel-caption">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/gradient2.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{asset('assets/images/photos/gradient3.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-captions2" role="button" data-bs-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="visually-hidden">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-captions2" role="button" data-bs-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="visually-hidden">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

@endsection('content')

@section('scripts')

        <!-- INTERNAL Clipboard js -->
		<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

@endsection