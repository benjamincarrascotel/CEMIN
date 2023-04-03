@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!--Page header-->
					<div class="page-header">
						<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Todo List 3</h4>
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
							<div class="col-md-12 col-xl-3 col-lg-4">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
										<div class="mt-4 mb-4 ms-4 me-4 text-center">
											<a href="javascript:void(0);" class="btn btn-primary d-grid">Add New Task</a>
										</div>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center mb-1">
											<i class="fe fe-codepen fs-18 me-4 p-2 border-primary brround bg-primary-transparent text-primary"></i> All Tasks <span class="ms-auto badge bg-success">14</span>
										</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center mb-1">
											<i class="fe fe-alert-octagon fs-18 me-4 p-2 border-warning brround bg-warning-transparent text-warning"></i> Important <span class="ms-auto badge bg-danger">3</span>
										</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center mb-1">
											<i class="fe fe-star fs-18 me-4 p-2 border-secondary brround bg-secondary-transparent text-secondary"></i> Starred
										</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center mb-1">
											<i class="fe fe-briefcase fs-18 me-4 p-2 border-danger brround bg-danger-transparent text-danger"></i> Spam
										</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center mb-1">
											<i class="fe fe-briefcase fs-18 me-4 p-2 border-success brround bg-success-transparent text-success"></i> Archive
										</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center border-bottom-0">
											<i class="fe fe-trash-2 fs-18 me-4 p-2 border-info brround bg-info-transparent text-info"></i> Trash
										</a>
									</div>
									<div class="p-1">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<i class="fe fe-arrow-right fs-14 me-4 p-1 border-secondary br-7 bg-secondary-transparent text-secondary"></i> Friends
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<i class="fe fe-arrow-right fs-14 me-4 p-1 border-success br-7 bg-success-transparent text-success"></i> Family
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<i class="fe fe-arrow-right fs-14 me-4 p-1 border-primary br-7 bg-primary-transparent text-primary"></i> Social
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<i class="fe fe-arrow-right fs-14 me-4 p-1 border-warning br-7 bg-warning-transparent text-warning"></i> Office
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<i class="fe fe-arrow-right fs-14 me-4 p-1 border-info br-7 bg-info-transparent text-info"></i> Work
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<i class="fe fe-arrow-right fs-14 me-4 p-1 border-danger br-7 bg-danger-transparent text-danger"></i> Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-9 col-lg-8">
								<div class="row">
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ms-auto">
														<a class="option-dots" href="" data-bs-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
															<a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
															<a class="dropdown-item" href="javascript:void(0);">Add Star</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mute</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-5 pb-5 text-center">
													<img src="{{asset('assets/images/files/file2.png')}}" alt="img" class="w-80 mx-auto br-7">
													<h6 class="mb-1 font-weight-semibold mt-4 p-2 bg-primary-transparent text-primary border-primary br-7"><i class="fe fe-file fs-18 me-1"></i> XLSdocument.xls</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ms-auto">
														<a class="option-dots" href="" data-bs-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
															<a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
															<a class="dropdown-item" href="javascript:void(0);">Add Star</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mute</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-5 pb-5 text-center">
													<img src="{{asset('assets/images/files/doc.png')}}" alt="img" class="w-80 mx-auto br-7">
													<h6 class="mb-1 font-weight-semibold mt-4 p-2 bg-primary-transparent text-primary border-primary br-7"><i class="fe fe-file fs-18 me-1"></i> Newdocument.xls</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ms-auto">
														<a class="option-dots" href="" data-bs-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
															<a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
															<a class="dropdown-item" href="javascript:void(0);">Add Star</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mute</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-5 pb-5 text-center">
													<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-80 mx-auto br-7">
													<h6 class="mb-1 font-weight-semibold mt-4 p-2 bg-primary-transparent text-primary border-primary br-7"><i class="fe fe-file fs-18 me-1"></i> PDFdocument.xls</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ms-auto">
														<a class="option-dots" href="" data-bs-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
															<a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
															<a class="dropdown-item" href="javascript:void(0);">Add Star</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mute</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-5 pb-5 text-center">
													<img src="{{asset('assets/images/files/ppt.png')}}" alt="img" class="w-80 mx-auto br-7">
													<h6 class="mb-1 font-weight-semibold mt-4 p-2 bg-primary-transparent text-primary border-primary br-7"><i class="fe fe-file fs-18 me-1"></i> PPTdocument.xls</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ms-auto">
														<a class="option-dots" href="" data-bs-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
															<a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
															<a class="dropdown-item" href="javascript:void(0);">Add Star</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mute</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-5 pb-5 text-center">
													<img src="{{asset('assets/images/files/word.png')}}" alt="img" class="w-80 mx-auto br-7">
													<h6 class="mb-1 font-weight-semibold mt-4 p-2 bg-primary-transparent text-primary border-primary br-7"><i class="fe fe-file fs-18 me-1"></i> PTdocument.xls</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ms-auto">
														<a class="option-dots" href="" data-bs-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
															<a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
															<a class="dropdown-item" href="javascript:void(0);">Add Star</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mute</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-5 pb-5 text-center">
													<img src="{{asset('assets/images/files/zip.png')}}" alt="img" class="w-80 mx-auto br-7">
													<h6 class="mb-1 font-weight-semibold mt-4 p-2 bg-primary-transparent text-primary border-primary br-7"><i class="fe fe-file fs-18 me-1"></i> ZIPFile.ZIP</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ms-auto">
														<a class="option-dots" href="" data-bs-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
															<a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
															<a class="dropdown-item" href="javascript:void(0);">Add Star</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mute</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-5 pb-5 text-center">
													<img src="{{asset('assets/images/files/file2.png')}}" alt="img" class="w-80 mx-auto br-7">
													<h6 class="mb-1 font-weight-semibold mt-4 p-2 bg-primary-transparent text-primary border-primary br-7"><i class="fe fe-file fs-18 me-1"></i> PDFdocument.xls</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ms-auto">
														<a class="option-dots" href="" data-bs-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
															<a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
															<a class="dropdown-item" href="javascript:void(0);">Add Star</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mute</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-5 pb-5 text-center">
													<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-80 mx-auto br-7">
													<h6 class="mb-1 font-weight-semibold mt-4 p-2 bg-primary-transparent text-primary border-primary br-7"><i class="fe fe-file fs-18 me-1"></i> XLSdocument.xls</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ms-auto">
														<a class="option-dots" href="" data-bs-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
															<a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
															<a class="dropdown-item" href="javascript:void(0);">Add Star</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mute</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-5 pb-5 text-center">
													<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-80 mx-auto br-7">
													<h6 class="mb-1 font-weight-semibold mt-4 p-2 bg-primary-transparent text-primary border-primary br-7"><i class="fe fe-file fs-18 me-1"></i> XLSdocument.xls</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ms-auto">
														<a class="option-dots" href="" data-bs-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
															<a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
															<a class="dropdown-item" href="javascript:void(0);">Add Star</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mute</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-5 pb-5 text-center">
													<img src="{{asset('assets/images/files/doc.png')}}" alt="img" class="w-80 mx-auto br-7">
													<h6 class="mb-1 font-weight-semibold mt-4 p-2 bg-primary-transparent text-primary border-primary br-7"><i class="fe fe-file fs-18 me-1"></i> XLSdocument.xls</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ms-auto">
														<a class="option-dots" href="" data-bs-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
															<a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
															<a class="dropdown-item" href="javascript:void(0);">Add Star</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mute</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-5 pb-5 text-center">
													<img src="{{asset('assets/images/files/ppt.png')}}" alt="img" class="w-80 mx-auto br-7">
													<h6 class="mb-1 font-weight-semibold mt-4 p-2 bg-primary-transparent text-primary border-primary br-7"><i class="fe fe-file fs-18 me-1"></i> XLSdocument.xls</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ms-auto">
														<a class="option-dots" href="" data-bs-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);">Assigned to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
															<a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
															<a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
															<a class="dropdown-item" href="javascript:void(0);">Add Star</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to</a>
															<a class="dropdown-item" href="javascript:void(0);">Mute</a>
															<a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-5 pb-5 text-center">
													<img src="{{asset('assets/images/files/ppt.png')}}" alt="img" class="w-80 mx-auto br-7">
													<h6 class="mb-1 font-weight-semibold mt-4 p-2 bg-primary-transparent text-primary border-primary br-7"><i class="fe fe-file fs-18 me-1"></i> XLSdocument.xls</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
								</div>
								<ul class="pagination mb-4 float-end">
									<li class="page-item page-prev disabled">
										<a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
									</li>
									<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
									<li class="page-item page-next">
										<a class="page-link" href="javascript:void(0);">Next</a>
									</li>
								</ul>
							</div>
						</div>


@endsection('content')

@section('scripts')

@endsection
