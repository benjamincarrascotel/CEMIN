@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Email Compose</h4>
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
							<div class="col-lg-4 col-xl-3 col-md-12 col-sm-12">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox mail-inbox-elements pb-3">
										<div class="mt-2 mb-2 ms-4 me-5 text-center">
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
										<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center font-weight-semibold text-muted mb-2">
											<i class="fe fe-trash-2 fs-18 me-5 ms-2 text-muted"></i> Trash
										</a>
									</div>
									<div class="p-1">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold">
												<span class="w-3 h-3 brround bg-primary me-4 ms-2 mb-2"></span> Friends
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold">
												<span class="w-3 h-3 brround bg-secondary me-4 ms-2 mb-2"></span> Family
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold">
												<span class="w-3 h-3 brround bg-success me-4 ms-2 mb-2"></span> Social
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold">
												<span class="w-3 h-3 brround bg-info me-4 ms-2 mb-2"></span> Office
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold">
												<span class="w-3 h-3 brround bg-warning me-4 ms-2 mb-2"></span> Work
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2 text-muted font-weight-semibold">
												<span class="w-3 h-3 brround bg-danger me-4 ms-2 mb-2"></span> Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-xl-9 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Compose new message</h3>
									</div>
									<div class="card-body">
										<form >
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-2 form-label">To</label>
													<div class="col-sm-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-2 form-label">Subject</label>
													<div class="col-sm-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row ">
													<label class="col-sm-2 form-label">Message</label>
													<div class="col-sm-10">
														<textarea rows="10" class="form-control"></textarea>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="card-footer d-sm-flex">
										<div class="mt-2 mb-2">
											<a href="javascript:void(0)" class="btn btn-icon btn-light btn-svg bg-primary-transparent" data-bs-toggle="tooltip" title="" data-bs-original-title="Attach"><i class="fe fe-paperclip text-primary"></i></a>
											<a href="javascript:void(0)" class="btn btn-icon btn-light btn-svg bg-primary-transparent" data-bs-toggle="tooltip" title="" data-bs-original-title="Link"><i class="fe fe-link text-primary"></i></a>
											<a href="javascript:void(0)" class="btn btn-icon btn-light btn-svg bg-primary-transparent" data-bs-toggle="tooltip" title="" data-bs-original-title="Photos"><i class="fe fe-image text-primary"></i></a>
											<a href="javascript:void(0)" class="btn btn-icon btn-light btn-svg bg-primary-transparent" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete"><i class="fe fe-trash-2 text-primary"></i></a>
										</div>
										<div class="btn-list ms-auto">
											<button type="button" class="btn text-primary btn-outline-light btn-space br-7">Cancel</button>
											<button type="submit" class="btn text-primary btn-outline-light br-7">Send message <i class="fa fa-paper-plane"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>

@endsection('content')

@section('scripts')

@endsection