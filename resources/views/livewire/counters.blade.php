@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Counters</h4>
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Day Counter</h3>
									</div>
									<div class="card-body text-center">
										<div class="under-countdown row">
											<div class="col-lg-3 mb-2">
												<div class="countdown bg-primary-transparent">
													<span class="days">35</span>
													<span class="">Days</span>
												</div>
											</div>
											<div class="col-lg-3 mb-2">
												<div class="countdown bg-success-transparent">
													<span class="hours">17</span>
													<span class="">Hours</span>
												</div>
											</div>
											<div class="col-lg-3 mb-2">
												<div class="countdown bg-danger-transparent">
													<span class="minutes">50</span>
													<span class="">Minutes</span>
												</div>
											</div>
											<div class="col-lg-3 mb-2">
												<div class="countdown bg-warning-transparent">
													<span class="seconds">39</span>
													<span class="">Seconds</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Time Counting days Limit</h3>
									</div>
									<div class="card-body text-center">
										<div class="bg-info-transparent p-3 br-3 text-center">
											<span id="timer-outputpattern" class="h3 mb-0 font-weight-bold"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Numbers counter</h3>
									</div>
									<div class="card-body text-center">
										<span class="avatar avatar-xl brround bg-primary-transparent border-primary text-primary"><i class="las la-users"></i></span>
										<h5 class="mt-4 text-muted">Employess</h5>
										<h2 class="counter text-primary">2569</h2>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Numbers counter</h3>
									</div>
									<div class="card-body text-center">
										<span class="avatar avatar-xl brround bg-success-transparent border-success text-success"><i class="las la-briefcase"></i></span>
										<h5 class="mt-4 text-muted">Profit</h5>
										<h2 class="counter text-success"> 2,56989.32</h2>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Numbers counter</h3>
									</div>
									<div class="card-body text-center">
										<span class="avatar avatar-xl brround bg-danger-transparent border-danger text-danger"><i class="las la-trash"></i></span>
										<h5 class="mt-4 text-muted">Errors</h5>
										<h2 class="counter text-danger">0.8998</h2>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<a href="javascript:void(0);"><img class="card-img-top  " src="{{asset('assets/images/photos/8.jpg')}}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4 class="font-weight-bold"><a href="javascript:void(0);">Time Counting From 0</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<div class="bg-primary-transparent text-primary border-primary p-3 br-3 mt-4 text-center">
											<span id="timer-countup" class="h4  mb-0 font-weight-bold"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<a href="javascript:void(0);"><img class="card-img-top " src="{{asset('assets/images/photos/9.jpg')}}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4 class="font-weight-bold"><a href="javascript:void(0);">Time Counting From 60 to 20</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<div class="bg-warning-transparent text-warning border-warning p-3 br-3 mt-4 text-center">
											<span id="timer-countinbetween" class="h4  mb-0 font-weight-bold"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<a href="javascript:void(0);"><img class="card-img-top " src="{{asset('assets/images/photos/10.jpg')}}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4 class="font-weight-bold"><a href="javascript:void(0);">Time 1 minute counter</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<div class="bg-danger-transparent text-danger border-danger p-3 br-3 mt-4 text-center">
											<span id="timer-countercallback" class="h4  mb-0 font-weight-bold"></span>
										</div>
									</div>
								</div>
							</div>
						</div>

@endsection('content')

@section('scripts')

		<!--INTERNAl Time Counter -->
		<script src="{{asset('assets/plugins/counters/jquery.missofis-countdown.js')}}"></script>
		<script src="{{asset('assets/plugins/counters/counter.js')}}"></script>

		<!--INTERNAl Counters -->
		<script src="{{asset('assets/plugins/counters/counterup.min.js')}}"></script>
		<script src="{{asset('assets/plugins/counters/waypoints.min.js')}}"></script>
		<script src="{{asset('assets/plugins/countdown/moment.min.js')}}"></script>
		<script src="{{asset('assets/plugins/countdown/moment-timezone.min.js')}}"></script>
		<script src="{{asset('assets/plugins/countdown/moment-timezone-with-data.min.js')}}"></script>
		<script src="{{asset('assets/plugins/countdown/countdowntime.js')}}"></script>
		<script src="{{asset('assets/js/counterup.js')}}"></script>

@endsection