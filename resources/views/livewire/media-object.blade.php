@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Prism Css -->
		<link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Media Object</h4>
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
								<div class="card" id="media">
									<div class="card-header">
										<div class="card-title">
											Basic Example
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<div class="media d-block d-sm-flex">
												<img alt="" class="avatar avatar-xl brround me-3" src="{{asset('assets/images/users/4.jpg')}}">
												<div class="media-body pt-2 pt-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="media1">
									<div class="card-header">
										<div class="card-title">
											Nesting
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<div class="media d-block d-sm-flex">
												<img alt="" class="avatar avatar-xl brround me-3" src="{{asset('assets/images/users/9.jpg')}}">
												<div class="media-body pt-2 pt-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													<p>Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													<div class="media d-block d-sm-flex mg-t-25">
														<img alt="" class="avatar avatar-xl brround me-3" src="{{asset('assets/images/users/8.jpg')}}">
														<div class="media-body">
															<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
															Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="media2">
									<div class="card-header">
										<div class="card-title">
											Alignment
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<div class="media d-block d-sm-flex">
												<img alt="" class="avatar avatar-xl brround me-3 align-self-center" src="{{asset('assets/images/users/11.jpg')}}">
												<div class="media-body pt-2 pt-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="media3">
									<div class="card-header">
										<div class="card-title">
											Order
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<div class="media d-block d-sm-flex">
												<div class="media-body pt-2 mb-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
												<img alt="" class="avatar avatar-xl brround ms-3" src="{{asset('assets/images/users/12.jpg')}}">
											</div>
										</div>
									</div>
								</div>
								<!--/div-->

								<!--div-->
								<div class="card" id="media4">
									<div class="card-header">
										<div class="card-title">
											Media List
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<ul class="list-unstyled mb-0">
												<li class="media d-block d-sm-flex border-0">
													<img alt="" class="avatar avatar-xl brround me-3" src="{{asset('assets/images/users/2.jpg')}}">
													<div class="media-body pt-2 pt-sm-0">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
												<li class="media d-block d-sm-flex mt-5 border-0">
													<img alt="" class="avatar avatar-xl brround me-3" src="{{asset('assets/images/users/12.jpg')}}">
													<div class="media-body pt-2 pt-sm-0">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
												<li class="media d-block d-sm-flex mt-5 border-0">
													<img alt="" class="avatar avatar-xl brround me-3" src="{{asset('assets/images/users/2.jpg')}}">
													<div class="media-body pt-2 pt-sm-0">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!--/div-->
							</div>
						</div>
						<!-- End Row -->

@endsection('content')

@section('scripts')

		<!-- INTERNAL Clipboard js -->
		<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

@endsection
