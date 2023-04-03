@extends('layouts.app')

@section('styles')

	    <!-- INTERNAL Prism Css -->
		<link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Modal</h4>
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
								<!--div-->
								<div class="card" id="modal">
									<div class="card-header">
										<div class="card-title">
											Basic Modal
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0">
											<div class="modal d-block pos-static" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content modal-content-demo">
														<div class="modal-header">
															<h6 class="modal-title">Message Preview</h6>
															<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true"></span></button>
														</div>
														<div class="modal-body">
															<h6>Why We Use Electoral College, Not Popular Vote</h6>
															<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" type="button">Save changes</button> <button class="btn btn-secondary" type="button">Close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-bs-target="#modaldemo1" data-bs-toggle="modal" href="">View Live Demo</a>
										</div><!-- pd-y-30 -->
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="modal1">
									<div class="card-header">
										<div class="card-title">
											Small Modal
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0">
											<div class="modal d-block pos-static">
												<div class="modal-dialog modal-sm" role="document">
													<div class="modal-content modal-content-demo">
														<div class="modal-header">
															<h6 class="modal-title">Notice</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
														</div>
														<div class="modal-body">
															<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
														</div>
														<div class="modal-footer justify-content-center">
															<button class="btn btn-primary" type="button">Save changes</button> <button class="btn btn-secondary" type="button">Close</button>
														</div>
													</div>
												</div>
											</div>
										</div><!-- modal-wrapper-demo -->
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-bs-target="#modaldemo2" data-bs-toggle="modal" href="">View Live Demo</a>
										</div><!-- pd-y-30 -->
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="modal2">
									<div class="card-header">
										<div class="card-title">
											Large Modal
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0">
											<div class="modal  d-block pos-static">
												<div class="modal-dialog modal-lg" role="document">
													<div class="modal-content modal-content-demo">
														<div class="modal-header">
															<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
														</div>
														<div class="modal-body">
															<h6>Why We Use Electoral College, Not Popular Vote</h6>
															<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" type="button">Save changes</button>
															<button class="btn btn-secondary" type="button">Close</button>
														</div>
													</div>
												</div>
											</div>
										</div><!-- modal-wrapper-demo -->
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-bs-target="#modaldemo3" data-bs-toggle="modal" href="">View Live Demo</a>
										</div><!-- pd-y-30 -->
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="modal3">
									<div class="card-header">
										<div class="card-title">
											Success Alert Messages
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0">
											<div class="modal d-block pos-static">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-body text-center p-4">
															<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
															<i class="fe fe-check-circle fs-70 text-success lh-1 mb-4 d-inline-block"></i>
															<h4 class="text-success mb-4">Congratulations!</h4>
															<p class="mb-4 mx-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button class="btn btn-success pd-x-25" type="button">Continue</button>
														</div>
													</div>
												</div>
											</div>
										</div><!-- modal-wrapper-demo -->
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-bs-target="#modaldemo4" data-bs-toggle="modal" href="">View Live Demo</a>
										</div><!-- modal-footer-demo -->
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="modal4">
									<div class="card-header">
										<div class="card-title">
											Warning Alert Messages
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0 mg-t-20">
											<div class="modal d-block pos-static">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-body text-center p-4">
															<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
															<i class="fe fe-x-circle fs-70 text-danger lh-1 mb-4 d-inline-block"></i>
															<h4 class="text-danger mb-20">Error: Cannot process your entry!</h4>
															<p class="mb-4 mx-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-danger pd-x-25" type="button">Continue</button>
														</div>
													</div>
												</div>
											</div>
										</div><!-- modal-wrapper-demo -->
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-bs-target="#modaldemo5" data-bs-toggle="modal" href="">View Live Demo</a>
										</div><!-- modal-footer-demo -->
									</div>
								</div>
								<!--/div-->

								<!--div-->
								<div class="card" id="modal5">
									<div class="card-header">
										<div class="card-title">
											Modal Animation Effects
										</div>
									</div>
									<div class="card-body">
										<div class="row ">
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8">Scale</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-slide-in-right" data-bs-toggle="modal" href="#modaldemo8">Slide In Right</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-slide-in-bottom" data-bs-toggle="modal" href="#modaldemo8">Slide In Bottom</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-newspaper" data-bs-toggle="modal" href="#modaldemo8">Newspaper</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-fall" data-bs-toggle="modal" href="#modaldemo8">Fall</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modaldemo8">Flip Horizontal</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-flip-vertical" data-bs-toggle="modal" href="#modaldemo8">Flip Vertical</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#modaldemo8">Super Scaled</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-sign" data-bs-toggle="modal" href="#modaldemo8">Sign</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#modaldemo8">Rotate Bottom</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-rotate-left" data-bs-toggle="modal" href="#modaldemo8">Rotate Left</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-just-me" data-bs-toggle="modal" href="#modaldemo8">Just Me</a>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Modal Sizes</h3>
									</div>
									<div class="card-body text-center">
										<p>Add <code class="highlighter-rouge">.modal-sm </code> or <code class="highlighter-rouge">.modal-lg </code> to modal-dialog to increase and decrease the modal box sizes.</p>
										<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#smallmodal">Small Modal</button>
										<button type="button" class="btn btn-secondary mt-3" data-bs-toggle="modal" data-bs-target="#normalmodal">Default Modal</button>
										<button type="button" class="btn btn-info mt-3" data-bs-toggle="modal" data-bs-target="#largemodal">large Modal</button>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection('content')

