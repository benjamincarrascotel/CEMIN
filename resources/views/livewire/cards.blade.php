@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Cards</h4>
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

						<!-- Row-->
						<div class="row">
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">fullscreen button</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-fullscreen me-2" data-bs-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with switch</h3>
										<div class="card-options">
											<label class="custom-switch m-0">
												<input type="checkbox" value="1" class="custom-switch-input" checked>
												<span class="custom-switch-indicator"></span>
											</label>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card card-collapsed  overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Initial collapsed card</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Built card</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card overflow-hidden">
									<div class="card-status bg-blue"></div>
									<div class="card-header">
										<h3 class="card-title">Card blue</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card overflow-hidden">
									<div class="card-status card-status-left bg-red br-bl-7 br-tl-7"></div>
									<div class="card-header">
										<h3 class="card-title">Card status on left side</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>

						</div>

						<!-- Row-->
						<div class="row">
							<div class="col-md-12 col-lg-4">
								<div class="card">
								<div class="card-header">
									<h3 class="card-title">Special title treatment</h3>
								</div>
									<div class="card-body">
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="javascript:void(0);">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card text-center">
									<div class="card-header">
										<h3 class="card-title">Special title treatment</h3>
									</div>
									<div class="card-body">
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="javascript:void(0);">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card text-end">
									<div class="card-header">
										<h3 class="card-title">Special title treatment</h3>
									</div>
									<div class="card-body">
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="javascript:void(0);">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-body">
										This is some text within a card body.
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card title</h3>
									</div>
									<div class="card-body">
										<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a class="card-link" href="javascript:void(0);">Card link</a> <a class="card-link" href="javascript:void(0);">Another link</a>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<ul class="list-group m-2">
											<li class="list-group-item">Cras justo odio</li>
											<li class="list-group-item">Dapibus ac facilisis in</li>
											<li class="list-group-item">Vestibulum at eros</li>
											<li class="list-group-item">Dapibus ac facilisis in</li>
											<li class="list-group-item">Vestibulum at eros</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Card title</h3>
									</div>
									<img alt="image" class="image10" src="{{asset('assets/images/photos/10.jpg')}}">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<ul class="list-group m-2">
										<li class="list-group-item">Cras justo odio</li>
										<li class="list-group-item">Dapibus ac facilisis in</li>
									</ul>
									<div class="card-body">
										<a class="card-link" href="javascript:void(0);">Card link</a> <a class="card-link" href="javascript:void(0);">Another link</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">
											Featured
										</h3>
									</div>
									<div class="card-body">
										<h3 class="card-title">Special title treatment</h3>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="javascript:void(0);">Go somewhere</a>
									</div>
								</div>
								<div class="card text-center">
									<div class="card-header">
										<h3 class="card-title">
											Featured
										</h3>
									</div>
									<div class="card-body">
										<h3 class="card-title">Special title treatment</h3>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="javascript:void(0);">Go somewhere</a>
									</div>
									<div class="card-footer text-muted">
										2 days ago
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">
											Featured
										</h3>
									</div>
									<div class="card-body">
										<h3 class="card-title">Special title treatment</h3>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="javascript:void(0);">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">
											Quote
										</h3>
									</div>
									<div class="card-body">
										<blockquote class="blockquote mb-0">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
											<footer class="blockquote-footer">
												Someone famous in <cite title="Source Title">Source Title</cite>
											</footer>
										</blockquote>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-body">
										<h3 class="card-title">Card title</h3>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										<a class="btn btn-primary" href="javascript:void(0);">Button</a>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-6">
								<div class="card text-center">
									<div class="card-header">
										<ul class="nav nav-pills card-header-pills">
											<li class="nav-item">
												<a class="nav-link active" href="javascript:void(0);">Active</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item">
												<a aria-disabled="false" class="nav-link disabled" href="#!" tabindex="-1">Disabled</a>
											</li>
										</ul>
									</div>
									<div class="card-body">
										<h3 class="card-title">Special title treatment</h3>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="javascript:void(0);">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body">
										<ul class="nav nav-pills card-header-pills mb-6">
											<li class="nav-item">
												<a class="nav-link active d-block" href="#!">Active</a>
											</li>
											<li class="nav-item">
												<a class="nav-link d-block" href="javascript:void(0);">Link</a>
											</li>
											<li class="nav-item">
												<a aria-disabled="false" class="nav-link disabled d-block" href="#!" tabindex="-1">Disabled</a>
											</li>
										</ul>
										<h3 class="card-title">Special title treatment</h3>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="javascript:void(0);">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic card</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic card</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-header bg-primary ">
										<h3 class="card-title text-white">Basic color card-header</h3>
										<div class="card-options ">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x text-white"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Basic color card-footer</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer bg-info ">
										<div class="text-white">Basic card footer</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card text-white bg-primary">
									<div class="card-header  border-transparent">
										<h3 class="card-title ">primary card title</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x text-white "></i></a>
										</div>
									</div>
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card text-white bg-secondary">
									<div class="card-header border-transparent">
										<h3 class="card-title ">Secondary card title</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x text-white "></i></a>
										</div>
									</div>
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel with custom buttons</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="btn btn-primary btn-sm">Action 1</a>
											<a href="javascript:void(0);" class="btn btn-secondary btn-sm ms-2">Action 2</a>
										</div>
									</div>
									<div class="card-body">
										No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with search form</h3>
										<div class="card-options">
											<form >
												<div class="input-group mt-2">
													<input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
													<span class="input-group-btn">
														<button class="btn h-100 btn-primary" type="submit">
															<span class="fe fe-search"></span>
														</button>
													</span>
												</div>
											</form>
										</div>
									</div>
									<div class="card-body">
										No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with alert</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-alert alert alert-success mb-0">
										Adding action was successful
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with alert</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-alert alert alert-danger mb-0">
										Adding action failed
									</div>
									<div class="card-body">
										No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with loader</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with loader</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="card-options-collapse me-2" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner1">
											  <div class="double-bounce1"></div>
											  <div class="double-bounce2"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

@endsection('content')

@section('scripts')

@endsection