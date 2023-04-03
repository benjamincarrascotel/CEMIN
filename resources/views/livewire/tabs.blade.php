@extends('layouts.app')

@section('styles')

    	<!-- INTERNAL Prism Css -->
		<link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!-- INTERNAL  Tabs css-->
		<link href="{{asset('assets/plugins/tabs/style.css')}}" rel="stylesheet" />

@endsection

@section('content')

					<!--Page header-->
					<div class="page-header">
						<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Tabs</h4>
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
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Tabs Style</h3>
									</div>
									<div class="card-body p-6">
										<div class="panel panel-primary">
											<div class="tab_wrapper first_tab">
												<ul class="tab_list">
													<li class="">Tab 1</li>
													<li>Tab 2</li>
													<li>Tab 3</li>
													<li>Tab 4</li>
												</ul>
												<div class="content_wrapper">
													<div class="tab_content active">
														<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
															using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
															sites still in their infancy.</p>
													</div>
													<div class="tab_content">
														<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
															Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
															1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
													</div>
													<div class="tab_content">
														<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
															of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tright to repeat predefined chunks as necessary, making this the first true generator
															on the Internet. It uses a dictionary of  etc.</p>
													</div>
													<div class="tab_content">
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
															specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
															passages, and more recently with desktop  Ipsum.
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Tabs style 1</h3>
									</div>
									<div class="card-body p-6">
										<div class="panel panel-primary">
											<div class="tab-menu-heading p-0">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li class=""><a href="#tab1" class="active" data-bs-toggle="tab">Tab 1</a></li>
														<li><a href="#tab2" data-bs-toggle="tab">Tab 2</a></li>
														<li><a href="#tab3" data-bs-toggle="tab">Tab 3</a></li>
														<li><a href="#tab4" data-bs-toggle="tab">Tab 4</a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body">
												<div class="tab-content">
													<div class="tab-pane active " id="tab1">
														<p>page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites stillIpsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still</p>
													</div>
													<div class="tab-pane  " id="tab2">
														<p>search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites stillIpsum as their default model text, and a search for 'lorem ipsum' will uncover many web sitespage editors now use Lorem Ipsum as their default model text, and a  still</p>
													</div>
													<div class="tab-pane " id="tab3">
														<p>model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites stillIpsum as their default model text, and a search for 'lorem ipsum'page editors now use Lorem Ipsum as their default  will uncover many web sites still</p>
													</div>
													<div class="tab-pane  " id="tab4">
														<p> Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites stillIpsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites stillpage editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card" id="tabs-style4">
									<div class="card-header">
										<div class="card-title">
											Vertical Tabs
										</div>
									</div>
									<div class="card-body">
										<div class="d-md-flex">
											<div class="border border-end br-tl-7 br-bl-7">
												<div class="panel panel-primary tabs-style-4">
													<div class="tab-menu-heading border-top-0 border-bottom-0 border-start-0 br-tr-0">
														<div class="tabs-menu">
															<!-- Tabs -->
															<ul class="nav panel-tabs">
																<li class=""><a href="#tab21" class="active" data-bs-toggle="tab">Tab Style 01</a></li>
																<li><a href="#tab22" data-bs-toggle="tab">Tab Style 02</a></li>
																<li><a href="#tab23" data-bs-toggle="tab">Tab Style 03</a></li>
																<li><a href="#tab24" data-bs-toggle="tab">Tab Style 04</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="tabs-style-4">
												<div class="panel-body tabs-menu-body br-tr-7 br-tl-0 br-bl-0 border-start-0">
													<div class="tab-content">
														<div class="tab-pane active" id="tab21">
															<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. </p>
														</div>
														<div class="tab-pane" id="tab22">
															<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio.  </p>
														</div>
														<div class="tab-pane" id="tab23">
															<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio.  </p>
														</div>
														<div class="tab-pane" id="tab24">
															<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio.  </p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card" id="tabs-style3">
									<div class="card-header">
										<div class="card-title">
											Tab Style 2
										</div>
									</div>
									<div class="card-body">
										<div class="panel panel-primary tabs-style-3">
											<div class="tab-menu-heading">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li class=""><a href="#tab11" class="active" data-bs-toggle="tab">Tab Style 01</a></li>
														<li><a href="#tab12" data-bs-toggle="tab">Tab Style 02</a></li>
														<li><a href="#tab13" data-bs-toggle="tab">Tab Style 03</a></li>
														<li><a href="#tab14" data-bs-toggle="tab">Tab Style 04</a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body">
												<div class="tab-content">
													<div class="tab-pane active" id="tab11">
														<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
														<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligrighti optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumrighta est, omnis dolor. </p>
													</div>
													<div class="tab-pane" id="tab12">
														<p> Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligrighti optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumrighta est, omnis dolor repellrightus. </p>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
													</div>
													<div class="tab-pane" id="tab13">
														<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae</p>
														<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligrighti optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumrighta est, omnis dolor repellrightus. </p>
													</div>
													<div class="tab-pane" id="tab14">
														<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
														<p class="mb-0">Nam libero tempore, cum soluta nobis est eligrighti optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumrighta est, omnis dolor repellrightus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus </p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						    <!-- div -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Tabs Style 3</h3>
									</div>
									<div class="card-body p-6">
										<div class="panel panel-primary">
											<div class=" tab-menu-heading p-0 bg-light">
												<div class="tabs-menu1 ">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li class=""><a href="#tab5" class="active" data-bs-toggle="tab">Tab 1</a></li>
														<li><a href="#tab6" data-bs-toggle="tab">Tab 2</a></li>
														<li><a href="#tab7" data-bs-toggle="tab">Tab 3</a></li>
														<li><a href="#tab8" data-bs-toggle="tab">Tab 4</a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body">
												<div class="tab-content">
													<div class="tab-pane active " id="tab5">
														<p>page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>
														<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
													</div>
													<div class="tab-pane " id="tab6">
														<p> default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>
														<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
													</div>
													<div class="tab-pane " id="tab7">
														<p>over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>
														<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
													</div>
													<div class="tab-pane " id="tab8">
														<p>page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>
														<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
								<!-- /div -->

							</div>
						<!-- End Row -->

@endsection('content')

@section('scripts')

        <!-- INTERNAL Clipboard js -->
		<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

		<!--- INTERNAL Tabs js-->
		<script src="{{asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"></script>
		<script src="{{asset('assets/js/tabs.js')}}"></script>

@endsection
