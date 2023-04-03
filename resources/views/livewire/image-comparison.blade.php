@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Images-Comparsion css -->
		<link href="{{asset('assets/plugins/images-comparsion/twentytwenty.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Image Comparision</h4>
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
							<div class="col-lg-12 col-md-12">
								<!-- div -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Image Comparison</div>
									</div>
									<div class="card-body">
										<div class="twentytwenty-container">
											<img src="{{asset('assets/images/photos/about.jpg')}}" alt="img" />
											<img src="{{asset('assets/images/photos/about2.jpg')}}" alt="img" />
										</div>
									</div>
								</div>
							</div>
						</div>

@endsection('content')

@section('scripts')

		<!-- INTERNAL Images-Comparsion js -->
		<script src="{{asset('assets/plugins/images-comparsion/jquery.twentytwenty.js')}}"></script>
		<script src="{{asset('assets/plugins/images-comparsion/jquery.event.move.js')}}"></script>
		<script src="{{asset('assets/js/image-comparision.js')}}"></script>

@endsection
