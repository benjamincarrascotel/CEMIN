@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Card Images</h4>
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
						<div class="card">
							<div class="card-header">
								<h3 class="card-title ">Card Group</h3>
							</div>
							<div class="card-group p-5">
								<div class="card shadow-none border border-end-0 overflow-hidden">
									<img  src="{{asset('assets/images/photos/10.jpg')}}" alt="image"  class="card-image1 ">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
								</div>
								<div class="card shadow-none border border-end-0 overflow-hidden">
									<img  src="{{asset('assets/images/photos/11.jpg')}}" alt="image"  class="card-image1 ">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
								</div>
								<div class="card shadow-none border overflow-hidden">
									<img  src="{{asset('assets/images/photos/12.jpg')}}" alt="image"  class="card-image1 ">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title ">Card Group Footers</h3>
							</div>
							<div class="card-group p-5">
								<div class="card  overflow-hidden shadow-none border border-end-0">
									<img  src="{{asset('assets/images/photos/13.jpg')}}" alt="image"  class="card-image1 ">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
									<div class="card-footer">
										<small class="text-muted">Last updated 3 mins ago</small>
									</div>
								</div>
								<div class="card  overflow-hidden shadow-none border border-end-0">
									<img  src="{{asset('assets/images/photos/14.jpg')}}" alt="image"  class="card-image1 ">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
									</div>
									<div class="card-footer">
										<small class="text-muted">Last updated 3 mins ago</small>
									</div>
								</div>
								<div class="card overflow-hidden shadow-none border">
									<img  src="{{asset('assets/images/photos/15.jpg')}}" alt="image"  class="card-image1 ">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
									</div>
									<div class="card-footer">
										<small class="text-muted">Last updated 3 mins ago</small>
									</div>
								</div>
							</div>
						</div>

						<!--Row-->
						<div class="row">
							<div class="col-md-6 col-lg-4">
								<div class="card overflow-hidden">
									<img  src="{{asset('assets/images/photos/2.jpg')}}" alt="image" class="card-image1 ">
									<div class="card-body">
										<h5 class="card-title mb-3">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="javascript:void(0);" class="btn btn-primary">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card overflow-hidden">
									<div class="card-body">
										<h5 class="card-title mb-3">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="javascript:void(0);" class="btn btn-primary">Read More</a>
									</div>
									<img  src="{{asset('assets/images/photos/1.jpg')}}" alt="image"  class="card-image1 ">
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card overflow-hidden">
									<img  src="{{asset('assets/images/photos/5.jpg')}}" alt="image" class="card-image1 ">
									<div class="card-body">
										<h5 class="card-title mb-3">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<div class="card-footer">card footer</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header"><div class="card-title">card header</div></div>
									<img  src="{{asset('assets/images/photos/6.jpg')}}" alt="image"  class="card-image1 ">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card overflow-hidden">
									<img  src="{{asset('assets/images/photos/10.jpg')}}" alt="image"  class="card-image1 ">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
									<div class="card-footer">
										<small class="text-muted">Last updated 3 mins ago</small>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card overflow-hidden">
								<img  src="{{asset('assets/images/photos/8.jpg')}}" alt="image"  class="card-image1 ">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card card-blog-overlay1">
									<div class="card-body  text-white">
										<h3 class="card-title text-white">card-with image</h3>
										Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer  text-white z-index-10">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card card-blog-overlay2">
									<div class="card-body  text-white">
										<h3 class="card-title text-white">card-with image</h3>
										Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer text-white z-index-10">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card card-blog-overlay ">
									<div class="card-header z-index-10">
										<h3 class="card-title text-white">card-with image</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x text-white"></i></a>
										</div>
									</div>
									<div class="card-body  text-white">
										Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title ">card-with image</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up "></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<div class="card-body  text-white card-blog-overlay1 h-9 w-100">
									</div>
									<div class="card-body p-4">
										Duis aute irure dolor
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card card-aside">
									<div class="card-body flex-column">
										<h4><a href="javascript:void(0);">Play Music</a></h4>
										<div class="text-muted">Some quick example text to build on the card title and make up the bulk of the card's</div>
										<div class="d-flex align-items-center pt-5 mt-auto text-center ">
											<div class="text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-step-backward"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-play "></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-step-forward"></i></a>
											</div>
										</div>
									</div>
									<a href="javascript:void(0);" class="card-aside-column br-tr-7 br-br-7 w-50" style="background-image: url({{asset('assets/images/photos/2.jpg')}})"></a>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card card-aside bg-primary">
									<div class="card-body flex-column">
										<h4><a href="javascript:void(0);" class="text-white">Play Music</a></h4>
										<div class="text-white">Some quick example text to build on the card title and make up the bulk of the card's </div>
										<div class="d-flex align-items-center pt-5 mt-auto text-center ">
											<div class="text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-step-backward text-white"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-play text-white "></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-step-forward text-white"></i></a>
											</div>
										</div>
									</div>
									<a href="javascript:void(0);" class="card-aside-column br-tr-7 br-br-7 w-50" style="background-image: url({{asset('assets/images/photos/20.jpg')}})"></a>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title ">Employee card</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-remove me-2" data-bs-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<img src="{{asset('assets/images/users/16.jpg')}}" class="avatar avatar-xxl brround" alt="">
										<h4 class="h4 mb-0 mt-3 font-weight-bold">James Thomas</h4>
										<p class="card-text text-muted">Web designer</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title ">Employee card</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<img src="{{asset('assets/images/users/10.jpg')}}" class="avatar avatar-xxl brround" alt="">
										<h4 class="h4 mb-0 mt-3 font-weight-bold">Rebacca Thomas</h4>
										<p class="text-muted">Web designer</p>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

@endsection('content')

@section('scripts')

@endsection