@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!--Page header-->
					<div class="page-header">
						<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Product Details</h4>
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
							<div class="col-md-12 wrapper wrapper-content">
								<div class="ibox card">
									<div class="card-body">
										<div class="ibox-content">
											<div class="row mb-3">
												<div class="col-md-12 col-lg-12">
													<div class="row">
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-5">
															<div class="row">
																<div class="col-2">
																	<div class="clearfix carousel-slider">
																		<div id="thumbcarousel" class="carousel slide" data-interval="false">
																			<div class="carousel-inner">
																				<div class="carousel-item active">
																					<div data-bs-target="#carousel" data-bs-slide-to="0" class="thumb my-2"><img src="{{asset('assets/images/products/item2.png')}}" alt="img" class="img-fluid br-7 border"></div>
																					<div data-bs-target="#carousel" data-bs-slide-to="1" class="thumb my-2"><img src="{{asset('assets/images/products/item3.png')}}" alt="img" class="img-fluid br-7 border"></div>
																					<div data-bs-target="#carousel" data-bs-slide-to="2" class="thumb my-2"><img src="{{asset('assets/images/products/item4.png')}}" alt="img" class="img-fluid br-7 border"></div>
																					<div data-bs-target="#carousel" data-bs-slide-to="3" class="thumb my-2"><img src="{{asset('assets/images/products/item5.png')}}" alt="img" class="img-fluid br-7 border"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-10">
																	<div class="product-carousel border br-7">
																		<div id="carousel" class="carousel slide" data-bs-ride="false">
																			<div class="carousel-inner">
																				<div class="carousel-item mt-2 active"><img src="{{asset('assets/images/products/item2.png')}}" alt="img" class="img-fluid br-7">
																				</div>
																				<div class="carousel-item mt-2"><img src="{{asset('assets/images/products/item3.png')}}" alt="img" class="img-fluid br-7">
																				</div>
																				<div class="carousel-item mt-2"><img src="{{asset('assets/images/products/item4.png')}}" alt="img" class="img-fluid br-7">
																				</div>
																				<div class="carousel-item mt-2"><img src="{{asset('assets/images/products/item5.png')}}" alt="img" class="img-fluid br-7">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

															</div>
														</div>
														<div class="col-lg-12 col-sm-12 col-xs-12 col-xl-7 mt-5">
															<h3 class="mb-3">
																<a href="javascript:void(0);" class="text-navy">
																		Stylish Men's T-shirt
																</a>
															</h3>
															<div>
																<h5>Description</h5>
																<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
																<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
															</div>
															<h3 class="font-weight-bold fs-24">$99 <del class="h5 font-weight-normal">$250</del></h3>
															<div class="mt-2"><span class="font-weight-bold text-primary">15% Cashback   </span>by using icici bank credit card.<small class="text-muted">Terms and Conditions Applies!</small></div>
															<div class="font-weight-bold mb-2 mt-2"><span class="fs-16">Available :</span><span class="text-success ms-2 fs-16">In stock</span></div>
															<div  class="font-weight-bold">Over All Ratings:<i class="fa fa-star ms-2 fs-16 text-warning"></i><i class="fa fa-star fs-16 text-warning"></i><i class="fa fa-star fs-16 text-warning"></i><i class="fa fa-star fs-16 text-warning"></i><i class="fa fa-star-half-o fs-16 text-warning"></i><span class="font-weight-semibold fs-16 ms-2">4.4 Out Of 5.</span></div>
															<div class="text-muted fs-14 font-weight-normal mt-2">1,164 Total Ratings</div>
															<div class="row mt-2">
																<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
																	<div class="row">
																		<div class="col-3">
																			<span>5 stars</span>
																		</div>
																		<div class="col-6">
																			<div class="progress progress-sm mb-5">
																				<div class="progress-bar bg-warning" style="width: 52%"></div>
																			</div>
																		</div>
																		<div class="col-3">
																			<span>(52%)</span>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-3">
																			<span>4 stars</span>
																		</div>
																		<div class="col-6">
																			<div class="progress progress-sm mb-5">
																				<div class="progress-bar bg-warning" style="width: 33%"></div>
																			</div>
																		</div>
																		<div class="col-3">
																			<span>(33%)</span>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-3">
																			<span>3 stars</span>
																		</div>
																		<div class="col-6">
																			<div class="progress progress-sm mb-5">
																				<div class="progress-bar bg-warning" style="width: 3%"></div>
																			</div>
																		</div>
																		<div class="col-3">
																			<span>(3%)</span>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-3">
																			<span>2 stars</span>
																		</div>
																		<div class="col-6">
																			<div class="progress progress-sm mb-5">
																				<div class="progress-bar bg-warning" style="width: 2%"></div>
																			</div>
																		</div>
																		<div class="col-3">
																			<span>(2%)</span>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-3">
																			<span>1 star</span>
																		</div>
																		<div class="col-6">
																			<div class="progress progress-sm">
																				<div class="progress-bar bg-warning" style="width: 10%"></div>
																			</div>
																		</div>
																		<div class="col-3">
																			<span>(10%)</span>
																		</div>
																	</div>
																</div>
																<div class="col-7"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="ibox-content card-footer text-end">
										<a href="{{url('checkout')}}" class="btn btn-success">Buy Now</a>
										<a href="{{url('cart')}}" class="btn btn-primary"><i class="fe fe-shopping-cart me-1"></i> Add to cart</a>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-sm-12 col-md-]12">
										<div class="card">
											<div class="card-body">
												<div class="panel panel-light">
													<div class="tab-menu-heading">
														<div class="tabs-menu ">
															<!-- Tabs -->
															<ul class="nav panel-tabs shop-des-tabs">
																<li class=""><a href="#tab1" class="active" data-bs-toggle="tab">Description</a></li>
																<li><a href="#tab2" data-bs-toggle="tab">Details</a></li>
																<li><a href="#tab3" data-bs-toggle="tab">Additional Features</a></li>
															</ul>
														</div>
													</div>
													<div class="panel-body tabs-menu-body fs-13">
														<div class="tab-content">
															<div class="tab-pane active" id="tab1">
																<ul>
																	<li class="row mb-5">
																		<div class="col-sm-3 text-muted">Brand</div>
																		<div class="col-sm-9">Eenio, MOTilo (WUHAN) MOBILITY TECHNOLOGIES COMMNICATION MOBILITY TECHNOLOGIES MOBILITY TECHNOLOGIES COMMNICATION</div>
																	</li>
																	<li class="row mb-5">
																		<div class="col-sm-3 text-muted">Model</div>
																		<div class="col-sm-9">‎Eenio  Tab M10 FHD Plus Tablet (10.3-inch, 2GB, 32GB, Wi-Fi + LTE, Volte Calling), Platinum Grey</div>
																	</li>
																	<li class="row mb-5">
																		<div class="col-sm-3 text-muted">Dimensions</div>
																		<div class="col-sm-9">‎24.4 x 0.8 x 15.3 cm; 460 Grams</div>
																	</li>
																	<li class="row mb-5">
																		<div class="col-sm-3 text-muted">Color</div>
																		<div class="col-sm-9">‎White</div>
																	</li>
																	<li class="row mb-5">
																		<div class="col-sm-3 text-muted">Material</div>
																		<div class="col-sm-9">Metal Body</div>
																	</li>
																</ul>
															</div>
															<div class="tab-pane  " id="tab2">
																<ul>
																	<li class="row mb-5">
																		<div class="col-sm-3 text-muted">
																			Operating System
																		</div>
																		<div class="col-sm-3">
																			Android 9.0 Pie
																		</div>
																	</li>
																	<li class="row mb-5 text-muted">
																		<div class="col-sm-3">
																			Processor Brand
																		</div>
																		<div class="col-sm-3">
																			‎MediaTek
																		</div>
																	</li>
																	<li class="row mb-5 text-muted">
																		<div class="col-sm-3">
																			Battery Cell Composition
																		</div>
																		<div class="col-sm-3">
																			‎Lithium Ion
																		</div>
																	</li>
																	<li class="row mb-5 text-muted">
																		<div class="col-sm-3">
																			Connector Type
																		</div>
																		<div class="col-sm-3">
																			‎Cellular, Wi-Fi
																		</div>
																	</li>
																	<li class="row mb-5 text-muted">
																		<div class="col-sm-3">
																			Manufacturer
																		</div>
																		<div class="col-sm-3">
																			MOTilo
																		</div>
																	</li>
																</ul>
															<div class=""></div>
															</div>
															<div class="tab-pane " id="tab3">
																<ul class="p-5">
																	<li><i class="fa fa-check me-3 text-success mb-5"></i>Quad Stereo Sound - more lively movies and music</li>
																	<li><i class="fa fa-check me-3 text-success mb-5"></i>Long lasting 7,040 mAH battery with fast adaptive charging</li>
																	<li><i class="fa fa-check me-3 text-success mb-5"></i>8 MP Primary Camera, 5 MP Front Facing Camera</li>
																	<li><i class="fa fa-check me-3 text-success mb-5"></i>Seamless apps and gaming experience with Qualcomm Snapdragon 662 processor (4X2.0 GHz+4X1.8 GHz)</li>
																	<li><i class="fa fa-check me-3 text-success mb-5"></i>1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories</li>
																	<li><i class="fa fa-check me-3 text-success"></i>Customer care :1234 567 678</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-12 col-md-12">
										<div class="card">
											<div class="card-header">
												<div class="card-title">Reviews</div>
											</div>
											<div class="card-body">
												<div class="d-sm-flex mt-0 mb-4 sub-review-section border-bottom-0 br-bl-0 br-br-0">
													<div class="d-flex me-3">
														<a href="javascript:void(0);"><img class="media-object brround avatar-md" alt="64x64" src="{{asset('assets/images/users/1.jpg')}}"> </a>
													</div>
													<div class="media-body Comments1">
														<h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
															<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
															<span class="fs-14 ms-2"> 4.5 <i class="fa fa-star text-yellow"></i></span>
															<span>
															<a href="javascript:void(0)" class="new ms-3"><i class="text-success br-7 text-success fe fe-thumbs-up fs-16 text-icon "></i></a>
															<a href="javascript:void(0)" class="new ms-3 mt-6"><i class="text-danger br-7 text-danger fe fe-thumbs-down  fs-16 text-icon"></i></a>
															</span>
														</h5>
														<p class="font-13  mb-2 mt-2 text-muted">
														Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
														</p>
														<a href="" class="me-2 mt-1"><span class="badge badge-sm bg-primary-transparent text-primary border-primary">Helpful</span></a>
														<a href="" class="me-2 mt-1"><span class="border-info badge bg-info-transparent text-info">Comment</span></a>
														<a href="" class="me-2 mt-1"><span class="border-danger badge bg-danger-transparent text-danger">Report</span></a>
													</div>
												</div>
												<div class="d-sm-flex mt-0 mb-4  sub-review-sectio border-bottom-0 br-bl-0 br-br-0">
													<div class="d-flex me-3">
														<a href="javascript:void(0);"><img class="media-object brround avatar-md" alt="64x64" src="{{asset('assets/images/users/1.jpg')}}"> </a>
													</div>
													<div class="media-body Comments1">
														<h5 class="mt-0 mb-1 font-weight-semibold">Franchesca
															<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
															<span class="fs-14 ms-2"> 4 <i class="fa fa-star text-yellow"></i></span>
															<span class="">
															<a href="javascript:void(0)" class="new ms-3 "><i class="text-success br-7 text-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
															<a href="javascript:void(0)" class="new ms-3 mt-6"><i class="text-danger br-7 text-danger fe fe-thumbs-down  fs-16 text-icon"></i></a>
															</span>
														</h5>
														<p class="font-13  mb-2 mt-2 text-muted">
														Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud.
														</p>
														<a href="javascript:void(0);" class="me-2 mt-1"><span class="badge bg-primary-transparent text-primary border-primary">Helpful</span></a>
														<a href="" class="me-2 mt-1"><span class="border-info badge bg-info-transparent text-info">Comment</span></a>
														<a href="" class="me-2 mt-1"><span class="badge border-danger bg-danger-transparent text-danger">Report</span></a>
													</div>
												</div>
												<h5 class="mb-3">Add Review</h5>
												<form class="form-horizontal  m-t-20" action="{{url('index')}}">
													<div class="form-group">
														<div class="col-xs-12">
															<textarea class="form-control" rows="2">Your Review*</textarea>
														</div>
													</div>
													<div class="">
														<a href="javascript:void(0);" class="btn btn-primary btn-rounded  waves-effect waves-light">Submit</a>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection('content')

@section('scripts')

@endsection
