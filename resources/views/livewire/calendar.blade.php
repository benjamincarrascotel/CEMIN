@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Select2 css -->
		<link href="{{asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
		
		<!-- INTERNAL Fullcalendar css-->
		<link href='{{asset('assets/plugins/fullcalendar/fullcalendar.css')}}' rel='stylesheet' />
		<link href='{{asset('assets/plugins/fullcalendar/fullcalendar.print.min.css')}}' rel='stylesheet' media='print' />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Calendar</h4>
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
						<div class="row	">
							<div class="col-lg-3">
								<div class="card">
									<div class="card-body p-0">
										<div class="card-body">
											<div class="mb-5 d-grid">
												<a class="btn btn-primary w-100 fs-15" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalSetSchedule">Add New Event</a>
											</div>
											<nav class="nav main-nav-column main-nav-calendar-event mb-2" id="external-events-list">
												<a class="nav-link d-flex mb-2 p-2 br-3 bg-primary-transparent fc-event" data-class="bg-primary-transparent" href="">
													<span class="p-1 bg-primary ms-2 me-3 br-3"></span>
													<div>calendar Events</div>
												</a>
												<a class="nav-link d-flex mb-2 p-2 bg-success-transparent br-3 fc-event" data-class="bg-success-transparent"  href="">
													<span class="p-1 bg-success ms-2 me-3 br-3"></span>
													<div>Birthday Events</div>
												</a>
												<a class="nav-link d-flex mb-2 p-2 bg-info-transparent br-3 fc-event" data-class="bg-info-transparent" href="">
													<span class="p-1 bg-info ms-2 me-3 br-3"></span>
													<div>Holiday calendar</div>
												</a>
												<a class="nav-link d-flex mb-2 p-2 bg-danger-transparent br-3 fc-event" data-class="bg-danger-transparent" href="">
													<span class="p-1 bg-danger ms-2 me-3 br-3"></span>
													<div>Office Events</div>
												</a>
												<a class="nav-link d-flex mb-2 p-2 bg-warning-transparent br-3 fc-event" data-class="bg-warning-transparent" href="">
													<span class="p-1 bg-warning ms-2 me-3 br-3"></span>
													<div>Other Events</div>
												</a>
												<a class="nav-link d-flex mb-2 p-2 bg-teal-transparent br-3 fc-event" data-class="bg-teal-transparent" href="">
													<span class="p-1 bg-teal ms-2 me-3 br-3"></span>
													<div>Festival Events</div>
												</a>
												<a class="nav-link d-flex p-2 bg-dark-transparent br-3 fc-event" data-class="bg-dark-transparent" href="">
													<span class="p-1 bg-dark ms-2 me-3 br-3"></span>
													<div>Timeline Events</div>
												</a>
											</nav>
											<div class="calendar-image">
												<img src="{{asset('assets/images/png/calendar.png')}}" alt="img">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-9">
								<div class="card">
									<div class="card-body">
										<div class="" id="calendar"></div>
									</div>
								</div>
							</div>
						</div>

@endsection('content')

@section('scripts')

		<!-- INTERNAL Select2 js -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>
		
		<!-- INTERNAL Full-calendar js-->
		<script src='{{asset('assets/plugins/fullcalendar/moment.min.js')}}'></script>
		<script src='{{asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}'></script>
		<script src="{{asset('assets/js/app-calendar-events.js')}}"></script>
		<script src="{{asset('assets/js/app-calendar.js')}}"></script>

@endsection