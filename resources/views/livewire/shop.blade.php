@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Select2 css -->
		<link href="{{asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />

@endsection

@section('content')

					<!--Page header-->
					<div class="page-header">
						<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Products</h4>
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
							<div class="col-xl-3 col-lg-12">
								<div class="row">
									<div class="col-md-12 col-lg-12 ">
										<div class="card">

											<div class="card-header bg-light">
												<div class="card-title"> Categories &amp; Fliters</div>
											</div>
											<div class="card-body">
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" checked="">
													<label for="checkbox-1" class="custom-control-label">Mens</label>
												</div>
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
													<label for="checkbox-2" class="custom-control-label">Womens</label>
												</div>
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
													<label for="checkbox-3" class="custom-control-label">Kids</label>
												</div>
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
													<label for="checkbox-4" class="custom-control-label">Others</label>
												</div>
											</div>
											<div class="card-header bg-light">
												<div class="card-title">Category</div>
											</div>
											<div class="card-body">
												<div class="form-group">
													<label class="form-label"></label>
													<select name="beast" id="select-beast" class="form-control custom-select select2">
														<option value="0">Dress</option>
														<option value="1">Dress</option>
														<option value="2">Bags &amp; Purses</option>
														<option value="3">Coat &amp; Jacket</option>
														<option value="4">Beauty</option>
														<option value="5">Jeans</option>
														<option value="5">Jewellery</option>
														<option value="5">Electronics</option>
														<option value="5">Sports</option>
														<option value="5">Technology</option>
														<option value="5">Watches</option>
														<option value="5">Accessories</option>
													</select>
												</div>
											</div>
											<div class="card-header bg-light">
												<div class="card-title">Brand</div>
											</div>
											<div class="card-body">
												<div class="form-group">
													<label class="form-label mt-1"></label>
													<select name="beast" id="select-beast1"  class="form-control custom-select select2">
														<option value="0">Black</option>
														<option value="1">White</option>
														<option value="2">Black</option>
														<option value="3">Red</option>
														<option value="4">Green</option>
														<option value="5">Blue</option>
														<option value="6">Yellow</option>
													</select>
												</div>
											</div>
											<div class="card-header bg-light">
												<h3 class="card-title">
													Color
												</h3>
											</div>
											<div class="card-body">
												<div class="row gutters-xs">
													<div class="col-auto brround">
														<label class="colorinput">
															<input name="color" type="radio" value="azure" class="colorinput-input " checked="">
															<span class="colorinput-color bg-azure"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="indigo" class="colorinput-input">
															<span class="colorinput-color bg-indigo"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="purple" class="colorinput-input">
															<span class="colorinput-color bg-purple"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="pink" class="colorinput-input">
															<span class="colorinput-color bg-pink"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="red" class="colorinput-input">
															<span class="colorinput-color bg-red"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="orange" class="colorinput-input">
															<span class="colorinput-color bg-orange"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="yellow" class="colorinput-input">
															<span class="colorinput-color bg-yellow"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="lime" class="colorinput-input">
															<span class="colorinput-color bg-lime"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="green" class="colorinput-input">
															<span class="colorinput-color bg-green"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="teal" class="colorinput-input">
															<span class="colorinput-color bg-teal"></span>
														</label>
													</div>
												</div>
											</div>
											<div class="card-header bg-light">
												<div class="card-title">Price</div>
											</div>
											<div class="card-body">
												<label class="custom-control custom-radio mb-3">
													<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
													<span class="custom-control-label">Under $25</span>
												</label>
												<label class="custom-control custom-radio mb-3">
													<input type="radio" class="custom-control-input" name="example-radios" value="option2">
													<span class="custom-control-label">$25 to $50</span>
												</label>
												<label class="custom-control custom-radio mb-3">
													<input type="radio" class="custom-control-input" name="example-radios" value="option3">
													<span class="custom-control-label">$50 to $100</span>
												</label>
												<label class="custom-control custom-radio mb-3">
													<input type="radio" class="custom-control-input" name="example-radios02" value="option4">
													<span class="custom-control-label">$100 to $200</span>
												</label>
												<label class="custom-control custom-radio mb-3">
													<input type="radio" class="custom-control-input" name="example-radios02" value="option5">
													<span class="custom-control-label">$200 & Above</span>
												</label>
											</div>

											<div class="card-header bg-light">
												<div class="card-title"> Size</div>
											</div>
											<div class="card-body">
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-21" checked="">
													<label for="checkbox-21" class="custom-control-label ms-2">Xtra Small</label>
												</div>
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-22">
													<label for="checkbox-22" class="custom-control-label ms-2">Small</label>
												</div>
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-23">
													<label for="checkbox-23" class="custom-control-label ms-2">Medium</label>
												</div>
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-24">
													<label for="checkbox-24" class="custom-control-label ms-2">Large</label>
												</div>
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-25">
													<label for="checkbox-25" class="custom-control-label ms-2">Xtra Large</label>
												</div>
											</div>
											<div class="card-header bg-light">
												<div class="card-title"> Ratings</div>
											</div>
											<div class="card-body">
												<div class="custom-checkbox custom-control mb-3">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-11" checked="">
													<label for="checkbox-11" class="custom-control-label">
														<span class="fs-14 ms-2 my-auto">
															<i class="fa fa-star  text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
														</span>
													</label>
												</div>
												<div class="custom-checkbox custom-control mb-3">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-12">
													<label for="checkbox-12" class="custom-control-label">
														<span class="fs-14 ms-2 my-auto">
															<i class="fa fa-star  text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
														</span>
													</label>
												</div>
												<div class="custom-checkbox custom-control mb-3">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-13">
													<label for="checkbox-13" class="custom-control-label">
														<span class="fs-14 ms-2 my-auto">
															<i class="fa fa-star  text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
														</span>
													</label>
												</div>
												<div class="custom-checkbox custom-control mb-3">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-14">
													<label for="checkbox-14" class="custom-control-label">
														<span class="fs-14 ms-2 my-auto">
															<i class="fa fa-star  text-warning"></i>
															<i class="fa fa-star text-warning"></i>
														</span>
													</label>
												</div>
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-15">
													<label for="checkbox-15" class="custom-control-label">
														<span class="fs-14 ms-2 my-auto">
															<i class="fa fa-star  text-warning"></i>
														</span>
													</label>
												</div>
											</div>
											<div class="card-footer">
												<a class="btn btn-primary " href="javascript:void(0);">Apply Filter</a>
												<a class="btn btn-success" href="javascript:void(0);">Search Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-9">
								<div class="row">
									<div class="col-xl-4 col-lg-6 alert">
										<div class="card item-card ">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/7.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"> (23)</a>
																</div>
																<a class="shop-title fs-18">Beautiful Leather Hand Bag</a>
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
												<a href="{{url('shop-des')}}" class="btn btn-md bg-primary-transparent text-primary mb-2 border-primary w-45"><i class="fe fe-eye me-1 font-weight-bold"></i>Quick View</a>
												<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/8.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"> (64)</a>
																</div>
																<a class="shop-title fs-18">Premium Desktop Design</a>
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
												<a href="{{url('shop-des')}}" class="btn btn-md bg-primary-transparent text-primary mb-2 border-primary w-45"><i class="fe fe-eye me-1 font-weight-bold"></i>Quick View</a>
												<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/9.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"> (41)</a>
																</div>
																<a class="shop-title fs-18">Your Phone With Latest Android</a>
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
												<a href="{{url('shop-des')}}" class="btn btn-md bg-primary-transparent text-primary mb-2 border-primary w-45"><i class="fe fe-eye me-1 font-weight-bold"></i>Quick View</a>
												<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/1.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"> (232)</a>
																</div>
																<a class="shop-title fs-18">Beautiful Flower vase</a>
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
												<a href="{{url('shop-des')}}" class="btn btn-md bg-primary-transparent text-primary mb-2 border-primary w-45"><i class="fe fe-eye me-1 font-weight-bold"></i>Quick View</a>
												<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/2.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"> (143)</a>
																</div>
																<a class="shop-title fs-18">Leather Finished Chair For Home</a>
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
												<a href="{{url('shop-des')}}" class="btn btn-md bg-primary-transparent text-primary mb-2 border-primary w-45"><i class="fe fe-eye me-1 font-weight-bold"></i>Quick View</a>
												<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/3.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"> (29)</a>
																</div>
																<a class="shop-title fs-18">Branded Shoes For men</a>
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
												<a href="{{url('shop-des')}}" class="btn btn-md bg-primary-transparent text-primary mb-2 border-primary w-45"><i class="fe fe-eye me-1 font-weight-bold"></i>Quick View</a>
												<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/4.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"> (20)</a>
																</div>
																<a class="shop-title fs-18">Igono Laptop Ryzen5 Processor</a>
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
												<a href="{{url('shop-des')}}" class="btn btn-md bg-primary-transparent text-primary mb-2 border-primary w-45"><i class="fe fe-eye me-1 font-weight-bold"></i>Quick View</a>
												<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/5.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"> (283)</a>
																</div>
																<a class="shop-title fs-18">Orange Smart Watch</a>
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
												<a href="{{url('shop-des')}}" class="btn btn-md bg-primary-transparent text-primary mb-2 border-primary w-45"><i class="fe fe-eye me-1 font-weight-bold"></i>Quick View</a>
												<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop-des')}}"><img src="{{asset('assets/images/products/6.jpg')}}" alt="img" class="img-fluid w-100 br-7"></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
																	<a href="javascript:void(0);"> (14)</a>
																</div>
																<a class="shop-title fs-18">Micon Camera With 10x Zoom</a>
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
												<a href="{{url('shop-des')}}" class="btn btn-md bg-primary-transparent text-primary mb-2 border-primary w-45"><i class="fe fe-eye me-1 font-weight-bold"></i>Quick View</a>
												<a href="{{url('cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45 fs-14"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
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

						</div>
						<!-- End  Row -->

@endsection('content')

@section('scripts')

		<!--Select2 js -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

@endsection
