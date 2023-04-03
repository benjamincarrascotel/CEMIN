@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!--Page header-->
					<div class="page-header">
						<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Wishlist</h4>
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

					<!-- ROW-1 OPEN -->
					<div class="col-lg-12 col-xl-12 p-0">
						<div class="row">
							<div class="col-xl-3 col-lg-6 alert">
								<div class="card item-card ">
									<div class="card-body pb-0">
										<div class="text-center zoom">
											<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/7.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
										</div>
										<div class="card-body ps-0 pb-3">
											<div class="row">
												<div class="col-10 mb-3">
													<div class="cardtitle">
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"> (23)</a>
														</div>
														<a class="shop-title fs-17">Beautiful Leather Hand Bag</a>
													</div>
												</div>
												<div class="col-2">
													<div class="cardprice">
														<span class="type--strikethrough number-font">$2,498</span>
														<span class="number-font">$1,967</span>
													</div>
												</div>
												<div>
													<p class="shop-description fs-13 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center pb-4 ps-2 pe-2">
										<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add Item</a>
										<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
											<span class="me-2 fs-14">Remove</span>
											<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 alert">
								<div class="card item-card">
									<div class="card-body pb-0">
										<div class="text-center zoom">
											<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/8.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
										</div>
										<div class="card-body ps-0 pb-3">
											<div class="row">
												<div class="col-10 mb-3">
													<div class="cardtitle">
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"> (64)</a>
														</div>
														<a class="shop-title fs-17">Premium Desktop Design</a>
													</div>
												</div>
												<div class="col-2">
													<div class="cardprice">
														<span class="type--strikethrough number-font">$2,999</span>
														<span class="number-font">$1,999</span>
													</div>
												</div>
												<div>
													<p class="shop-description fs-13 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center pb-4 ps-2 pe-2">
										<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add Item</a>
										<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
											<span class="me-2 fs-14">Remove</span>
											<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 alert">
								<div class="card item-card">
									<div class="card-body pb-0">
										<div class="text-center zoom">
											<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/9.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
										</div>
										<div class="card-body ps-0 pb-3">
											<div class="row">
												<div class="col-10 mb-3">
													<div class="cardtitle">
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"> (41)</a>
														</div>
														<a class="shop-title fs-17">Your Phone With Latest Android</a>
													</div>
												</div>
												<div class="col-2">
													<div class="cardprice">
														<span class="type--strikethrough number-font">$1,499</span>
														<span class="number-font">$999</span>
													</div>
												</div>
												<div>
													<p class="shop-description fs-13 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center pb-4 ps-2 pe-2">
										<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add Item</a>
										<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
											<span class="me-2 fs-14">Remove</span>
											<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 alert">
								<div class="card item-card">
									<div class="card-body pb-0">
										<div class="text-center zoom">
											<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/1.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
										</div>
										<div class="card-body ps-0 pb-3">
											<div class="row">
												<div class="col-10 mb-3">
													<div class="cardtitle">
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"> (232)</a>
														</div>
														<a class="shop-title fs-17">Beautiful Flower vase</a>
													</div>
												</div>
												<div class="col-2">
													<div class="cardprice">
														<span class="type--strikethrough number-font">$498</span>
														<span class="number-font">$225</span>
													</div>
												</div>
												<div>
													<p class="shop-description fs-13 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center pb-4 ps-2 pe-2">
										<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add Item</a>
										<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
											<span class="me-2 fs-14">Remove</span>
											<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 alert">
								<div class="card item-card">
									<div class="card-body pb-0">
										<div class="text-center zoom">
											<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/2.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
										</div>
										<div class="card-body ps-0 pb-3">
											<div class="row">
												<div class="col-10 mb-3">
													<div class="cardtitle">
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"> (143)</a>
														</div>
														<a class="shop-title fs-17">Leather Finished Chair For Home</a>
													</div>
												</div>
												<div class="col-2">
													<div class="cardprice">
														<span class="type--strikethrough number-font">$298</span>
														<span class="number-font">$198</span>
													</div>
												</div>
												<div>
													<p class="shop-description fs-13 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center pb-4 ps-2 pe-2">
										<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add Item</a>
										<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
											<span class="me-2 fs-14">Remove</span>
											<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 alert">
								<div class="card item-card">
									<div class="card-body pb-0">
										<div class="text-center zoom">
											<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/3.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
										</div>
										<div class="card-body ps-0 pb-3">
											<div class="row">
												<div class="col-10 mb-3">
													<div class="cardtitle">
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"> (29)</a>
														</div>
														<a class="shop-title fs-17">Branded Shoes For men</a>
													</div>
												</div>
												<div class="col-2">
													<div class="cardprice">
														<span class="type--strikethrough number-font">$2,999</span>
														<span class="number-font">$2,499</span>
													</div>
												</div>
												<div>
													<p class="shop-description fs-13 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center pb-4 ps-2 pe-2">
										<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add Item</a>
										<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
											<span class="me-2 fs-14">Remove</span>
											<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 alert">
								<div class="card item-card">
									<div class="card-body pb-0">
										<div class="text-center zoom">
											<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/4.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
										</div>
										<div class="card-body ps-0 pb-3">
											<div class="row">
												<div class="col-10 mb-3">
													<div class="cardtitle">
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"> (20)</a>
														</div>
														<a class="shop-title fs-17">Igono Laptop Ryzen5 Processor</a>
													</div>
												</div>
												<div class="col-2">
													<div class="cardprice">
														<span class="type--strikethrough number-font">$3,498</span>
														<span class="number-font">$2,999</span>
													</div>
												</div>
												<div>
													<p class="shop-description fs-13 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center pb-4 ps-2 pe-2">
										<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add Item</a>
										<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
											<span class="me-2 fs-14">Remove</span>
											<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 alert">
								<div class="card item-card">
									<div class="card-body pb-0">
										<div class="text-center zoom">
											<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/5.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
										</div>
										<div class="card-body ps-0 pb-3">
											<div class="row">
												<div class="col-10 mb-3">
													<div class="cardtitle">
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"> (283)</a>
														</div>
														<a class="shop-title fs-17">Orange Smart Watch</a>
													</div>
												</div>
												<div class="col-2">
													<div class="cardprice">
														<span class="type--strikethrough number-font">$2,498</span>
														<span class="number-font">$1,967</span>
													</div>
												</div>
												<div>
													<p class="shop-description fs-13 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center pb-4 ps-2 pe-2">
										<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add Item</a>
										<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
											<span class="me-2 fs-14">Remove</span>
											<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 alert">
								<div class="card item-card">
									<div class="card-body pb-0">
										<div class="text-center zoom">
											<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/6.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
										</div>
										<div class="card-body ps-0 pb-3">
											<div class="row">
												<div class="col-10 mb-3">
													<div class="cardtitle">
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"> (14)</a>
														</div>
														<a class="shop-title fs-17">Micon Camera With 10x Zoom</a>
													</div>
												</div>
												<div class="col-2">
													<div class="cardprice">
														<span class="type--strikethrough number-font">$1,499</span>
														<span class="number-font">$1,299</span>
													</div>
												</div>
												<div>
													<p class="shop-description fs-13 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center pb-4 ps-2 pe-2">
										<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add Item</a>
										<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
											<span class="me-2 fs-14">Remove</span>
											<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 alert">
								<div class="card item-card">
									<div class="card-body pb-0">
										<div class="text-center zoom">
											<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/2.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
										</div>
										<div class="card-body ps-0 pb-3">
											<div class="row">
												<div class="col-10 mb-3">
													<div class="cardtitle">
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"> (143)</a>
														</div>
														<a class="shop-title fs-17">Leather Finished Chair For Home</a>
													</div>
												</div>
												<div class="col-2">
													<div class="cardprice">
														<span class="type--strikethrough number-font">$298</span>
														<span class="number-font">$198</span>
													</div>
												</div>
												<div>
													<p class="shop-description fs-13 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center pb-4 ps-2 pe-2">
										<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add Item</a>
										<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
											<span class="me-2 fs-14">Remove</span>
											<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 alert">
								<div class="card item-card">
									<div class="card-body pb-0">
										<div class="text-center zoom">
											<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/3.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
										</div>
										<div class="card-body ps-0 pb-3">
											<div class="row">
												<div class="col-10 mb-3">
													<div class="cardtitle">
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"> (29)</a>
														</div>
														<a class="shop-title fs-17">Branded Shoes For men</a>
													</div>
												</div>
												<div class="col-2">
													<div class="cardprice">
														<span class="type--strikethrough number-font">$2,999</span>
														<span class="number-font">$2,499</span>
													</div>
												</div>
												<div>
													<p class="shop-description fs-13 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center pb-4 ps-2 pe-2">
										<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add Item</a>
										<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
											<span class="me-2 fs-14">Remove</span>
											<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 alert">
								<div class="card item-card">
									<div class="card-body pb-0">
										<div class="text-center zoom">
											<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/4.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
										</div>
										<div class="card-body ps-0 pb-3">
											<div class="row">
												<div class="col-10 mb-3">
													<div class="cardtitle">
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="javascript:void(0);"> (20)</a>
														</div>
														<a class="shop-title fs-17">Igono Laptop Ryzen5 Processor</a>
													</div>
												</div>
												<div class="col-2">
													<div class="cardprice">
														<span class="type--strikethrough number-font">$3,498</span>
														<span class="number-font">$2,999</span>
													</div>
												</div>
												<div>
													<p class="shop-description fs-13 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center pb-4 ps-2 pe-2">
										<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add Item</a>
										<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
											<span class="me-2 fs-14">Remove</span>
											<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-end">
							<ul class="pagination mb-5">
								<li class="disabled page-item">
									<a class="page-link" href="javascript:void(0);">‹</a>
								</li>
								<li class="active page-item">
									<a class="page-link" href="javascript:void(0);">1</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="javascript:void(0);">2</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="javascript:void(0);">3</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="javascript:void(0);">4</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="javascript:void(0);">5</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="javascript:void(0);">›</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- COL-END -->

@endsection('content')

@section('scripts')

@endsection
