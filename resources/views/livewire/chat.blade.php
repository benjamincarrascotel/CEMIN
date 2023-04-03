@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Chat</h4>
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
								<div class="card overflow-hidden">
									<div class="tile tile-alt mb-0" id="messages-main">
										<div class="ms-menu">
											<div class="tab-menu-heading border-top-0">
												<div class="tabs-menu1">
													<ul class="nav">
														<li><a href="#tab-7" class="active" data-bs-toggle="tab">Chat</a></li>
														<li class="m-0"><a href="#tab-8" data-bs-toggle="tab" class="">Contacts</a></li>
													</ul>
												</div>
											</div>
											<div class="tab-content">
												<div class="tab-pane active" id="tab-7">
													<ul class="list-group lg-alt chat-conatct-list" id="ChatList">
														<li class="list-group-item media p-4 mt-0 border-0">
															<a href="javascript:void(0);">
																<div class="float-start pe-2">
																	<img src="{{asset('assets/images/users/5.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">Davil Parnell<span class="dot-label bg-danger ms-2 w-2 h-2"></span></div>
																	<small class="list-group-item-text text-muted">Fierent fastidii recteque ad pro</small>
																</div>
																<span class="chat-time text-muted">2 mins</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="javascript:void(0);">
																<div class="float-start pe-2">
																	<img src="{{asset('assets/images/users/2.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">Ann Watkinson<span class="dot-label bg-success ms-2 w-2 h-2"></span></div>
																	<small class="list-group-item-text text-muted">Cum sociis natoque penatibus </small>
																</div>
																<span class="chat-time text-muted">10 mins</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="javascript:void(0);">
																<div class="float-start pe-2">
																	<img src="{{asset('assets/images/users/7.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">Marse Walter<span class="dot-label bg-success ms-2 w-2 h-2"></span></div>
																	<small class="list-group-item-text text-muted">Susprightisse sapien ligula</small>
																</div>
																<span class="chat-time text-muted">15 mins</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="javascript:void(0);">
																<div class="lv-avatar float-start pe-2">
																	<img src="{{asset('assets/images/users/3.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">Jeremy Robbins<span class="dot-label bg-danger ms-2 w-2 h-2"></span></div>
																	<small class="list-group-item-text text-muted">Phasellus porttitor tellus nec</small>
																</div>
																<span class="chat-time text-muted">30 mins</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="javascript:void(0);">
																<div class="lv-avatar float-start pe-2">
																	<img src="{{asset('assets/images/users/9.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">Reginald Horace<span class="dot-label bg-danger ms-2 w-2 h-2"></span></div>
																	<small class="list-group-item-text text-muted">Quisque consequat arcu eget</small>
																</div>
																<span class="chat-time text-muted">50 min</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="javascript:void(0);">
																<div class="float-start pe-2">
																	<img src="{{asset('assets/images/users/6.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">Shark Henry<span class="dot-label bg-success ms-2 w-2 h-2"></span></div>
																	<small class="list-group-item-text text-muted">Nam lobortis odio et leo maximu</small>
																</div>
																<span class="chat-time text-muted">1 day</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="javascript:void(0);">
																<div class="float-start pe-2">
																	<img src="{{asset('assets/images/users/7.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">Paul Van Dack<span class="dot-label bg-danger ms-2 w-2 h-2"></span></div>
																	<small class="list-group-item-text text-muted">Nam posuere purus sed velit auctor sodales</small>
																</div>
																<span class="chat-time text-muted">2 days</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="javascript:void(0);">
																<div class="lv-avatar float-start pe-2">
																	<img src="{{asset('assets/images/users/5.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">James Anderson<span class="dot-label bg-success ms-2 w-2 h-2"></span></div>
																	<small class="list-group-item-text text-muted">Vivamus imperdietsag</small>
																</div>
																<span class="chat-time text-muted">2 days</span>
															</a>
														</li>
													</ul>
												</div>
												<div class="tab-pane" id="tab-8">
													<ul class="list-group lg-alt chat-conatct-list" id="ChatList2">
														<li class="list-group-item media p-4 border-0 mt-0">
															<a href="javascript:void(0);" class="contact-href"></a>
															<div class="float-start pe-2">
																<img src="{{asset('assets/images/users/5.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Davil Parnell</div>
																<small class="list-group-item-text text-muted">davilparnell@gmail.com</small>
															</div>
															<div class="ms-auto">
																<a data-bs-toggle="dropdown" class="option-dots" href="javascript:void(0);">
																	<i class="fe fe-more-vertical fs-18"></i>
																</a>
																<ul class="dropdown-menu dropdown-menu-start">
																	<li>
																		<a href=""><i class="fe fe-phone-call me-1"></i> Call</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-video me-1"></i> Videocall</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-mail me-1"></i> New Message</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-settings me-1"></i> Settings</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="javascript:void(0);" class="contact-href"></a>
															<div class="float-start pe-2">
																<img src="{{asset('assets/images/users/2.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Ann Watkinson</div>
																<small class="list-group-item-text text-muted">annwatkinso@gmail.com</small>
															</div>
															<div class="ms-auto">
																<a data-bs-toggle="dropdown" class="option-dots" href="javascript:void(0);">
																	<i class="fe fe-more-vertical fs-18"></i>
																</a>
																<ul class="dropdown-menu dropdown-menu-start">
																	<li>
																		<a href=""><i class="fe fe-phone-call me-1"></i> Call</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-video me-1"></i> Videocall</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-mail me-1"></i> New Message</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-settings me-1"></i> Settings</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="javascript:void(0);" class="contact-href"></a>
															<div class="float-start pe-2">
																<img src="{{asset('assets/images/users/7.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Marse Walter</div>
																<small class="list-group-item-text text-muted">marsewalter@gmail.com</small>
															</div>
															<div class="ms-auto">
																<a data-bs-toggle="dropdown" class="option-dots" href="javascript:void(0);">
																	<i class="fe fe-more-vertical fs-18"></i>
																</a>
																<ul class="dropdown-menu dropdown-menu-start">
																	<li>
																		<a href=""><i class="fe fe-phone-call me-1"></i> Call</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-video me-1"></i> Videocall</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-mail me-1"></i> New Message</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-settings me-1"></i> Settings</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="javascript:void(0);" class="contact-href"></a>
															<div class="lv-avatar float-start pe-2">
																<img src="{{asset('assets/images/users/3.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Jeremy Robbins</div>
																<small class="list-group-item-text text-muted">jeremyrobbins@gmail.com</small>
															</div>
															<div class="ms-auto">
																<a data-bs-toggle="dropdown" class="option-dots" href="javascript:void(0);">
																	<i class="fe fe-more-vertical fs-18"></i>
																</a>
																<ul class="dropdown-menu dropdown-menu-start">
																	<li>
																		<a href=""><i class="fe fe-phone-call me-1"></i> Call</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-video me-1"></i> Videocall</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-mail me-1"></i> New Message</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-settings me-1"></i> Settings</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="javascript:void(0);" class="contact-href"></a>
															<div class="lv-avatar float-start pe-2">
																<img src="{{asset('assets/images/users/9.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Reginald Horace</div>
																<small class="list-group-item-text text-muted">reginaldhorace@gmail.com</small>
															</div>
															<div class="ms-auto">
																<a data-bs-toggle="dropdown" class="option-dots" href="javascript:void(0);">
																	<i class="fe fe-more-vertical fs-18"></i>
																</a>
																<ul class="dropdown-menu dropdown-menu-start">
																	<li>
																		<a href=""><i class="fe fe-phone-call me-1"></i> Call</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-video me-1"></i> Videocall</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-mail me-1"></i> New Message</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-settings me-1"></i> Settings</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="javascript:void(0);" class="contact-href"></a>
															<div class="float-start pe-2">
																<img src="{{asset('assets/images/users/6.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Shark Henry</div>
																<small class="list-group-item-text text-muted">sharkhenry@gmail.com</small>
															</div>
															<div class="ms-auto">
																<a data-bs-toggle="dropdown" class="option-dots" href="javascript:void(0);">
																	<i class="fe fe-more-vertical fs-18"></i>
																</a>
																<ul class="dropdown-menu dropdown-menu-start">
																	<li>
																		<a href=""><i class="fe fe-phone-call me-1"></i> Call</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-video me-1"></i> Videocall</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-mail me-1"></i> New Message</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-settings me-1"></i> Settings</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="javascript:void(0);" class="contact-href"></a>
															<div class="float-start pe-2">
																<img src="{{asset('assets/images/users/7.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Paul Van Dack</div>
																<small class="list-group-item-text text-muted">paulvandack@gmail.com</small>
															</div>
															<div class="ms-auto">
																<a data-bs-toggle="dropdown" class="option-dots" href="javascript:void(0);">
																	<i class="fe fe-more-vertical fs-18"></i>
																</a>
																<ul class="dropdown-menu dropdown-menu-start">
																	<li>
																		<a href=""><i class="fe fe-phone-call me-1"></i> Call</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-video me-1"></i> Videocall</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-mail me-1"></i> New Message</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-settings me-1"></i> Settings</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="javascript:void(0);" class="contact-href"></a>
															<div class="lv-avatar float-start pe-2">
																<img src="{{asset('assets/images/users/5.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">James Anderson</div>
																<small class="list-group-item-text text-muted">jamesanderson@gmail.com</small>
															</div>
															<div class="ms-auto">
																<a data-bs-toggle="dropdown" class="option-dots" href="javascript:void(0);">
																	<i class="fe fe-more-vertical fs-18"></i>
																</a>
																<ul class="dropdown-menu dropdown-menu-start">
																	<li>
																		<a href=""><i class="fe fe-phone-call me-1"></i> Call</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-video me-1"></i> Videocall</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-mail me-1"></i> New Message</a>
																	</li>
																	<li>
																		<a href=""><i class="fe fe-settings me-1"></i> Settings</a>
																	</li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="ms-body">
											<div class="action-header clearfix">
												<div class="float-start hidden-xs d-flex ms-0 chat-user">
													<img src="{{asset('assets/images/users/2.jpg')}}" alt="" class="avatar avatar-lg brround me-2">
													<div class="align-items-center mt-1">
														<p class="font-weight-bold mb-0 fs-16">Patrenna</p>
														<span><span class="dot-label bg-success me-2 w-2 h-2"></span>online</span>
													</div>
												</div>
												<ul class="ah-actions actions align-items-center">
													<li>
														<a  class="br-7"  data-bs-toggle="tooltip" href="" title="Call"><i class="fe fe-phone text-muted"></i></a>
													</li>
													<li>
														<a  class="br-7" data-bs-toggle="tooltip" href="" title="Archive"><i class="fe fe-folder-plus text-muted"></i></a>
													</li>
													<li>
														<a  class="br-7" data-bs-toggle="tooltip" href="" title="Trash"><i class="fe fe-trash-2 text-muted"></i></a>
													</li>
													<li>
														<a  class="br-7" data-bs-toggle="tooltip" href="" title="View Info"><i class="fe fe-alert-octagon text-muted"></i></a>
													</li>
													<li class="dropdown">
														<a data-bs-toggle="dropdown" class="option-dots br-7" href="javascript:void(0);">
															<i class="fe fe-more-vertical"></i>
														</a>
														<ul class="dropdown-menu dropdown-menu-end">
															<li>
																<a href="">Refresh</a>
															</li>
															<li>
																<a href="">Message Settings</a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
											<div class="chat-body-style" id="ChatBody">
												<div class="message-feed media mt-0">
													<div class="float-startpe-2">
														<img src="{{asset('assets/images/users/2.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Quisque consequat arcu eget odio cursus, ut tempor arcu vestibulum. Etiam ex arcu, porta a urna non, lacinia pellentesque orci. Proin semper sagittis erat, eget condimentum sapien viverra et.
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2021 at 09:00</small>
													</div>
												</div>
												<div class="message-feed right">
													<div class="float-end ps-2">
														<img src="{{asset('assets/images/users/10.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Etiam nec facilisis lacus. Nulla imperdiet augue ullamcorper dui ullamcorper, eu laoreet sem consectetur. Aenean et ligula risus. Praesent sed posuere sem. Cum sociis natoque penatibus et magnis dis parturient montes,
															<div class="row mt-2">
															</div>
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2021 at 10:10</small>
													</div>
												</div>
												<div class="message-feed media">
													<div class="float-startpe-2">
														<img src="{{asset('assets/images/users/2.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Etiam ex arcumentum
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2021 at 09:33</small>
													</div>
												</div>
												<div class="message-feed right">
													<div class="float-end ps-2">
														<img src="{{asset('assets/images/users/10.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Etiam nec facilisis lacus. Nulla imperdiet augue ullamcorper dui ullamcorper, eu laoreet sem consectetur. Aenean et ligula risus. Praesent sed posuere sem. Cum sociis natoque penatibus et magnis dis parturient montes,
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2021 at 10:10</small>
													</div>
												</div>
												<div class="message-feed media">
													<div class="float-startpe-2">
														<img src="{{asset('assets/images/users/2.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ac tortor ut elit sodales varius. Mauris id ipsum id mauris malesuada tincidunt. Vestibulum elit massa, pulvinar at sapien sed, luctus vestibulum eros.
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2021 at 10:24</small>
													</div>
												</div>
											</div>
											<div class="msb-reply">
												<textarea placeholder="What's on your mind..."></textarea>
												<button class="btn br-7"><i class="fa fa-paper-plane-o text-muted"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

@endsection('content')

@section('scripts')

		<!-- INTERNAL Chat js-->
		<script src="{{asset('assets/js/chat.js')}}"></script>

@endsection