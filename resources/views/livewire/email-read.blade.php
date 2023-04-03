@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Email Read</h4>
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
							<div class="col-md-12 col-lg-4 col-xl-3">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox mail-inbox-elements pb-3">
										<div class="mt-4 mb-4 ms-4 me-4 text-center">
											<a href="{{url('email-compose')}}" class="btn btn-primary d-grid">Compose</a>
										</div>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center font-weight-bold text-muted mb-2">
											<i class="fe fe-inbox fs-18 me-5 ms-2 text-muted"></i>Inbox <span class="ms-auto badge bg-secondary me-2">14</span>
										</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center font-weight-bold text-muted mb-2">
											<i class="fe fe-mail fs-18 me-5 ms-2 text-muted"></i> Sent Mail
										</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center font-weight-bold text-muted mb-2">
											<i class="fe fe-alert-octagon fs-18 me-5 ms-2 text-muted"></i> Important <span class="ms-auto badge bg-danger me-2">3</span>
										</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center font-weight-bold text-muted mb-2">
											<i class="fe fe-star fs-18 me-5 ms-2 text-muted"></i> Starred
										</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center font-weight-bold text-muted mb-2">
											<i class="fe fe-briefcase fs-18 me-5 ms-2 text-muted"></i> Drafts
										</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center font-weight-bold text-muted mb-2">
											<i class="fe fe-tag fs-18 me-5 ms-2 text-muted"></i> Tags
										</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center font-weight-semibold text-muted	mb-2">
											<i class="fe fe-trash-2 fs-18 me-5 ms-2 text-muted"></i> Trash
										</a>
									</div>
									<div class="p-1">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold mb-2">
												<span class="w-3 h-3 brround bg-primary me-4 ms-2"></span> Friends
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold mb-2">
												<span class="w-3 h-3 brround bg-secondary me-4 ms-2"></span> Family
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold mb-2">
												<span class="w-3 h-3 brround bg-success me-4 ms-2"></span> Social
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold mb-2">
												<span class="w-3 h-3 brround bg-info me-4 ms-2"></span> Office
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold mb-2">
												<span class="w-3 h-3 brround bg-warning me-4 ms-2"></span> Work
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold">
												<span class="w-3 h-3 brround bg-danger me-4 ms-2"></span> Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-8 col-xl-9">
								<div class="card">
									<div class="card-body">
										<div class="email-media">
											<div class="mt-0 d-sm-flex">
												<img class="me-2 rounded-circle avatar avatar-lg" src="{{asset('assets/images/users/2.jpg')}}" alt="avatar">
												<div class="media-body pt-0">
													<div class="float-end d-none d-md-flex fs-15">
														<small class="me-3 mt-3 text-muted">July 13 , 2021 12:45 pm</small>
														<a class="me-3 email-icon bg-danger-transparent" data-bs-toggle="tooltip" title="" data-original-title="Rated"><i class="text-danger fe fe-star fs-16"></i></a>
														<a class="me-3 email-icon bg-success-transparent" data-bs-toggle="tooltip" title="" data-original-title="Reply"><i class="text-success fa fa-reply"></i></a>
														<div class="">
															<a href="javascript:void(0);" class="email-icon bg-primary-transparent" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="text-primary fe fe-more-vertical fs-16"></i></a>
															<div class="dropdown-menu dropdown-menu-start">
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Reply</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-alert-circle me-2"></i>Report Spam</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i>Delete</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-printer me-2"></i>Print</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-filter me-2"></i>Filter</a>
															</div>
														</div>
													</div>
													<div class="media-title font-weight-semibold mt-1">Patrenna <span class="text-muted font-weight-semibold">( alicnestle@gmail.com )</span></div>
													<small class="mb-0">to Adam Cotter ( adamcotter@gmail.com ) </small>
													<small class="me-2 d-md-none">Dec 13 , 2018 12:45 pm</small>
												</div>
											</div>
										</div>
										<div class="eamil-body mt-5">
											<h6>Hi Sir/Madam</h6>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
											<p> Duis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
											<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
											<p class="mb-0">Thanking you Sir/Madam</p>
											<hr>
											<div class="email-attch">
												<div class="float-end">
													<a href="javascript:void(0);" class="email-icon" data-bs-toggle="tooltip" title="" data-original-title="Download"><i class="fe fe-download fs-18"></i></a>
												</div>
												<p class="font-weight-semibold">3 Attachments <a href="javascript:void(0);">View</a></p>
											</div>
											<div class="row">
												<div class="col-sm-6 col-lg-3 mt-4">
													<a class="" href="javascript:void(0);">
														<div class="border p-0 text-center">
															<img src="{{asset('assets/images/files/file2.png')}}" alt="img" class="w-80 mx-auto">
														</div>
														<div class="bg-light p-3">
															<i class="fa fa-file-excel-o me-1"></i> xls document
														</div>
													</a>
												</div>
												<div class="col-sm-6 col-lg-3 mt-4">
													<a class="" href="javascript:void(0);">
														<div class="border p-0 text-center">
															<img src="{{asset('assets/images/files/doc.png')}}" alt="img" class="w-80 mx-auto">
														</div>
														<div class="bg-light p-3">
															<i class="fa fa-file-word-o me-1"></i> word document
														</div>
													</a>
												</div>
												<div class="col-sm-6 col-lg-3 mt-4">
													<a class="" href="javascript:void(0);">
														<div class="border p-0 text-center">
															<img src="{{asset('assets/images/files/doc.png')}}" alt="img" class="w-80 mx-auto">
														</div>
														<div class="bg-light p-3">
															<i class="fa fa-file-word-o me-1"></i> word document
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="bth-list text-end">
											<a class="btn btn-outline-light text-primary" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
											<a class="btn btn-outline-light text-primary" href="javascript:void(0);"><i class="fa fa-share"></i> Forward</a>
										</div>
									</div>
								</div>
							</div>
						</div>

@endsection('content')

@section('scripts')

@endsection