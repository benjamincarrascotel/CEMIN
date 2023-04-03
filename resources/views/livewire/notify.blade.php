@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Notifications  Css -->
		<link href="{{asset('assets/plugins/notify/css/jquery.growl.css')}}" rel="stylesheet" />
		<link href="{{asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Notify</h4>
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
										<h3 class="card-title">Alerts Styles Notifications</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button onclick="not1()" class="btn btn-success">Default</button>
											<button onclick="not2()" class="btn btn-secondary">Center</button>
											<button onclick="not3()" class="btn btn-warning">Left</button>
											<button onclick="not4()" class="btn btn-info">Center Info</button>
											<button onclick="not5()" class="btn btn-danger">Center Error</button>
											<button onclick="not6()" class="btn btn-warning">Center Warning</button>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Side Alerts Notifications</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<a href="javascript:void(0);" class="btn btn-success notice">Primary</a>
											<a href="javascript:void(0);" class="btn btn-warning warning">Warning</a>
											<a href="javascript:void(0);" class="btn btn-danger error">Danger</a>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts Popovers</h3>
									</div>
									<div class="card-body text-center">
										<button class="btn btn-success me-2 mb-2" data-bs-container="body"  data-bs-popover-color="default4" data-bs-placement="bottom" title="alert sucess" data-bs-content="Well done! You successfully read this important alert message..">
											Show success
										</button>
										<button class="btn btn-info me-2 mb-2" data-bs-container="body"  data-bs-popover-color="default5" data-bs-placement="top" title="alert info" data-bs-content="Heads up! This alert needs your attention, but it's not super important...">
											Show info
										</button>
										<button class="btn btn-warning me-2 mb-2" data-bs-container="body"  data-bs-popover-color="default6" data-bs-placement="bottom" title="alert warning" data-bs-content="Warning! Best check yo self, you're not looking too good..">
											Show warning
										</button>
										<button class="btn btn-secondary me-2 mb-2" data-bs-container="body"  data-bs-popover-color="default7" data-bs-placement="top" title="alert secondary" data-bs-content="Error! Please Check u r emial id..">
											Show secondary
										</button>
										<button class="btn btn-danger me-2 mb-2" data-bs-container="body"  data-bs-popover-color="default8" data-bs-placement="bottom" title="alert danger" data-bs-content="Oh snap! Change a few things up and try submitting again.">
											Show danger
										</button>
										<button class="btn btn-primary me-2 mb-2" data-bs-container="body"   data-bs-popover-color="default9" data-bs-placement="top" title="alert primary" data-bs-content="Cool! This alert will close in 3 seconds. The data-delay attribute is in milliseconds.">
											Show primary
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection('content')

@section('scripts')

		<!-- NOTIFICATIONS js-->
		<script src="{{asset('assets/js/notifications.js')}}"></script>

		<!-- INTERNAL Notifications js -->
		<script src="{{asset('assets/plugins/notify/js/rainbow.js')}}"></script>
		<script src="{{asset('assets/plugins/notify/js/sample.js')}}"></script>
		<script src="{{asset('assets/plugins/notify/js/jquery.growl.js')}}"></script>
		<script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>

@endsection
