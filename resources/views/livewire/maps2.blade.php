@extends('layouts.app')

@section('styles')

		<!-- INTERNAL leaflet Css-->
		<link href="{{asset('assets/plugins/leaflet/leaflet.css')}}" rel="stylesheet">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Maps 2</h4>
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
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card mg-b-20" id="map">
									<div class="card-header">
										<div class="card-title">Basic</div>
									</div>
									<div class="card-body">
										<div class="ht-300" id="leaflet1" style="height:300px"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card mg-b-20" id="map2">
									<div class="card-header">
										<div class="card-title">With Popup</div>
									</div>
									<div class="card-body">
										<div class="ht-300" id="leaflet2" style="height:300px"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card" id="map1">
									<div class="card-header">
										<div class="card-title">Map With Circle</div>
									</div>
									<div class="card-body">
										<div class="ht-200 ht-sm-300 ht-md-400" id="leaflet3" style="height:300px"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->


@endsection('content')

@section('scripts')

		<!-- INTERNAL leaflet js -->
		<script src="{{asset('assets/plugins/leaflet/leaflet.js')}}"></script>
		<script src="{{asset('assets/js/map-leafleft.js')}}"></script>

@endsection
