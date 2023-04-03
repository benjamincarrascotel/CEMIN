@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Gallery css -->
		<link href="{{asset('assets/plugins/gallery/gallery.css')}}" rel="stylesheet">

@endsection

@section('content')

					<!--Page header-->
					<div class="page-header">
						<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Widgets</h4>
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

						<!--Row-->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<svg class="card-custom-icon header-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 8v12h14V8H5zm7 6c-2.76 0-5-2.24-5-5h2c0 1.66 1.34 3 3 3s3-1.34 3-3h2c0 2.76-2.24 5-5 5z" opacity=".3"/><path d="M17 6c0-2.76-2.24-5-5-5S7 3.24 7 6H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-2zm-5-3c1.66 0 3 1.34 3 3H9c0-1.66 1.34-3 3-3zm7 17H5V8h14v12zm-7-8c-1.66 0-3-1.34-3-3H7c0 2.76 2.24 5 5 5s5-2.24 5-5h-2c0 1.66-1.34 3-3 3z"/></svg>
										<p class=" mb-1">Impressions</p>
										<h2 class="mb-1 font-weight-bold">168</h2>
										<span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 0.8%</span> than last month</span>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<svg class="card-custom-icon header-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" opacity=".3"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
										<p class=" mb-1">Total Followers</p>
										<h2 class="mb-1 font-weight-bold">3456k</h2>
										<span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 0.8%</span> than last month</span>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<svg class="card-custom-icon header-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z"/></svg>
										<p class="fs-13 mb-1">Page Views</p>
										<h2 class="mb-1 font-weight-bold">234k</h2>
										<span class="mb-1 text-muted"><span class="text-danger"><i class="fa fa-caret-down  me-1"></i> 43.2</span> than last month</span>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<svg class="card-custom-icon header-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm4.25 12.15L11 13V7h1.5v5.25l4.5 2.67-.75 1.23z" opacity=".3"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
										<p class=" mb-1">Time On Site</p>
										<h2 class="mb-1 font-weight-bold">12m 3s</h2>
										<span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 19.8</span> than last month</span>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-lg-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">
											Top Products
										</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="btn btn-sm btn-primary">View All</a>
										</div>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-hover card-table table-vcenter text-nowrap">
												<thead class="border-bottom-0 pt-3 pb-3">
													<tr>
														<th class="text-center">s.no</th>
														<th>Product Category</th>
														<th>Product Name</th>
														<th>Sale Value</th>
														<th>Sale Info</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">1</td>
														<td><img class="avatat avatar-md brround me-2" src="{{asset('assets/images/orders/7.jpg')}}" alt="img">Books</td>
														<td class="fs-13 text-success"><span class="dot-label bg-success me-2 w-2 h-2"></span>Book</td>
														<td><span class="font-weight-normal1">$1234</span></td>
														<td class="text-muted">3 days ago</td>
														<td><span class="badge fs-11 bg-success-transparent text-success ms-2">Regular</span></td>
													</tr>
													<tr>
														<td class="text-center">2</td>
														<td><img class="avatat avatar-md brround me-2" src="{{asset('assets/images/orders/5.jpg')}}" alt="img">Sports</td>
														<td class="fs-13 text-secondary"><span class="dot-label bg-secondary me-2 w-2 h-2"></span>Shoes</td>
														<td><span class="font-weight-normal1">$5436</span></td>
														<td class="text-muted">1hr ago</td>
														<td><span class="badge fs-11 bg-secondary-transparent text-secondary ms-2">Top Seller</span></td>
													</tr>
													<tr>
														<td class="text-center">3</td>
														<td><img class="avatat avatar-md brround me-2" src="{{asset('assets/images/orders/6.jpg')}}" alt="img">Accesories</td>
														<td class="fs-13 text-danger"><span class="dot-label bg-danger me-2 w-2 h-2"></span>Watch</td>
														<td><span class="font-weight-normal1">$540</span></td>
														<td class="text-muted">1 week ago</td>
														<td><span class="badge fs-11 bg-danger-transparent text-danger ms-2">Irregular</span></td>
													</tr>
													<tr>
														<td class="text-center">4</td>
														<td><img class="avatat avatar-md brround me-2" src="{{asset('assets/images/orders/9.jpg')}}" alt="img">Toys</td>
														<td class="fs-13 text-success"><span class="dot-label bg-success me-2 w-2 h-2"></span>Car</td>
														<td><span class="font-weight-normal1">$1543</span></td>
														<td class="text-muted">Today</td>
														<td><span class="badge fs-11 bg-success-transparent text-success text-success ms-2">Regular</span></td>
													</tr>
													<tr>
														<td class="text-center">5</td>
														<td><img class="avatat avatar-md brround me-2" src="{{asset('assets/images/orders/10.jpg')}}" alt="img">speakers</td>
														<td class="fs-13 text-info"><span class="dot-label bg-info me-2 w-2 h-2"></span>Head set</td>
														<td><span class="font-weight-normal1">$6427</span></td>
														<td class="text-muted">Today</td>
														<td><span class="badge fs-11 bg-info-transparent text-info ms-2 mb-0">Top Pick</span></td>
													</tr>
												</tbody>
											</table>
									    </div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">
											Recent transactions
										</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="btn btn-sm btn-primary">View All</a>
										</div>
									</div>
									<div class="card-body">
										<div class="mb-3">
											<div class="d-flex">
												<div class="Recent-transactions-img brround bg-primary text-white font-weight-normal1">AL</div>
												<div class="">
													<a href="javascript:void(0);" class="font-weight-normal1 mb-1 fs-13">Alberto</a>
													<p class="text-muted fs-11">2 hours ago</p>
												</div>
												<span class="text-success font-weight-normal fs-12 ms-auto">&plus;$543.98</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="d-flex">
												<div class="Recent-transactions-img brround bg-danger text-white font-weight-normal1">HE</div>
												<div class="">
													<a href="javascript:void(0);" class="font-weight-normal1 mb-1 fs-13">Herrouchi</a>
													<p class="text-muted fs-11">6 hours ago</p>
												</div>
												<span class="text-success font-weight-normal fs-12 ms-auto">&plus;$534.87</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="d-flex">
												<div class="Recent-transactions-img brround bg-warning text-white font-weight-normal1 text-center">AK</div>
												<div class="">
													<a  href="javascript:void(0);" class="font-weight-normal1 mb-1 fs-13">Alexandra Kiso</a>
													<p class="text-muted fs-11">2 days ago</p>
												</div>
												<span class="text-danger font-weight-normal fs-12 ms-auto">&minus;$132</span>
											</div>
									    </div>
										<div class="mb-3">
											<div class="d-flex">
												<div class="Recent-transactions-img brround bg-teal text-white font-weight-normal1 text-center">KW</div>
												<div class="">
													<a href="javascript:void(0);" class="font-weight-normal1 mb-1 fs-13">kate william</a>
													<p class="text-muted fs-11">1 hours ago</p>
												</div>
												<span class="text-success font-weight-normal fs-12 ms-auto">&plus;$153.45</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="d-flex">
												<div class="Recent-transactions-img brround bg-success text-white font-weight-normal1 text-center">JP</div>
												<div class="">
													<a href="javascript:void(0);" class="font-weight-normal1 mb-1 fs-13">Jean Powell</a>
													<p class="text-muted fs-11">5 hours ago</p>
												</div>
												<span class="text-danger font-weight-normal fs-12 ms-auto">&minus;$324.78</span>
											</div>
										</div>
										<div class="">
											<div class="d-flex">
												<div class="Recent-transactions-img brround bg-secondary text-white font-weight-normal1 text-center">HC</div>
												<div class="">
													<a href="javascript:void(0);" class="font-weight-normal1 mb-1 fs-13">Hakino Chen</a>
													<p class="text-muted fs-11 mb-0">21 hours ago</p>
												</div>
												<span class="text-danger font-weight-normal fs-12 ms-auto">&minus;$3277.78</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Revenue Of This Month</h3>
									</div>
									<div class="card-body">
										<div class="mb-6">
											<div class="d-flex align-items-center justify-content-between">
												<span class="text-muted fs-13 mb-1">Monthly Profit</span>
											</div>
											<div class="d-flex justify-content-between mb-1">
												<span class="fs-16 font-weight-normal1">$25,854</span>
												<span class="text-muted fs-12"><i class="mdi mdi-arrow-up-thick text-success"></i> 40% increase</span>
											</div>
											<div class="progress progress-sm">
												<div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width: 50%"></div>
											</div>
										</div>
										<div class="mb-6">
											<div class="d-flex align-items-center justify-content-between">
												<span class="text-muted fs-13 mb-1">Monthly Orders</span>
											</div>
											<div class="d-flex justify-content-between mb-1">
												<span class="fs-16 font-weight-normal1">8,654</span>
												<span class="text-muted fs-12"><i class="mdi mdi-arrow-up-thick text-success"></i> 62% increase</span>
											</div>
											<div class="progress progress-sm">
												<div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" style="width: 80%"></div>
											</div>
										</div>
										<div class="mb-6">
											<div class="d-flex align-items-center justify-content-between">
												<span class="text-muted fs-13 mb-1">Monthly Revenue</span>
											</div>
											<div class="d-flex justify-content-between mb-1">
												<span class="fs-16 font-weight-normal1">$98,654</span>
												<span class="text-muted  fs-12"><i class="mdi mdi-arrow-up-thick text-success"></i> 38% increase</span>
											</div>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 60%"></div>
											</div>
										</div>
										<div>
											<div class="d-flex align-items-center justify-content-between">
												<span class="text-muted fs-13 mb-1">Monthly Expenses</span>
											</div>
											<div class="d-flex justify-content-between mb-1">
												<span class="fs-16 font-weight-normal1">$54,456</span>
												<span class="text-muted fs-12"><i class="mdi mdi-arrow-down-thick text-danger"></i> 20% decreased</span>
											</div>
											<div class="progress progress-sm">
												<div class="progress-bar bg-pink progress-bar-striped progress-bar-animated" style="width: 70%"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
							<div class="row">
								<div class="col-md-4">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">
												Recent Activity
											</h3>
											<div class="card-options">
												<a href="javascript:void(0);" class="btn btn-sm btn-primary">View All</a>
											</div>
										</div>
										<div class="card-body p-0">
											<ul class="recent-activity">
												<li class="mb-6 mt-5">
													<div>
														<span class="activity-timeline text-info"><i class="mdi mdi-archive"></i></span>
														<div class="activity-timeline-content">
															<span class="font-weight-normal1 fs-13">New Products,</span><span class="text-muted fs-12 float-end">6:45pm</span>
															<span class="activity-sub-content text-info fs-11">52% New products</span>
															<p class="text-muted fs-12 mt-1">More than 200 new products are added</p>
														</div>
													</div>
												</li>
												<li class="mb-6">
													<div>
														<span class="activity-timeline text-danger"><i class="zmdi zmdi-mall"></i></span>
														<div class="activity-timeline-content">
															<span class="font-weight-normal1 fs-13">New Sale,</span><span class="text-muted fs-12 float-end">1day ago</span>
															<span class="activity-sub-content text-danger fs-11">76% Profit earned.</span>
															<p class="text-muted fs-12 mt-1">$2,546 income earned in today sale</p>
														</div>
													</div>
												</li>
												<li class="mb-6">
													<div>
														<span class="activity-timeline text-success"><i class="mdi mdi-account-box"></i></span>
														<div class="activity-timeline-content">
															<span class="font-weight-normal1 fs-13">New Customers,</span><span class="text-muted fs-12 float-end">7.45pm</span>
															<span class="activity-sub-content text-success fs-11">24% New customers</span>
															<p class="text-muted fs-12 mt-1">1.3k new customers reached us this year</p>
														</div>
													</div>
												</li>
												<li class="mb-6">
													<div>
														<span class="activity-timeline text-warning"><i class="zmdi zmdi-pin-assistant"></i></span>
														<div class="activity-timeline-content">
															<span class="font-weight-normal1 fs-13">New Reviews,</span><span class="text-muted fs-12 float-end">1min ago</span>
															<span class="activity-sub-content text-warning fs-11">96% Positive reviews.</span>
															<p class="text-muted fs-12 mt-1">There are 500 plus new reviews</p>
														</div>
													</div>
												</li>
												<li class="mb-6">
													<div>
														<span class="activity-timeline text-secondary"><i class="zmdi zmdi-eye"></i></span>
														<div class="activity-timeline-content">
															<span class="font-weight-normal1 fs-13">Customer Visits,</span><span class="text-muted fs-12 float-end">today</span>
															<span class="activity-sub-content text-secondary fs-11">33% target achieved.</span>
															<p class="text-muted fs-12 mt-1">daily 20 plus new customers visits us</p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-8">
									<div class="card">
										<div class="card-body p-0 pt-4">
											<div class="table-responsive">
												<table class="table card-table table-vcenter text-nowrap">
													<thead>
														<tr>
															<th>s.no</th>
															<th>Product Category</th>
															<th>Customer Ratings</th>
															<th>Sale Value</th>
															<th>Sale Info</th>
															<th>Status</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td><img class="avatat avatar-md brround me-2" src="{{asset('assets/images/orders/1.jpg')}}" alt="img">Cosmetics</td>
															<td class=" fs-12"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star-o text-warning"></i></td>
															<td><span class="font-weight-semibold">$1234</span></td>
															<td class="text-muted">last sale 3 days ago</td>
															<td><span class="badge bg-success text-white p-2 ms-2">Regular</span></td>
														</tr>
														<tr>
															<td>2</td>
															<td><img class="avatat avatar-md brround me-2" src="{{asset('assets/images/orders/2.jpg')}}" alt="img">Sports</td>
															<td class="fs-12"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></td>
															<td><span class="font-weight-semibold">$5436</span></td>
															<td class="text-muted">last sale 1hr ago</td>
															<td><span class="badge bg-secondary text-white p-2 ms-2">Top Seller</span></td>
														</tr>
														<tr>
															<td>3</td>
															<td><img class="avatat avatar-md brround me-2" src="{{asset('assets/images/orders/3.jpg')}}" alt="img">Bags</td>
															<td class="fs-12"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star-half-full text-warning"></i><i class="fa fa-star-o text-warning"></i></td>
															<td><span class="font-weight-semibold">$540</span></td>
															<td class="text-muted">last sale 1 week ago</td>
															<td><span class="badge bg-danger text-white p-2 ms-2">Irregular</span></td>
														</tr>
														<tr>
															<td>4</td>
															<td><img class="avatat avatar-md brround me-2" src="{{asset('assets/images/orders/4.jpg')}}" alt="img">Grocery</td>
															<td class="fs-12"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star-half-full text-warning"></i></td>
															<td><span class="font-weight-semibold">$1543</span></td>
															<td class="text-muted">last sale Today</td>
															<td><span class="badge bg-success text-white p-2 ms-2">Regular</span></td>
														</tr>
														<tr>
															<td>5</td>
															<td><img class="avatat avatar-md brround me-2" src="{{asset('assets/images/orders/5.jpg')}}" alt="img">Mobiles</td>
															<td class="fs-12"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star-half-full text-warning"></i></td>
															<td><span class="font-weight-semibold">$6427</span></td>
															<td class="text-muted">last sale Today</td>
															<td><span class="badge bg-primary text-white p-2 ms-2 mb-0 pb-0">Top Pick</span></td>
														</tr>
														<tr>
															<td>6</td>
															<td><img class="avatat avatar-md brround me-2" src="{{asset('assets/images/orders/6.jpg')}}" alt="img">Watches</td>
															<td class="fs-12"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star-half-full text-warning"></i></td>
															<td><span class="font-weight-semibold">$6343</span></td>
															<td class="text-muted">last sale Today</td>
															<td><span class="badge bg-primary text-white p-2 ms-2 mb-0 pb-0">Top Pick</span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="card">
									<div class="card-body">
										<svg class="card-custom-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#b2b1ff" d="M13,17H9c-2.8,0-5-2.2-5-5V4c0-0.6,0.4-1,1-1c0,0,0,0,0,0h12c0.6,0,1,0.4,1,1c0,0,0,0,0,0v8
											C18,14.8,15.8,17,13,17z"/><path fill="#6563ff" d="M18 7h1c.6 0 1 .4 1 1s-.4 1-1 1h-1v2h1c1.7 0 3-1.3 3-3s-1.3-3-3-3h-1V7zM21 19H3c-.6 0-1 .4-1 1s.4 1 1 1h18c.6 0 1-.4 1-1S21.6 19 21 19z"/></svg>
										<p class=" mb-1 text-muted fs-14">All Orders</p>
										<h2 class="mb-1 font-weight-bold text-primary">3257</h2>
										<span class="mb-1"><span class="text-danger"><i class="fa fa-caret-down  me-1"></i> 43.2</span> than last month</span>
										<div class="progress progress-sm mt-3">
											<div class="progress-bar progress-bar-custom progress-bar-striped progress-bar-animated" style="width: 78%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="card">
									<div class="card-body">
										<svg class="card-custom-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#b2b1ff" d="M22,10H1.99976v9c0,1.65685,1.34315,3,3,3l0,0h14.00048c1.65685,0,3-1.34315,3-3L22,10z M7,8
											C6.44772,8,6,7.55228,6,7V3c0-0.55228,0.44772-1,1-1s1,0.44772,1,1v4C8,7.55228,7.55228,8,7,8z M17,8c-0.55228,0-1-0.44772-1-1V3
											c0-0.55228,0.44772-1,1-1s1,0.44772,1,1v4C18,7.55228,17.55228,8,17,8z"/><path fill="#6563ff" d="M19,4h-1v3c0,0.55228-0.44772,1-1,1s-1-0.44772-1-1V4H8v3c0,0.55228-0.44772,1-1,1S6,7.55228,6,7V4H4.99951
											c-1.65685,0-3,1.34315-3,3v3H22V7C22,5.34315,20.65685,4,19,4z"/></svg>
										<p class=" mb-1 text-muted fs-14">Pending Orders</p>
										<h2 class="mb-1 font-weight-bold text-primary">1658</h2>
										<span class="mb-1"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 19.8</span> than last month</span>
										<div class="progress progress-sm mt-3">
											<div class="progress-bar progress-bar-custom progress-bar-striped progress-bar-animated" style="width: 58%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="card">
									<div class="card-body">
										<svg class="card-custom-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#6563ff" d="M12,2A10.01687,10.01687,0,0,0,5,4.87714V3A1,1,0,0,0,3,3V7.5a.99974.99974,0,0,0,1,1H8.5a1,1,0,0,0,0-2H6.21844A7.99161,7.99161,0,1,1,12,20a1,1,0,0,0,0,2A10,10,0,0,0,12,2Z"/><path fill="#6563ff" d="M14,13H12a.99974.99974,0,0,1-1-1V9a1,1,0,0,1,2,0v2h1a1,1,0,0,1,0,2Z"/><path fill="#b2b1ff" d="M12,4A8.00807,8.00807,0,0,0,6.21844,6.5H8.5a1,1,0,0,1,0,2H4a.98882.98882,0,0,1-.97583-.88013A9.977,9.977,0,0,0,12,22a1,1,0,0,1,0-2A8,8,0,0,0,12,4Zm2,9H12a.99974.99974,0,0,1-1-1V9a1,1,0,0,1,2,0v2h1a1,1,0,0,1,0,2Z"/></svg>
										<p class=" mb-1 fs-14  text-muted">Refund Requests</p>
										<h2 class="mb-1 font-weight-bold text-primary">168</h2>
										<span class="mb-1"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 0.8%</span> than last month</span>
										<div class="progress progress-sm mt-3 bg-primary-transparent">
											<div class="progress-bar progress-bar-custom progress-bar-striped progress-bar-animated" style="width: 58%"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-body text-center bg-primary text-white">
										<img class="avatar avatar-xxl brround mb-5" src="{{asset('assets/images/users/16.jpg')}}" alt="img">
										<h4 class="font-weight-semibold mb-1">John Thomson</h4>
										<p class="fs-12 mb-0">UI/UX Designer</p>
									</div>
									<div class="card-body border-transparent">
										<div class="row mb-2">
											<div class="col-4 fs-12">Previous</div>
											<div class="col-8 font-weight-semibold fs-12">New Tech Software Pvt Ltd</div>
										</div>
										<div class="row mb-2">
											<div class="col-4 fs-12">Opportunity</div>
											<div class="col-8 font-weight-semibold fs-12">Through Facebook</div>
										</div>
										<div class="row">
											<div class="col-4 fs-12">Education</div>
											<div class="col-8 font-weight-semibold fs-12">Bachelors of Engineering</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Interview Schedule</div>
									</div>
									<div class="card-body">
										<h3 class="font-weight-bold">04<sup>th</sup> July, 2021</h3>
										<div class="d-flex mb-5 mt-5">
											<div class="icon icon-shape bg-primary rounded-circle text-white mb-0 me-3">
												<div>04</div>
											</div>
											<div>
												<p class="mb-1">New Modal Technologies<br> <b>Software Pvt ltd</b></p>
												<small class="text-muted">10.04am</small>
											</div>
										</div>
										<div class="d-flex">
											<div class="icon icon-shape bg-secondary rounded-circle text-white mb-0 me-3">
												<div>04</div>
											</div>
											<div>
												<p class="mb-1">New Modal Technologies<br> <b>Software Pvt ltd</b></p>
												<small class="text-muted">12.04pm</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card  mb-3">
									<div class="card-body">
										<div class="media mt-0">
											<figure class="rounded-circle align-self-left mb-0">
												<img src="{{asset('assets/images/users/1.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-md me-3">
											</figure>
											<div class="media-body time-title1 ">
												<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Victoria</h5>
												New york, UK
											</div>
											<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
											<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
										</div>
									</div>
									<div class="card-footer text-secondary border-top">
										Email: <span class="text-primary">victoriacott@Azea.com</span>
									</div>
								</div>
								<div class="card mb-5">
									<div class="card-body">
										<div class="media mt-0">
											<figure class="rounded-circle align-self-left mb-0">
												<img src="{{asset('assets/images/users/16.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-md me-3">
											</figure>
											<div class="media-body time-title1 ">
												<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Thomas Jaim</h5>
												Spain, UN
											</div>
											<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
											<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
										</div>
									</div>
									<div class="card-footer text-secondary border-top">
										Email: <span class="text-primary">thomasjaim@Azea.com</span>
									</div>
								</div>
							</div>
						</div>

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-body text-center list-icons">
										<svg class="svg-icon2  fill-white text-primary icon-dropshadow-primary" x="0" y="240" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false"><path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4v0a2 2 0 100-4v0zm-8 2a2 2 0 11-4 0v0a2 2 0 114 0v0z"></path></svg>
										<p class="card-text mt-3 mb-0">New Orders</p>
										<p class="h2 text-center font-weight-bold">262</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-body text-center list-icons">
										<svg class="svg-icon2 text-success icon-dropshadow-success" xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
										<p class="card-text mt-3 mb-0">Customer Visitis</p>
										<p class="h2 text-center font-weight-bold">2635</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-body text-center list-icons">
										<svg class="svg-icon2 fill-secondary icon-dropshadow-secondary" x="0" y="240" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false"><path opacity=".0" d="M20,8 L12,13 L4,8 L4,18 L20,18 L20,8 Z M20,6 L4,6 L12,10.99 L20,6 Z"></path>
											<path d="M4,20 L20,20 C21.1,20 22,19.1 22,18 L22,6 C22,4.9 21.1,4 20,4 L4,4 C2.9,4 2,4.9 2,6 L2,18 C2,19.1 2.9,20 4,20 Z M20,6 L12,10.99 L4,6 L20,6 Z M4,8 L12,13 L20,8 L20,18 L4,18 L4,8 Z"></path>
										</svg>
										<p class="card-text mt-3 mb-0">Mails</p>
										<p class="h2 text-center font-weight-bold">245</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-3">
								<div class="card bg-primary">
									<div class="card-body">
										<div class="d-flex no-block align-items-center">
											<div>
												<h6 class="text-white">Invoices</h6>
												<h2 class="text-white m-0 font-weight-bold">625</h2>
											</div>
											<div class="ms-auto">
												<span class="text-white display-6"><i class="fa fa-file-text-o fa-2x"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-3">
								<div class="card bg-secondary">
									<div class="card-body">
										<div class="d-flex no-block align-items-center">
											<div>
												<h6 class="text-white">Sales</h6>
												<h2 class="text-white m-0 font-weight-bold">25k</h2>
											</div>
											<div class="ms-auto">
												<span class="text-white display-6"><i class="fa fa-signal fa-2x"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-3">
								<div class="card bg-warning">
									<div class="card-body">
										<div class="d-flex no-block align-items-center">
											<div>
												<h6 class="text-white">Profit</h6>
												<h2 class="text-white m-0 font-weight-bold">62K</h2>
											</div>
											<div class="ms-auto">
												<span class="text-white display-6"><i class="fa fa-usd fa-2x"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-3">
								<div class="card bg-info">
									<div class="card-body">
										<div class="d-flex no-block align-items-center">
											<div>
												<h6 class="text-white">News</h6>
												<h2 class="text-white m-0 font-weight-bold">542</h2>
											</div>
											<div class="ms-auto">
												<span class="text-white display-6"><i class="fa fa-newspaper-o fa-2x"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End  Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-lg-12">
								<div class="demo-gallery card">
									<div class="card-header">
										<div class="card-title">Best Pictures for Today</div>
										<div class="card-options ">
											<a href="javascript:void(0);" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<ul id="lightgallery" class="list-unstyled row">
											<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/1.jpg')}}" data-src="{{asset('assets/images/photos/1.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
												<a href=""  class="d-block link-overlay">
													<img class="img-responsive br-7" src="{{asset('assets/images/photos/1.jpg')}}" alt="Thumb-1">
													<span class="link-overlay-bg rounded">
														<i class="fa fa-search"></i>
													</span>
												</a>

											</li>
											<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/2.jpg')}}" data-src="{{asset('assets/images/photos/2.jpg')}}" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
												<a href=""  class="d-block link-overlay">
													<img class="img-responsive br-7" src="{{asset('assets/images/photos/2.jpg')}}" alt="Thumb-2">
													<span class="link-overlay-bg rounded">
														<i class="fa fa-search"></i>
													</span>
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/3.jpg')}}" data-src="{{asset('assets/images/photos/3.jpg')}}" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href=""  class="d-block link-overlay">
													<img class="img-responsive br-7" src="{{asset('assets/images/photos/3.jpg')}}" alt="Thumb-1">
													<span class="link-overlay-bg rounded">
														<i class="fa fa-search"></i>
													</span>
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/4.jpg')}}" data-src="{{asset('assets/images/photos/4.jpg')}}" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
												<a href=""  class="d-block link-overlay">
													<img class="img-responsive br-7" src="{{asset('assets/images/photos/4.jpg')}}" alt="Thumb-2">
													<span class="link-overlay-bg rounded">
														<i class="fa fa-search"></i>
													</span>
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/5.jpg')}}" data-src="{{asset('assets/images/photos/5.jpg')}}" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
												<a href=""  class="d-block link-overlay">
													<img class="img-responsive br-7" src="{{asset('assets/images/photos/5.jpg')}}" alt="Thumb-1">
													<span class="link-overlay-bg rounded">
														<i class="fa fa-search"></i>
													</span>
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/6.jpg')}}" data-src="{{asset('assets/images/photos/6.jpg')}}" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
												<a href=""  class="d-block link-overlay">
													<img class="img-responsive br-7" src="{{asset('assets/images/photos/6.jpg')}}" alt="Thumb-2">
													<span class="link-overlay-bg rounded">
														<i class="fa fa-search"></i>
													</span>
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/7.jpg')}}" data-src="{{asset('assets/images/photos/7.jpg')}}" data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href=""  class="d-block link-overlay">
													<img class="img-responsive br-7" src="{{asset('assets/images/photos/7.jpg')}}" alt="Thumb-1">
													<span class="link-overlay-bg rounded">
														<i class="fa fa-search"></i>
													</span>
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/8.jpg')}}" data-src="{{asset('assets/images/photos/8.jpg')}}" data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
												<a href=""  class="d-block link-overlay">
													<img class="img-responsive br-7" src="{{asset('assets/images/photos/8.jpg')}}" alt="Thumb-2">
													<span class="link-overlay-bg rounded">
														<i class="fa fa-search"></i>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

							<!--Row-->
							<div class="row">
								<div class="col-lg-4">
									<div class="card">
										<div class="card-body">
											<div class="mb-4 fs-14 font-weight-semibold">
												Actual Revenue Vs Target Revenue
											</div>
											<div class="row">
												<div class="col">
													Target Achivement
												</div>
												<div class="col col-auto">
													<span class="text-success h5">+90%</span>
												</div>
											</div>
											<div class="progress progress-sm mb-3 mt-2">
												<div class="progress-bar bg-primary" style="width: 90%"></div>
											</div>
											<div class="row">
												<div class="col">
													<div class="mt-4">
														<h6 class="mb-1 fs-12">Target Revenue</h6>
														<h4 class="mb-0 font-weight-semibold">$35,425</h4>
													</div>
												</div>
												<div class="col col-auto">
													<div class="mt-4">
														<h6 class="mb-1 fs-12">Actual Revenue</h6>
														<h4 class="mb-0 font-weight-semibold">$28,425</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card">
										<div class="card-body">
											<div class="mb-4 fs-14 font-weight-semibold">
												Actual Customers Vs Target
											</div>
											<div class="row">
												<div class="col">
													Target Achivement
												</div>
												<div class="col col-auto">
													<span class="text-danger h5">-25%</span>
												</div>
											</div>
											<div class="progress progress-sm mb-3 mt-2">
												<div class="progress-bar bg-secondary" style="width: 30%"></div>
											</div>
											<div class="row">
												<div class="col">
													<div class="mt-4">
														<h6 class="mb-1 fs-12">Target Customers</h6>
														<h4 class="mb-0 font-weight-semibold">5,643</h4>
													</div>
												</div>
												<div class="col col-auto">
													<div class="mt-4">
														<h6 class="mb-1 fs-12">Actual Customers</h6>
														<h4 class="mb-0 font-weight-semibold">2,341</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card">
										<div class="card-body">
											<div class="mb-4 fs-14 font-weight-semibold">
												Customer Avg Revenue Vs Target
											</div>
											<div class="row">
												<div class="col">
													Target Achievement
												</div>
												<div class="col col-auto">
													<span class="text-success h5">+95%</span>
												</div>
											</div>
											<div class="progress progress-sm mb-3 mt-2">
												<div class="progress-bar bg-success" style="width: 95%"></div>
											</div>
											<div class="row">
												<div class="col">
													<div class="mt-4">
														<h6 class="mb-1 fs-12">Target Revenue</h6>
														<h4 class="mb-0 font-weight-semibold">$67,234</h4>
													</div>
												</div>
												<div class="col col-auto">
													<div class="mt-4">
														<h6 class="mb-1 fs-12">Actual Revenue</h6>
														<h4 class="mb-0 font-weight-semibold">$32,543</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!--Row-->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="row me-0 ms-0">
											<div class="col-xl-2 col-lg-6 col-sm-6 pe-0 ps-0 border-end">
												<div class="card-body text-center">
													<p class="mb-1">Visits</p>
													<h2 class="mb-1 font-weight-bold">3,56,667</h2>
													<span class="mb-0 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 0.7%</span> Last month</span>
												</div>
											</div>
											<div class="col-xl-2 col-lg-6 col-sm-6 pe-0 ps-0 border-end">
												<div class="card-body text-center">
													<p class="mb-1">Avg visit Duration</p>
													<h2 class="mb-1 font-weight-bold">39Sec</h2>
													<span class="mb-0 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 0.2%</span> Last month</span>
												</div>
											</div>
											<div class="col-xl-2 col-lg-6 col-sm-6 pe-0 ps-0 border-end">
												<div class="card-body text-center">
													<p class="mb-1">Page Views</p>
													<h2 class="mb-1 font-weight-bold">5,987</h2>
													<span class="mb-0 text-muted"><span class="text-danger"><i class="fa fa-caret-down  me-1"></i> 12%</span> Last month</span>
												</div>
											</div>
											<div class="col-xl-2 col-lg-6 col-sm-6 pe-0 ps-0 border-end">
												<div class="card-body text-center">
													<p class="mb-1">Bounce Rate</p>
													<h2 class="mb-1 font-weight-bold">35.8%</h2>
													<span class="mb-0 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 0.2%</span> Last month</span>
												</div>
											</div>
											<div class="col-xl-2 col-lg-6 col-sm-6 pe-0 ps-0 border-end">
												<div class="card-body text-center">
													<p class="mb-1">Pages per Visit</p>
													<h2 class="mb-1 font-weight-bold">2.89</h2>
													<span class="mb-0 text-muted"><span class="text-danger"><i class="fa fa-caret-down  me-1"></i> 1.2%</span> Last month</span>
												</div>
											</div>
											<div class="col-xl-2 col-lg-6 col-sm-6 pe-0 ps-0">
												<div class="card-body text-center">
													<p class="mb-1">Goal Conversion</p>
													<h2 class="mb-1 font-weight-bold">12.7%</h2>
													<span class="mb-0 text-muted"><span class="text-danger"><i class="fa fa-caret-down  me-1"></i> 0.6%</span> Last month</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--End row-->


						<!-- Row -->
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card overflow-hidden">
									<div class="">
										<div class="row">
											<div class="col-12">
												<div class="bg-primary p-4 ">
													<div class="text-center text-white social">
														<i class="fa fa-facebook"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div>
															<h3 class="font-weight-semibold mb-1">56k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ms-auto">
															<h3 class="font-weight-semibold mb-1">17k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card overflow-hidden">
									<div class="">
										<div class="row">
											<div class="col-12">
												<div class="bg-primary p-4 ">
													<div class="text-center text-white social">
														<i class="fa fa-twitter"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div>
															<h3 class="font-weight-semibold mb-1">86k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ms-auto">
															<h3 class="font-weight-semibold mb-1">20k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card overflow-hidden">
									<div class="">
										<div class="row">
											<div class="col-12">
												<div class="bg-primary p-4 ">
													<div class="text-center text-white social">
														<i class="fa fa-linkedin"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div>
															<h3 class="font-weight-semibold mb-1">76k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ms-auto">
															<h3 class="font-weight-semibold mb-1">27k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card overflow-hidden">
									<div class="">
										<div class="row">
											<div class="col-12">
												<div class="bg-primary p-4 ">
													<div class="text-center text-white social">
														<i class="fa fa-instagram"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div>
															<h3 class="font-weight-semibold mb-1">36k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ms-auto">
															<h3 class="font-weight-semibold mb-1">10k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row -->

@endsection('content')

@section('scripts')

		<!-- INTERNAL Gallery js -->
		<script src="{{asset('assets/plugins/gallery/picturefill.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lightgallery.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-pager.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-autoplay.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-fullscreen.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-zoom.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-hash.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-share.js')}}"></script>
        <script src="{{asset('assets/js/gallery.js')}}"></script>

@endsection
