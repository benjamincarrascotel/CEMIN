@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Cart</h4>
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

						<!-- Row-->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xl-8">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												<span class="ms-3">Cart Items</span>
											</div>
										</div>
											<div class="table-responsive">
												<table class="table card-table table-vcenter text-nowrap shopping-carttable">
													<thead class="border-bottom-0 pt-3 pb-3 ">
														<tr>
															<th class="fs-15">Products</th>
															<th>Product Details</th>
															<th>Price</th>
															<th>Quantity</th>
															<th>Total</th>
															<th>Remove</th>
														</tr>
													</thead>
													<tbody>
														<tr class="cart-table attach-supportfiles">
															<td><img class="avatar avatar-lg br-7" src="{{asset('assets/images/orders/7.jpg')}}" alt="img"></td>
															<td class="fs-15 font-weight-normal1">Book</td>
															<td>$411</td>
															<td>
																<button class="btn btn-sm btn-primary"><i class="fe fe-minus"></i></button>
																<span class="ms-2 me-2 fs-15">1</span>
																<button class="btn btn-sm btn-primary"><i class="fe fe-plus"></i></button></td>
															<td><span>$411</span></td>
															<td>
																<span class="text-success fs-18 me-3">
																	<i class="fe fe-download"></i>
																</span>
																<span class="text-danger fs-18">
																	<i class="fe fe-trash"></i>
																</span>
															</td>
														</tr>
														<tr class="cart-table attach-supportfiles">
															<td><img class="avatar avatar-lg br-7" src="{{asset('assets/images/orders/5.jpg')}}" alt="img"></td>
															<td class="fs-15 font-weight-normal1">Shoes</td>
															<td>$5436</td>
															<td>
																<button class="btn btn-sm btn-primary"><i class="fe fe-minus"></i></button>
																<span class="ms-2 me-2 fs-15">1</span>
																<button class="btn btn-sm btn-primary"><i class="fe fe-plus"></i></button></td>
															</td>
															<td><span>$5436</span></td>
															<td>
																<span class="text-success fs-18 me-3">
																	<i class="fe fe-download"></i>
																</span>
																<span class="text-danger fs-18">
																	<i class="fe fe-trash"></i>
																</span>
															</td>
														</tr>
														<tr class="cart-table attach-supportfiles">
															<td><img class="avatar avatar-lg br-7" src="{{asset('assets/images/orders/6.jpg')}}" alt="img"></td>
															<td class="fs-15 font-weight-normal1">Watch</td>
															<td>$540</td>
															<td>
																<button class="btn btn-sm btn-primary"><i class="fe fe-minus"></i></button>
																<span class="ms-2 me-2 fs-15">1</span>
																<button class="btn btn-sm btn-primary"><i class="fe fe-plus"></i></button></td>
															</td>
															<td><span>$540</span></td>
															<td>
																<span class="text-success fs-18 me-3">
																	<i class="fe fe-download"></i>
																</span>
																<span class="text-danger fs-18">
																	<i class="fe fe-trash"></i>
																</span>
															</td>
														</tr>
														<tr class="cart-table attach-supportfiles">
															<td><img class="avatar avatar-lg br-7" src="{{asset('assets/images/orders/3.jpg')}}" alt="img"></td>
															<td class="fs-15 font-weight-normal1">Cosmetics</td>
															<td>$1543</td>
															<td>
																<button class="btn btn-sm btn-primary"><i class="fe fe-minus"></i></button>
																<span class="ms-2 me-2 fs-15">1</span>
																<button class="btn btn-sm btn-primary"><i class="fe fe-plus"></i></button></td>
															</td>
															<td><span>$3086</span></td>
															<td>
																<span class="text-success fs-18 me-3">
																	<i class="fe fe-download"></i>
																</span>
																<span class="text-danger fs-18">
																	<i class="fe fe-trash"></i>
																</span>
															</td>
														</tr>
														<tr class="cart-table attach-supportfiles">
															<td><img class="avatar avatar-lg br-7" src="{{asset('assets/images/orders/10.jpg')}}" alt="img"></td>
															<td class="fs-15 font-weight-normal1">Head set</td>
															<td>$6427</td>
															<td>
																<button class="btn btn-sm btn-primary"><i class="fe fe-minus"></i></button>
																<span class="ms-2 me-2 fs-15">1</span>
																<button class="btn btn-sm btn-primary"><i class="fe fe-plus"></i></button></td>
															</td>
															<td><span>$6427</span></td>
															<td>
																<span class="text-success fs-18 me-3">
																	<i class="fe fe-download"></i>
																</span>
																<span class="text-danger fs-18">
																	<i class="fe fe-trash"></i>
																</span>
															</td>
														</tr>
														<tr class="cart-table attach-supportfiles">
															<td><img class="avatar avatar-lg br-7" src="{{asset('assets/images/orders/11.jpg')}}" alt="img"></td>
															<td class="fs-15 font-weight-normal1">Ear Buds</td>
															<td>$67</td>
															<td>
																<button class="btn btn-sm btn-primary"><i class="fe fe-minus"></i></button>
																<span class="ms-2 me-2 fs-15">1</span>
																<button class="btn btn-sm btn-primary"><i class="fe fe-plus"></i></button></td>
															</td>
															<td><span>$67</span></td>
															<td>
																<span class="text-success fs-18 me-3">
																	<i class="fe fe-download"></i>
																</span>
																<span class="text-danger fs-18">
																	<i class="fe fe-trash"></i>
																</span>
															</td>
														</tr>
														<tr class="cart-table attach-supportfiles">
															<td><img class="avatar avatar-lg br-7" src="{{asset('assets/images/orders/12.jpg')}}" alt="img"></td>
															<td class="fs-15 font-weight-normal1">Smart Watch</td>
															<td>$427</td>
															<td>
																<button class="btn btn-sm btn-primary"><i class="fe fe-minus"></i></button>
																<span class="ms-2 me-2 fs-15">1</span>
																<button class="btn btn-sm btn-primary"><i class="fe fe-plus"></i></button></td>
															</td>
															<td><span>$427</span></td>
															<td>
																<span class="text-success fs-18 me-3">
																	<i class="fe fe-download"></i>
																</span>
																<span class="text-danger fs-18">
																	<i class="fe fe-trash"></i>
																</span>
															</td>
														</tr>
														<tr class="cart-table attach-supportfiles">
															<td><img class="avatar avatar-lg br-7" src="{{asset('assets/images/orders/13.jpg')}}" alt="img"></td>
															<td class="fs-15 font-weight-normal1">Canvas Shoes</td>
															<td>$647</td>
															<td>
																<button class="btn btn-sm btn-primary"><i class="fe fe-minus"></i></button>
																<span class="ms-2 me-2 fs-15">1</span>
																<button class="btn btn-sm btn-primary"><i class="fe fe-plus"></i></button></td>
															</td>
															<td><span>$647</span></td>
															<td>
																<span class="text-success fs-18 me-3">
																	<i class="fe fe-download"></i>
																</span>
																<span class="text-danger fs-18">
																	<i class="fe fe-trash"></i>
																</span>
															</td>
														</tr>
													</tbody>
												</table>

									    </div>
									</div>
								</div>
								<div class="col-lg-12 col-xl-4 col-sm-12 col-md-12">
									<div class="card">
										<div class="card-body">
											<form>
												<div class="form-group mb-0"> <label class="font-weight-bold">Have coupon?</label>
													<div class="input-group mt-2"> <input type="text" class="form-control coupon" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
												</div>
											</form>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<div class="card-title">Order-Summary</div>
										</div>
										<div class="card-body">
											<h5>Amount Details</h5>
											<div class="table-responsive">
												<table class="table table-borderless text-nowrap mb-0">
													<tbody>
														<tr>
															<td class="text-start">Total Price</td>
															<td class="text-end"><span class="font-weight-bold  ms-auto">$256</span></td>
														</tr>
														<tr>
															<td class="text-start">Additional Discount</td>
															<td class="text-end"><span class="font-weight-bold text-success">- $35</span></td>
														</tr>
														<tr>
															<td class="text-start">Delivery Charges</td>
															<td class="text-end"><span class="font-weight-bold text-green">Free</span></td>
														</tr>
														<tr>
															<td class="text-start">Tax</td>
															<td class="text-end"><span class="font-weight-bold text-danger">+ $55</span></td>
														</tr>
														<tr>
															<td class="text-start">Coupon Discount</td>
															<td class="text-end"><span class="font-weight-bold text-success">- $10</span></td>
														</tr>
														<tr>
															<td class="text-start">Vat Tax</td>
															<td class="text-end"><span class="font-weight-bold ">+ $5</span></td>
														</tr>
														<tr>
															<td class="text-start fs-18">Total Bill</td>
															<td class="text-end"><span class="ms-2 font-weight-bold  fs-22">$271</span></td>
														</tr>
														<tr>
															<td class="text-start"><a href="{{url('shop')}}" class="btn btn-success btn-md mt-3" role="button">Continue Shopping <i class="fe fe-arrow-right ms-2"></i></a></td>
															<td class="text-end"><a href="{{url('checkout')}}" class="btn btn-primary btn-md mt-3" role="button">Checkout</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>

								</div>
							</div>
						<!-- End Row-->

@endsection('content')

@section('scripts')

@endsection