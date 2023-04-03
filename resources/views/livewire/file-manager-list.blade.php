@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">File Manager List</h4>
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
							<div class="col-lg-4 col-xl-3">
								<div class="card">
									<div class="card-body text-center">
										<button class="btn btn-primary w-80"><i class="fa fa-plus me-2"></i> Create Folder</button>
									</div>
									<div class="card-body pt-3 pb-3">
										<div class="list-group list-group-transparent mb-0 file-manger">
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-image fs-18 me-2"></i>Images
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-video fs-18 me-2"></i>Videos
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-file-text fs-18 me-2"></i> Docs
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-music fs-18 me-2"></i> Music
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-smartphone fs-18 me-2"></i> APKs
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-download fs-18 me-2"></i> Downloads
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-grid fs-18 me-2"></i> More
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-lock fs-18 me-2"></i> Hiddent Files
											</a>
										</div>
									</div>
									<div class="card-body pt-3 pb-3">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary me-2"></span>Remote Control
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-secondary me-2"></span>Google Drive
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-success me-2"></span>FTP Files
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-info me-2"></span>Transfer files
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-warning me-2"></span>Deep Clean
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-danger me-2"></span>Favourities
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary me-2"></span>Settings
											</a>
										</div>
									</div>
									<div class="card-body d-flex">
										<div class="chart-circle chart-circle-sm chart-circle ms-0 me-4" data-value="0.85" data-thickness="5" data-color="#38cb89">
											<div class="mx-auto chart-circle-value text-center fs-14">85%</div>
										</div>
										<div class="mt-3">
											<h5 class="mb-1 font-weight-bold">Storage</h5>
											<p class="mb-0"><span class="text-muted">13.65gb</span> / <span class="text-muted">16gb</span></p>
											<button class="btn btn-xs btn-light mt-2">
												Upgrade Storage
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-8">
								<div class="row">
									<div class="col-6 mb-2">
										<div class="fs-20">
											All Files
										</div>
									</div>
									<div class="col-6 col-auto">
										<div class="form-group">
											<div class="input-icon">
												<span class="input-icon-addon">
													<i class="fe fe-search"></i>
												</span>
												<input type="text" class="form-control" placeholder="Search Files">
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body p-0">
										<div class="e-table">
											<div class="table-responsive table-lg mb-0">
												<table class="table mb-0" id="example1">
													<tbody>
														<tr>
															<td class="align-middle w-5 border-top-0">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle border-top-0">
																<div class="d-flex">
																	<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 me-2">
																	<div class="mt-1">
																		document.pdf
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle border-top-0"><span>10 Jan 2021</span></td>
															<td class="text-nowrap align-middle border-top-0">
																pdf
															</td>
															<td class="text-nowrap align-middle border-top-0">
																453kb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 me-2">
																	<div class="mt-1">
																		Images
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 Feb 2021</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																3.45gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 me-2">
																	<div class="mt-1">
																		Videos
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>01 Mar 2021</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																1.23gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 me-2">
																	<div class="mt-1">
																		Documents
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>03 Mar 2021</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																1.65gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 me-2">
																	<div class="mt-1">
																		Music
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 Mar 2021</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																890mb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 me-2">
																	<div class="mt-1">
																		Downloads
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 Mar 2021</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																1.45gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<i class="fa fa-music text-secondary fs-20"></i>
																	<div class="ms-3">
																		Topmusicsong
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>10 Apr 2021</span></td>
															<td class="text-nowrap align-middle">
																Mp4
															</td>
															<td class="text-nowrap align-middle">
																34kb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{asset('assets/images/photos/1.jpg')}}" alt="img" class="w-5 h-5 me-2 br-3">
																	<div class="mt-1">
																		Image
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>11 Apr 2021</span></td>
															<td class="text-nowrap align-middle">
																jpg
															</td>
															<td class="text-nowrap align-middle">
																1gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 me-2">
																	<div class="mt-1">
																		File Documents
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>11 Apr 2021</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																11gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 me-2">
																	<div class="mt-1">
																		New Folder
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>12 Apr 2021</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																1.24gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{asset('assets/images/files/word.png')}}" alt="img" class="w-5 h-5 me-2">
																	<div class="mt-1">
																		Word Document
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 May 2021</span></td>
															<td class="text-nowrap align-middle">
																Ms Word Document
															</td>
															<td class="text-nowrap align-middle">
																54kb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 me-2">
																	<div class="mt-1">
																		Pdfdocument
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 May 2021</span></td>
															<td class="text-nowrap align-middle">
																pdf
															</td>
															<td class="text-nowrap align-middle">
																34kb
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<ul class="pagination float-end mb-4">
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
						<!-- End Row -->

@endsection('content')

@section('scripts')

		<!-- Circle-progress js-->
		<script src="{{asset('assets/plugins/circle-progress/circle-progress.min.js')}}"></script>

@endsection
