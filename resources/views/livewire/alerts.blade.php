@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Prism Css -->
		<link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Alerts</h4>
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
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default alerts</h3>
									</div>
									<div class="card-body">
										<div class="alert alert-success" role="alert"><button type="button" class="btn-close mr-negative-16" data-bs-dismiss="alert" aria-hidden="true">×</button>Success alert—At vero eos et accusamus praesentium!</div>
										<div class="alert alert-info" role="alert"><button type="button" class="btn-close mr-negative-16" data-bs-dismiss="alert" aria-hidden="true">×</button>Info alert—At vero eos et accusamus praesentium!</div>
										<div class="alert alert-warning" role="alert"><button type="button" class="btn-close mr-negative-16" data-bs-dismiss="alert" aria-hidden="true">×</button>Warning alert—At vero eos et accusamus praesentium!</div>
										<div class="alert alert-danger" role="alert"><button type="button" class="btn-close mr-negative-16" data-bs-dismiss="alert" aria-hidden="true">×</button>Danger alert—At vero eos et accusamus praesentium!</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Links in alerts</h3>
									</div>
									<div class="card-body">
										<div class="alert alert-light-success" role="alert"><button type="button" class="btn-close text-success mr-negative-16" data-bs-dismiss="alert" aria-hidden="true">×</button><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a></div>
										<div class="alert alert-light-info" role="alert"><button type="button" class="btn-close text-info mr-negative-16" data-bs-dismiss="alert" aria-hidden="true">×</button><strong>Heads up!</strong> This<a href="javascript:void(0);" class="alert-link"> alert needs your attention,</a> but it's not super important.</div>
										<div class="alert alert-light-warning" role="alert"><button type="button" class="btn-close text-warning mr-negative-16" data-bs-dismiss="alert" aria-hidden="true">×</button><strong>Warning! </strong> Better check yourself, you're <a href="javascript:void(0);" class="alert-link">not looking too good.</a></div>
										<div class="alert alert-light-danger" role="alert"><button type="button" class="btn-close text-danger mr-negative-16" data-bs-dismiss="alert" aria-hidden="true">×</button><strong>Oh snap!</strong> <a href="javascript:void(0);" class="alert-link">Change a few things up </a>and try submitting again.</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Transparent Alerts</h3>
									</div>
									<div class="card-body">
										<div class="alert alert-light-primary" role="alert">
										  This is a primary alert—check it out!
										</div>
										<div class="alert alert-light-secondary" role="alert">
										  This is a secondary alert—check it out!
										</div>
										<div class="alert alert-light-success" role="alert">
										  This is a success alert—check it out!
										</div>
										<div class="alert alert-light-danger" role="alert">
										  This is a danger alert—check it out!
										</div>
										<div class="alert alert-light-warning" role="alert">
										  This is a warning alert—check it out!
										</div>
										<div class="alert alert-light-info" role="alert">
										  This is a info alert—check it out!
										</div>
										<div class="alert alert-light" role="alert">
										  This is a light alert—check it out!
										</div>
										<div class="alert alert-dark" role="alert">
										  This is a dark alert—check it out!
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Link Alerts</h3>
									</div>
									<div class="card-body">
										<div class="alert alert-light-primary" role="alert">
										  This is a primary alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-light-secondary" role="alert">
										  This is a secondary alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-light-success" role="alert">
										  This is a success alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-light-danger" role="alert">
										  This is a danger alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-light-warning" role="alert">
										  This is a warning alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-light-info" role="alert">
										  This is a info alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-light" role="alert">
										  This is a light alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-dark" role="alert">
										  This is a dark alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
									</div>
								</div>
							</div>

							<!-- Row -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Tabs Alerts</h3>
										</div>
										<div class="card-body">
											<ul class="nav nav-pills nav-with-alerts">
												<li class="col-lg-3">
													<a href="#info" data-bs-toggle="tab">
														<div class="alert alert-info">
															Informations
														</div>
													</a>
												</li>
												<li class="col-lg-3">
													<a href="#success" data-bs-toggle="tab">
														<div class="alert alert-success">
															Successes
														</div>
													</a>
												</li>
												<li class="col-lg-3">
													<a href="#warning" data-bs-toggle="tab">
														<div class="alert alert-warning">
															Warnings
														</div>
													</a>
												</li>
												<li class="col-lg-3">
													<a href="#error" data-bs-toggle="tab">
														<div class="alert alert-danger">
															Errors
														</div>
													</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade" id="info">
													<div class="alert alert-info">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula nec arcu at faucibus. Duis justo urna, adipiscing quis turpis non, dictum hrightrerit ipsum. Fusce non viverra erat. Curabitur sit amet ante dui. Donec congue molestie mi a varius. Susprightisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam ornare quam eu ultricies bibrightum. Cras ante augue, pharetra eget ultricies eu, aliquam eu velit. Phasellus mattis vitae justo pretium tempus. Duis vitae felis et sem tristique suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
													</div>
												</div>
												<div class="tab-pane fade" id="success">
													<div class="alert alert-success">
														<p>Nulla magna sapien, ullamcorper nec dolor id, gravida venenatis velit. Aliquam et malesuada metus. Sed vitae turpis pharetra nunc dignissim ultricies et sit amet lacus. Cras gravida felis mauris, a pellentesque augue interdum ac. In varius facilisis ante, nec viverra libero commodo ac. Maecenas tempus, elit nec aliquet fermentum, tellus odio auctor sapien, eu scelerisque purus turpis quis eros. Morbi id ante diam. Phasellus aliquet purus id odio mollis dignissim. Proin sagittis, risus a ullamcorper dapibus, velit enim adipiscing nulla, vel facilisis ipsum dui quis diam. Aliquam ullamcorper accumsan felis id consequat. Nullam vehicula ut mi eget porta.</p>
													</div>
												</div>
												<div class="tab-pane fade" id="warning">
													<div class="alert alert-warning">
														<p>Curabitur varius euismod nisi ac lacinia. Curabitur nec urna adipiscing, fermentum augue id, commodo nisl. Quisque ut convallis est. Susprightisse tellus nisi, tempus eu nulla quis, laoreet imperdiet ante. Vivamus in lorem purus. Integer luctus elit et metus condimentum porta. Susprightisse viverra sit amet mauris vel elementum. Fusce lorem arcu, accumsan non odio vel, vestibulum pharetra odio. Sed non mollis mi, ac lacinia nunc. Cras eleifright massa velit, tincidunt tempor arcu sodales at. Nam sit amet erat enim. Mauris placerat suscipit odio, vitae gravida purus bibrightum sed. Susprightisse a nunc quis libero rutrum mattis at ac metus. In ac risus eleifright, vestibulum mi eget, dapibus nulla. Nunc diam eros, convallis a sagittis non, rhoncus non nunc. Maecenas in eleifright quam.</p>
													</div>
												</div>
												<div class="tab-pane fade" id="error">
													<div class="alert alert-danger">
														<p>Sed quis dapibus nunc. Proin vestibulum libero elit, gravida tincidunt mauris tincidunt blandit. Donec non ultrices neque, nec sollicitudin elit. Curabitur volutpat nulla vel mauris vestibulum, tempor ultrices quam ullamcorper. Fusce ultricies elementum pretium. In vel consectetur leo, nec rutrum velit. Fusce fermentum pulvinar nibh. Ut posuere ante sed luctus egestas. Aenean ut suscipit tortor.</p>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Alerts Popovers</h3>
										</div>
										<div class="card-body text-center">
											<button type="button" class="btn btn-success mt-1 mb-1" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="default11" data-bs-toggle="popover" title="Popover-top">
												Click success
											</button>
											<button type="button" class="btn btn-info mt-1 mb-1" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="default22" data-bs-placement="bottom" title="alert-info" data-bs-content="Heads up! This alert needs your attention, but it's not super important...">
												Show info
											</button>
											<button type="button" class="btn btn-warning mt-1 mb-1" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="default33" data-bs-placement="top" title="alert-warning" data-bs-content="Warning! Best check yo self, you're not looking too good..">
												Show warning
											</button>
											<button type="button" class="btn btn-secondary mt-1 mb-1" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="default44" data-bs-placement="bottom" title="alert-secondary" data-bs-content="Error! Please Check u r emial id..">
												Show secondary
											</button>
											<button type="button" class="btn btn-danger mt-1 mb-1" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="default55" data-bs-placement="top" title="alert-danger" data-bs-content="Oh snap! Change a few things up and try submitting again.">
												Show danger
											</button>
											<button type="button" class="btn btn-primary mt-1 mb-1" data-bs-container="body"  data-bs-toggle="popover" data-bs-popover-color="default66" data-bs-placement="bottom" title="alert-primary" data-bs-content="Cool! This alert will close in 3 seconds. The data-bs-delay attribute is in milliseconds.">
												Show primary
											</button>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Alerts style</h3>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-sm-6 col-md-6">
													<div class="alert alert-success">
														<button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
														 <strong>Success Message</strong>
														<hr class="message-inner-separator">
														<p>You successfully read this important alert message.</p>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="alert alert-info">
														<button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
														<strong>Info Message</strong>
														<hr class="message-inner-separator">
														<p>This alert needs your attention, but it's not super important.</p>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="alert alert-warning">
														<button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
														<strong>Warning Message</strong>
														<hr class="message-inner-separator">
														<p>Best check yo self, you're not looking too good.</p>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="alert alert-danger">
														<button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
														<strong>Danger Message</strong>
														<hr class="message-inner-separator">
														<p>Change a few things up and try submitting again.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Alert with icon</h3>
										</div>
										<div class="card-body">
											<div class="alert alert-success" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
											<i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.</div>
											<div class="alert alert-info" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-bell-o me-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.</div>
											<div class="alert alert-warning" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-exclamation me-2" aria-hidden="true"></i> Warning! Better check yourself, you're not looking too good.</div>
											<div class="alert alert-danger" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-frown-o me-2" aria-hidden="true"></i>Oh snap!Change a few things up and try submitting again.</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->
						</div>
						<!-- End Row -->

@endsection('content')

@section('scripts')

		<!-- INTERNAL Clipboard js -->
		<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{asset('assets/plugins/prism/prism.js')}}"></script>
		
		<!-- Alerts js-->
		<script src="{{asset('assets/js/alerts.js')}}"></script>

@endsection