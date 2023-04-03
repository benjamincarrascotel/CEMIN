@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Prism Css -->
		<link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!---Icons css-->
		<link href="{{asset('assets/plugins/icons/icons.css')}}" rel="stylesheet" />

		<!-- INTERNAL Accordion Css -->
		<link href="{{asset('assets/plugins/accordion/accordion.css')}}" rel="stylesheet" />

@endsection

@section('content')

					<!--Page header-->
					<div class="page-header">
						<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Accordions</h4>
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Defalut Accordion</h3>
									</div>
									<div class="card-body">
										<div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
											<div class="acc-card mb-2">
												<div class="acc-header" id="headingOne" role="tab">
													<h5 class="mb-0">
														<a aria-controls="collapseOne" aria-expanded="true" data-bs-toggle="collapse" href="#collapseOne">Collapsible Group Item #1</a>
													</h5>
												</div>
												<div aria-labelledby="headingOne" class="collapse show" data-parent="#accordion" id="collapseOne" role="tabpanel">
													<div class="acc-body">
														Anim pariatur cliche reprehrighterit, enim eiusmod high life accusamus terry richardson ad squid. 3
														wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
														eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
														assumrighta shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
														nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
														farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
														labore sustainable.
													</div>
												</div>
											</div>
											<div class="acc-card mb-2">
												<div class="acc-header" id="headingTwo" role="tab">
													<h5 class="mb-0">
														<a aria-controls="collapseTwo" aria-expanded="false" class="collapsed" data-bs-toggle="collapse" href="#collapseTwo">Collapsible Group Item #2</a>
													</h5>
												</div>
												<div aria-labelledby="headingTwo" class="collapse" data-parent="#accordion" id="collapseTwo" role="tabpanel">
													<div class="acc-body">
														Anim pariatur cliche reprehrighterit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumrighta shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
													</div>
												</div>
											</div>
											<div class="acc-card mb-2">
												<div class="acc-header" id="headingThree" role="tab">
													<h5 class="mb-0">
														<a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-bs-toggle="collapse" href="#collapseThree">Collapsible Group Item #3</a>
													</h5>
												</div>
												<div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="collapseThree" role="tabpanel">
													<div class="acc-body">
														Anim pariatur cliche reprehrighterit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumrighta shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
													</div>
												</div><!-- collapse -->
											</div>
										</div><!-- accordion -->
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Defalut Accordion 2</h3>
									</div>
									<div class="card-body">
										<div class="panel-group accordion-panel"  role="tablist" aria-multiselectable="true">
											<div class="panel panel-default active">
												<div class="panel-heading " role="tab" id="headingOne1">
													<h4 class="panel-title">
														<a role="button" data-bs-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
															Collapsible Group Item #1
															<span class="float-end"><i class="fe fe-chevron-right"></i></span>
														</a>
													</h4>
												</div>
												<div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
													<div class="panel-body">
														Anim pariatur cliche reprehrighterit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumrighta shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
											<div class="panel panel-default mt-2">
												<div class="panel-heading" role="tab" id="headingTwo2">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-bs-toggle="collapse" data-parent="#accordion1" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">

															Collapsible Group Item #2
															<span class="float-end"><i class="fe fe-chevron-right"></i></span>
														</a>
													</h4>
												</div>
												<div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
													<div class="panel-body ">
														Anim pariatur cliche reprehrighterit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumrighta shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
											<div class="panel panel-default mt-2">
												<div class="panel-heading" role="tab" id="headingThree3">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-bs-toggle="collapse" data-parent="#accordion1" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">

															Collapsible Group Item #3
															<span class="float-end"><i class="fe fe-chevron-right"></i></span>
														</a>
													</h4>
												</div>
												<div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree3">
													<div class="panel-body ">
														Anim pariatur cliche reprehrighterit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumrighta shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
										</div><!-- panel-group -->
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Closed Accordion</h3>
									</div>
									<div class="card-body">
										<!-- Accordion begin -->
										<ul class="demo-accordion accordionjs m-0" data-active-index="false">

											<!-- Section 1 -->
											<li>
												<div><h3>Section 1</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<!-- Section 2 -->
											<li>
												<div><h3>Section 2</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<!-- Section 3 -->
											<li>
												<div><h3>Section 3</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color Accordion Style</h3>
									</div>
									<div class="card-body">
										<ul class="demo-accordion accordionjs m-0">
											<li>
												<div><h3>Section 1</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 2</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 3</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 4</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Buttons Accordion</h3>
									</div>
									<div class="card-body">
										<div class="mb-2">
										  <a class="btn btn-primary mb-2" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
											Link with href
										  </a>
										  <button class="btn btn-secondary mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
											Button with data-bs-target
										  </button>
										</div>
										<div class="collapse" id="collapseExample">
											  <div class="border p-3">
												Anim pariatur cliche reprehrighterit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
												Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehrighterit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Multiple targets Accordion</h3>
									</div>
									<div class="card-body">
										<div class="mb-2">
											<a class="btn btn-info mb-2" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
											<a class="btn btn-danger mb-2"  data-bs-toggle="collapse" href="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</a>
											<a class="btn btn-warning mb-2" data-bs-toggle="collapse" href=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</a>
										</div>
										<div class="row">
											<div class="col">
												<div class="collapse multi-collapse" id="multiCollapseExample1">
													<div class="border p-3">
														Anim pariatur cliche reprehrighterit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
														But I must explain to you how all this you a  explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
													</div>
												</div>
											</div>
											<div class="col">
												<div class="collapse multi-collapse" id="multiCollapseExample2">
													<div class="border p-3">
														Anim pariatur cliche reprehrighterit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

@endsection('content')

@section('scripts')

		<!--INTERNAL Clipboard js -->
		<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

		<!--INTERNAL Accordion js-->
		<script src="{{asset('assets/plugins/accordion/accordion.min.js')}}"></script>
		<script src="{{asset('assets/js/accordion.js')}}"></script>

@endsection