@section('modal')

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodal" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodal1">Modal title</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="normalmodal" tabindex="-1" role="dialog" aria-labelledby="normalmodal" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="normalmodal1">Modal title</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="largemodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
				<div class="modal-dialog modal-lg " role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largemodal1">Modal title</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
			<!--Scrolling Modal-->
			<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<p> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligrighti optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumrighta est, omnis dolor repellrightus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
						<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. </p>
						<p> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
						<p> No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					  </div>
					</div>
				</div>
			</div>

			<!-- Large Modal -->
			<div id="largeModal" class="modal fade">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content ">
						<div class="modal-header pd-x-20">
							<h6 class="modal-title">Message Preview</h6>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body pd-20">
							<h5 class=" lh-3"><a href="" class="font-weight-bold">Why We Use Electoral College, Not Popular Vote</a></h5>
							<p class="">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
						</div><!-- modal-body -->
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">Save changes</button>
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!-- small Modal -->
			<div id="smallModal" class="modal fade">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>This is a modal with small size</p>
						</div><!-- modal-body -->
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">Save changes</button>
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!-- Grid Modal -->
			<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="example-Modal2">Modal title</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
								</div>
								<div class="col-md-6">
									<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the who loves toil and pain can procureor sit aspernatur  system.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure desires to obtain pain.</p>
								</div>
								<div class="col-md-6">
									<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat aut odit voluptatem.</p>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Message Modal -->
			<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="example-Modal3">New message</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label for="recipient-name" class="form-control-label">Recipient:</label>
									<input type="text" class="form-control" id="recipient-name">
								</div>
								<div class="form-group">
									<label for="message-text" class="form-control-label">Message:</label>
									<textarea class="form-control" id="message-text"></textarea>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Send message</button>
						</div>
					</div>
				</div>
			</div>

            <!-- BASIC MODAL -->
            <div class="modal fade" id="modaldemo1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <h6>Why We Use Electoral College, Not Popular Vote</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="button">Save changes</button> <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SMALL MODAL -->
            <div class="modal fade" id="modaldemo2">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Notice</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button class="btn btn-primary" type="button">Save changes</button> <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LARGE MODAL -->
            <div class="modal fade" id="modaldemo3">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <h6>Why We Use Electoral College, Not Popular Vote</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="button">Save changes</button> <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL ALERT MESSAGE -->
            <div class="modal fade" id="modaldemo4">
                <div class="modal-dialog modal-dialog-centered text-center " role="document">
                    <div class="modal-content tx-size-sm">
                        <div class="modal-body text-center p-4">
                            <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                            <i class="fe fe-check-circle fs-70 text-success lh-1 mb-5 d-inline-block"></i>
                            <h4 class="text-success tx-semibold">Congratulations!</h4>
                            <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-success pd-x-25" data-bs-dismiss="modal" type="button">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modaldemo5">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content tx-size-sm">
                        <div class="modal-body text-center p-4">
                            <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                            <i class="fe fe-x-circle fs-70 text-danger lh-1 mb-5 d-inline-block"></i>
                            <h4 class="text-danger">Error: Cannot process your entry!</h4>
                            <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-danger pd-x-25" data-bs-dismiss="modal" type="button">Continue</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL EFFECTS -->
            <div class="modal fade" id="modaldemo8">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <h6>Why We Use Electoral College, Not Popular Vote</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="button">Save changes</button> <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page -->

@endsection

@section('scripts')

		<!-- INTERNAL Clipboard js -->
		<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

@endsection
