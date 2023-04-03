@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Prism Css -->
		<link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Avatars</h4>
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
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Simple Square Avatar</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Simple Round Avatar</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Simple Radius Avatar</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Avatar Size</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar avatar-sm" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
											<span class="avatar avatar-md" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
											<span class="avatar avatar-lg" style="background-image: url({{asset('assets/images/users/6.jpg')}})"></span>
											<span class="avatar avatar-xl" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
											<span class="avatar avatar-xxl" style="background-image: url({{asset('assets/images/users/7.jpg')}})"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Rounded Avatar Size</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Radius Avatar Size</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar avatar-sm bradius" style="background-image: url({{asset('assets/images/users/15.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/13.jpg')}})"></span>
											<span class="avatar avatar-md bradius" style="background-image: url({{asset('assets/images/users/16.jpg')}})"></span>
											<span class="avatar avatar-lg bradius" style="background-image: url({{asset('assets/images/users/7.jpg')}})"></span>
											<span class="avatar avatar-xl bradius" style="background-image: url({{asset('assets/images/users/14.jpg')}})"></span>
											<span class="avatar avatar-xxl bradius" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Avatar Status</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{asset('assets/images/users/5.jpg')}})">
												<span class="avatar-status"></span>
											</span>
											<span class="avatar" style="background-image: url({{asset('assets/images/users/9.jpg')}})">
												<span class="avatar-status bg-red"></span>
											</span>
											<span class="avatar" style="background-image: url({{asset('assets/images/users/6.jpg')}})">
												<span class="avatar-status bg-green"></span>
											</span>
											<span class="avatar" style="background-image: url({{asset('assets/images/users/7.jpg')}})">
												<span class="avatar-status bg-yellow"></span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Rounded Avatar Status</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/15.jpg')}})">
												<span class="avatar-status"></span>
											</span>
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/2.jpg')}})">
												<span class="avatar-status bg-red"></span>
											</span>
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/16.jpg')}})">
												<span class="avatar-status bg-green"></span>
											</span>
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/7.jpg')}})">
												<span class="avatar-status bg-yellow"></span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Radius Avatar Status</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/15.jpg')}})">
												<span class="avatar-status"></span>
											</span>
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/2.jpg')}})">
												<span class="avatar-status bg-red"></span>
											</span>
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/16.jpg')}})">
												<span class="avatar-status bg-green"></span>
											</span>
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/7.jpg')}})">
												<span class="avatar-status bg-yellow"></span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Avatars List</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list avatar-list-stacked">
											<span class="avatar" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
											<span class="avatar">+8</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Rounded Avatars List</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list avatar-list-stacked">
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
											<span class="avatar brround">+8</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Radius Avatars List</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list avatar-list-stacked">
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/2.jpg)')}}"></span>
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
											<span class="avatar bradius">+8</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

@endsection('content')

@section('scripts')

		<!-- INTERNAL Clipboard js -->
		<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

@endsection