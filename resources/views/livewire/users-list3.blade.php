@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!--Page header-->
					<div class="page-header">
						<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">User List 3</h4>
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
						<div class="row flex-lg-nowrap">
							<div class="col-12">
								<div class="row flex-lg-nowrap">
									<div class="col-12 mb-3">
										<div class="e-panel card">
											<div class="card-body pb-2">
												<div class="row">
													<div class="col-md-7 ">
														<div class="form-group w-100">
															<div class="input-icon">
																<span class="input-icon-addon">
																	<i class="fe fe-search"></i>
																</span>
																<input type="text" class="form-control" placeholder="Search User">
															</div>
														</div>
													</div>
													<div class="col-md-5 col-auto text-right mb-2">
														<a href="javascript:void(0);" class="btn btn-primary"><i class="fe fe-plus"></i> Add New User</a>
													</div>
												</div>
												<div class="row">
													<div class="col-xl-3 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('assets/images/users/7.jpg')}}" >
																</div>
																<div class="wrapper ms-3">
																	<p class="mb-0 mt-1  font-weight-semibold">Denis Rosenblum</p>
																	<small class="text-muted">Project Manager</small>
																</div>
																<div class="float-end ms-auto">
																	<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> View Profile</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Message</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body border-top">
																<p class="mb-5">Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
																<ul class="mb-0 user-details">
																	<li class="mb-5"><span class=""><i class="fe fe-mail p-2 bg-warning-transparent text-warning border-warning brround me-3"></i></span><span class="h6">collinbridg@gmail.com</span></li>
																	<li><span class=""><i class="fe fe-phone-call p-2 bg-success-transparent text-success border-success brround me-3"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('assets/images/users/6.jpg')}}" >
																</div>
																<div class="wrapper ms-3">
																	<p class="mb-0 mt-1  font-weight-semibold">Harvey Mattos</p>
																	<small class="text-muted">Develpoer</small>
																</div>
																<div class="float-end ms-auto">
																	<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> View Profile</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Message</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body border-top">
																<p class="mb-5">Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
																<ul class="mb-0 user-details">
																	<li class="mb-5"><span class=""><i class="fe fe-mail p-2 bg-warning-transparent text-warning border-warning brround me-3"></i></span><span class="h6">collinbridg@gmail.com</span></li>
																	<li><span class=""><i class="fe fe-phone-call p-2 bg-success-transparent text-success border-success brround me-3"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('assets/images/users/5.jpg')}}" >
																</div>
																<div class="wrapper ms-3">
																	<p class="mb-0 mt-1  font-weight-semibold">Catrice Doshier</p>
																	<small class="text-muted">Assistant Manager</small>
																</div>
																<div class="float-end ms-auto">
																	<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> View Profile</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Message</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body border-top">
																<p class="mb-5">Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
																<ul class="mb-0 user-details">
																	<li class="mb-5"><span class=""><i class="fe fe-mail p-2 bg-warning-transparent text-warning border-warning brround me-3"></i></span><span class="h6">collinbridg@gmail.com</span></li>
																	<li><span class=""><i class="fe fe-phone-call p-2 bg-success-transparent text-success border-success brround me-3"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('assets/images/users/1.jpg')}}" >
																</div>
																<div class="wrapper ms-3">
																	<p class="mb-0 mt-1  font-weight-semibold">Catherina Bamber</p>
																	<small class="text-muted">Company Manager</small>
																</div>
																<div class="float-end ms-auto">
																	<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> View Profile</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Message</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body border-top">
																<p class="mb-5">Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
																<ul class="mb-0 user-details">
																	<li class="mb-5"><span class=""><i class="fe fe-mail p-2 bg-warning-transparent text-warning border-warning brround me-3"></i></span><span class="h6">collinbridg@gmail.com</span></li>
																	<li><span class=""><i class="fe fe-phone-call p-2 bg-success-transparent text-success border-success brround me-3"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('assets/images/users/8.jpg')}}" >
																</div>
																<div class="wrapper ms-3">
																	<p class="mb-0 mt-1  font-weight-semibold">Margie Fitts</p>
																	<small class="text-muted">It Manager</small>
																</div>
																<div class="float-end ms-auto">
																	<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> View Profile</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Message</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body border-top">
																<p class="mb-5">Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
																<ul class="mb-0 user-details">
																	<li class="mb-5"><span class=""><i class="fe fe-mail p-2 bg-warning-transparent text-warning border-warning brround me-3"></i></span><span class="h6">collinbridg@gmail.com</span></li>
																	<li><span class=""><i class="fe fe-phone-call p-2 bg-success-transparent text-success border-success brround me-3"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('assets/images/users/5.jpg')}}" >
																</div>
																<div class="wrapper ms-3">
																	<p class="mb-0 mt-1  font-weight-semibold">Dana Lott</p>
																	<small class="text-muted">Hr Manager</small>
																</div>
																<div class="float-end ms-auto">
																	<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> View Profile</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Message</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body border-top">
																<p class="mb-5">Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
																<ul class="mb-0 user-details">
																	<li class="mb-5"><span class=""><i class="fe fe-mail p-2 bg-warning-transparent text-warning border-warning brround me-3"></i></span><span class="h6">collinbridg@gmail.com</span></li>
																	<li><span class=""><i class="fe fe-phone-call p-2 bg-success-transparent text-success border-success brround me-3"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('assets/images/users/6.jpg')}}" >
																</div>
																<div class="wrapper ms-3">
																	<p class="mb-0 mt-1  font-weight-semibold">Benedict Vallone</p>
																	<small class="text-muted">Hr Recriuter</small>
																</div>
																<div class="float-end ms-auto">
																	<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> View Profile</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Message</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body border-top">
																<p class="mb-5">Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
																<ul class="mb-0 user-details">
																	<li class="mb-5"><span class=""><i class="fe fe-mail p-2 bg-warning-transparent text-warning border-warning brround me-3"></i></span><span class="h6">collinbridg@gmail.com</span></li>
																	<li><span class=""><i class="fe fe-phone-call p-2 bg-success-transparent text-success border-success brround me-3"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('assets/images/users/8.jpg')}}" >
																</div>
																<div class="wrapper ms-3">
																	<p class="mb-0 mt-1  font-weight-semibold">Robbie Ruder</p>
																	<small class="text-muted">Ceo</small>
																</div>
																<div class="float-end ms-auto">
																	<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> View Profile</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Message</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body border-top">
																<p class="mb-5">Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
																<ul class="mb-0 user-details">
																	<li class="mb-5"><span class=""><i class="fe fe-mail p-2 bg-warning-transparent text-warning border-warning brround me-3"></i></span><span class="h6">collinbridg@gmail.com</span></li>
																	<li><span class=""><i class="fe fe-phone-call p-2 bg-success-transparent text-success border-success brround me-3"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('assets/images/users/3.jpg')}}" >
																</div>
																<div class="wrapper ms-3">
																	<p class="mb-0 mt-1  font-weight-semibold">Micaela Aultman</p>
																	<small class="text-muted">Php developer</small>
																</div>
																<div class="float-end ms-auto">
																	<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> View Profile</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Message</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body border-top">
																<p class="mb-5">Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
																<ul class="mb-0 user-details">
																	<li class="mb-5"><span class=""><i class="fe fe-mail p-2 bg-warning-transparent text-warning border-warning brround me-3"></i></span><span class="h6">collinbridg@gmail.com</span></li>
																	<li><span class=""><i class="fe fe-phone-call p-2 bg-success-transparent text-success border-success brround me-3"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('assets/images/users/4.jpg')}}" >
																</div>
																<div class="wrapper ms-3">
																	<p class="mb-0 mt-1  font-weight-semibold">Jacquelynn Sapienza</p>
																	<small class="text-muted">Web developer</small>
																</div>
																<div class="float-end ms-auto">
																	<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> View Profile</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Message</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body border-top">
																<p class="mb-5">Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
																<ul class="mb-0 user-details">
																	<li class="mb-5"><span class=""><i class="fe fe-mail p-2 bg-warning-transparent text-warning border-warning brround me-3"></i></span><span class="h6">collinbridg@gmail.com</span></li>
																	<li><span class=""><i class="fe fe-phone-call p-2 bg-success-transparent text-success border-success brround me-3"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('assets/images/users/9.jpg')}}" >
																</div>
																<div class="wrapper ms-3">
																	<p class="mb-0 mt-1  font-weight-semibold">Elida Distefano</p>
																	<small class="text-muted">Hr Manager</small>
																</div>
																<div class="float-end ms-auto">
																	<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> View Profile</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Message</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body border-top">
																<p class="mb-5">Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
																<ul class="mb-0 user-details">
																	<li class="mb-5"><span class=""><i class="fe fe-mail p-2 bg-warning-transparent text-warning border-warning brround me-3"></i></span><span class="h6">collinbridg@gmail.com</span></li>
																	<li><span class=""><i class="fe fe-phone-call p-2 bg-success-transparent text-success border-success brround me-3"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{asset('assets/images/users/7.jpg')}}" >
																</div>
																<div class="wrapper ms-3">
																	<p class="mb-0 mt-1  font-weight-semibold">Collin Bridgman</p>
																	<small class="text-muted">web designer</small>
																</div>
																<div class="float-end ms-auto">
																	<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> View Profile</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Message</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body border-top">
																<p class="mb-5">Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
																<ul class="mb-0 user-details">
																	<li class="mb-5"><span class=""><i class="fe fe-mail p-2 bg-warning-transparent text-warning border-warning brround me-3"></i></span><span class="h6">collinbridg@gmail.com</span></li>
																	<li><span class=""><i class="fe fe-phone-call p-2 bg-success-transparent text-success border-success brround me-3"></i></span><span class="h6">+345 657 567</span></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
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
