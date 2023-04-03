@extends('layouts.app')

@section('styles')

    <!-- INTERNAL Prism Css -->
	<link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Colors</h4>
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
							<div class="col-lg-12">
								<!--div-->
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Gray Set
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex flex-wrap ht-80">
											<div class="w-9 bg-gray-900 h-9"></div>
											<div class="w-9 bg-gray-800 h-9"></div>
											<div class="w-9 bg-gray-700 h-9"></div>
											<div class="w-9 bg-gray-600 h-9"></div>
											<div class="w-9 bg-gray-500 h-9"></div>
											<div class="w-9 bg-gray-400 h-9"></div>
											<div class="w-9 bg-gray-300 h-9"></div>
											<div class="w-9 bg-gray-200 h-9"></div>
											<div class="w-9 bg-gray-100 h-9"></div>
										</div>
										<div class="table-responsive mt-5 mb-0">
											<table class="table table-bordered text-nowrap mb-0">
												<tbody>
													<tr>
														<td class="wd-20p"><b>Classes</b></td>
														<td><code>class="bg-gray-[value]"</code></td>
													</tr>
													<tr>
														<td class="wd-20p"><b>Values</b></td>
														<td>900 | 800 | 700 | 600 | 500 | 400 | 300 | 200 | 100</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Solid Background Set
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex flex-wrap ht-80">
											<div class="w-9 bg-primary h-9"></div>
											<div class="w-9 bg-secondary h-9"></div>
											<div class="w-9 bg-success h-9"></div>
											<div class="w-9 bg-warning h-9"></div>
											<div class="w-9 bg-danger h-9"></div>
											<div class="w-9 bg-info h-9"></div>
											<div class="w-9 bg-indigo h-9"></div>
											<div class="w-9 bg-purple h-9"></div>
											<div class="w-9 bg-pink h-9"></div>
											<div class="w-9 bg-teal h-9"></div>
											<div class="w-9 bg-orange h-9"></div>
										</div>
										<div class="table-responsive mt-5 mb-0">
											<table class="table table-bordered text-nowrap mb-0">
												<tbody>
													<tr>
														<td class="wd-20p"><b>Classes</b></td>
														<td><code>class="bg-[value]"</code></td>
													</tr>
													<tr>
														<td class="wd-20p"><b>Values</b></td>
														<td>primary | secondary | success | warning | danger | info | indigo | purple | pink | teal | orange</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Transparent White Set
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex flex-wrap ht-80">
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-white-1"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-white-2"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-white-3"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-white-4"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-white-5"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-white-6"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-white-7"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-white-8"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-white-9"></div>
											</div>
										</div>
										<div class="table-responsive mt-5 mb-0">
											<table class="table table-bordered text-nowrap mb-0">
												<tbody>
													<tr>
														<td class="wd-20p"><b>Classes</b></td>
														<td><code>class="bg-white-[value]"</code></td>
													</tr>
													<tr>
														<td class="wd-20p"><b>Values</b></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Transparent Black Set
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex flex-wrap ht-80">
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-black-1"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-black-2"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-black-3"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-black-4"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-black-5"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-black-6"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-black-7"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-black-8"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/28.jpg')}}">
												<div class="pos-absolute a-0 bg-black-9"></div>
											</div>
										</div>
										<div class="table-responsive mt-5 mb-0">
											<table class="table table-bordered text-nowrap mb-0">
												<tbody>
													<tr>
														<td class="wd-20p"><b>Classes</b></td>
														<td><code>class="bg-black-[value]"</code></td>
													</tr>
													<tr>
														<td class="wd-20p"><b>Values</b></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->
							</div>
						</div>

@endsection('content')

@section('scripts')

@endsection