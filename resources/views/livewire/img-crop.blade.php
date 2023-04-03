@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Select2 css -->
		<link href="{{asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />

		<!-- INTERNAL Images-Comparsion css -->
		<link href="{{asset('assets/plugins/img-crop/cropme.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Image Crop</h4>
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
						<div class="row mt-5" id="app">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Image Crop</div>
									</div>
									<div class="card-body p-0">
										<div class="row g-0">
											<div class="col-lg-5 col-xl-6 border-end">
												<div class="ps-7 pb-7 pt-5 pe-5">
													<div id="cropme"></div>
													<!-- Modal -->
													<div aria-hidden="true" class="modal fade" id="cropmeModal" role="dialog" tabindex="-1">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Cropme result</h5><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
																</div>
																<div class="modal-body text-center"><img src="{{asset('assets/images/photos/23.jpg')}}" alt="cropme" id="cropme-result"></div>
															</div>
														</div>
													</div>
													<div aria-hidden="true" class="modal fade" id="cropmePosition" role="dialog" tabindex="-1">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Cropme Position output</h5><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
																</div>
																<div class="modal-body">
																	<pre><code> position</code></pre>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-7 col-xl-6">
												<div class="options px-5 pt-5  border-bottom pb-3">
													<div class="row">
														<div class="col-md-6 mb-4">
															<div class="title font-weight-semibold text-uppercase mb-3">
																Viewport Type
															</div>
															<select class="form-control  select2">
																<option value="square">
																	square (default)
																</option>
																<option value="circle">
																	circle
																</option>
															</select>
														</div>
														<div class="col-md-6 mb-4">
															<div class="title font-weight-semibold text-uppercase mb-3">
																transform origin center
															</div>
															<select class="form-control select2">
																<option value="image">
																	image
																</option>
																<option value="viewport">
																	viewport (default)
																</option>
															</select>
														</div>
													</div>
												</div>
												<div class="options px-5 pt-5  border-bottom pb-3">
													<div class="title font-weight-semibold text-uppercase mb-3">
														Border
													</div>
													<div class="row">
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">enable</label>
															<select class="form-control select2">
																<option>
																	true (default)
																</option>
																<option>
																	false
																</option>
															</select>
														</div>
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">width</label>
															<select class="form-control  select2">
																<option value="2">
																	2 (default)
																</option>
																<option value="5">
																	5
																</option>
																<option value="10">
																	10
																</option>
															</select>
														</div>
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">color</label>
															<select class="form-control  select2">
																<option value="#fff">
																	white (default)
																</option>
																<option value="#f00">
																	red
																</option>
																<option value="#00f">
																	blue
																</option>
															</select>
														</div>
													</div>
												</div>
												<div class="options px-5 pt-5  border-bottom pb-3">
													<div class="title font-weight-semibold text-uppercase mb-3">
														Zoom
													</div>
													<div class="row">
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">enable</label>
															<select class="form-control select2">
																<option>
																	true (default)
																</option>
																<option>
																	false
																</option>
															</select>
														</div>
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">mouseWheel</label>
															<select class="form-control  select2">
																<option>
																	true (default)
																</option>
																<option>
																	false
																</option>
															</select>
														</div>
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">slider</label>
															<select class="form-control  select2">
																<option>
																	true
																</option>
																<option>
																	false (default)
																</option>
															</select>
														</div>
													</div>
												</div>
												<div class="options px-5 pt-5  border-bottom pb-3">
													<div class="title font-weight-semibold text-uppercase mb-3">
														Rotation
													</div>
													<div class="row">
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">enable</label>
															<select class="form-control  select2">
																<option>
																	true (default)
																</option>
																<option>
																	false
																</option>
															</select>
														</div>
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">slider</label>
															<select class="form-control select2">
																<option>
																	true
																</option>
																<option>
																	false (default)
																</option>
															</select>
														</div>
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">Position</label>
															<select class="form-control select2">
																<option value="left">
																	left
																</option>
																<option value="right">
																	right (default)
																</option>
															</select>
														</div>
													</div>
												</div>
												<div class="btn-list p-3">
													<a role="button" class="btn btn-danger" @click="reset">Reset</a>
													<a role="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#cropmeModal"  @click="crop">Crop me</a>
													<a role="button" class="btn btn-primary float-end me-3" data-bs-toggle="modal" data-bs-target="#cropmePosition"  @click="getPosition">Get position</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">

							</div>
						</div>

@endsection('content')

@section('scripts')

		<!-- INTERNAL Select2 js -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

		<!-- INTERNAL Images-Comparsion js -->
		<script src="{{asset('assets/plugins/img-crop/vue.js')}}"></script>
		<script src="{{asset('assets/plugins/img-crop/cropme.js')}}"></script>
		<script src="{{asset('assets/js/img-crop.js')}}"></script>

@endsection
