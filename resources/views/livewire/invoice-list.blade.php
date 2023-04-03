@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Invoice List</h4>
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
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 mb-4">
												<a href="javascript:void(0);" class="btn btn-primary"><i class="fe fe-plus"></i> Add New Invoice</a>
											</div>
											<div class="col-md-6 col-auto">
											</div>
										</div>
										<div class="e-table">
											<div class="table-responsive table-lg">
												<table class="table card-table table-vcenter text-nowrap border mb-0 table-hover" id="invoicedatatable">
													<thead>
														<tr>
															<th></th>
															<th>InvoiceID</th>
															<th>User Name</th>
															<th>Bill Date</th>
															<th>Email</th>
															<th>Amount</th>
															<th>Bill Status</th>
															<th>Options</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<div class="mt-1">
																		<a class="btn-link fs-16" href="javascript:void(0);">#23543</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle">
																<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 me-2 brround">
																Robert Downey Junior
															</td>
															<td class="text-nowrap align-middle"><span>11 march 2021</span></td>
															<td class="text-nowrap align-middle">
																RobertJunior@hotmail.com
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$230</span></td>
															<td><span class="bg-success px-2 py-1 text-white br-7">Paid</span></td>
															<td>
																<div class="btn-group">
																	<a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Send</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
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
																	<div class="mt-1">
																		<a class="btn-link fs-16" href="javascript:void(0);">#22343</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle">
																<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 me-2 brround">
																Chris Evans
															</td>
															<td class="text-nowrap align-middle"><span>13 aug 2021</span></td>
															<td class="text-nowrap align-middle">
																chrisevans@gmail.com
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$130</span></td>
															<td><span class="bg-danger px-2 py-1 br-7 text-white">Prighting</span></td>
															<td>
																<div class="btn-group">
																	<a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Send</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
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
																	<div class="mt-1">
																		<a class="btn-link fs-16" href="javascript:void(0);">#24563</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle">
																<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 me-2 brround">
																Chris Hemsworth
															</td>
															<td class="text-nowrap align-middle"><span>23 june 2021</span></td>
															<td class="text-nowrap align-middle">
																chrishemsworth@hotmail.com
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$342</span></td>
															<td><span class="bg-success px-2 py-1 text-white br-7">Paid</span></td>
															<td>
																<div class="btn-group">
																	<a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Send</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
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
																	<div class="mt-1">
																		<a class="btn-link fs-16" href="javascript:void(0);">#32563</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle">
																<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 me-2 brround">
																Tom Hiddleston
															</td>
															<td class="text-nowrap align-middle"><span>15 july 2021</span></td>
															<td class="text-nowrap align-middle">
																tomhiddleston@gmail.com
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$143</span></td>
															<td><span class="bg-success px-2 py-1 text-white br-7">Paid</span></td>
															<td>
																<div class="btn-group">
																	<a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Send</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
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
																	<div class="mt-1">
																		<a class="btn-link fs-16" href="javascript:void(0);">#25675</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle">
																<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 me-2 brround">
																Elizabeth Olsen
															</td>
															<td class="text-nowrap align-middle"><span>12 march 2021</span></td>
															<td class="text-nowrap align-middle">
																elezabethqueen@hotmail.com
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$600</span></td>
															<td><span class="bg-success px-2 py-1 text-white br-7">Paid</span></td>
															<td>
																<div class="btn-group">
																	<a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Send</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
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
																	<div class="mt-1">
																		<a class="btn-link fs-16" href="javascript:void(0);">#43290</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle">
																<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 me-2 brround">
																Mark Ruffalo
															</td>
															<td class="text-nowrap align-middle"><span>23 june 2021</span></td>
															<td class="text-nowrap align-middle">
																markrufffaloiam@gmail.com
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$1100</span></td>
															<td><span class="bg-danger px-2 py-1 text-white br-7">Prighting</span></td>
															<td>
																<div class="btn-group">
																	<a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Send</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
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
																	<div class="mt-1">
																		<a class="btn-link fs-16" href="javascript:void(0);">#34673</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle">
																<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 me-2 brround">
																Tom Holland
															</td>
															<td class="text-nowrap align-middle"><span>16 may 2021</span></td>
															<td class="text-nowrap align-middle">
																tomhollanditsme@gmail.com
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$456</span></td>
															<td><span class="bg-danger px-2 py-1 text-white br-7">Prighting</span></td>
															<td>
																<div class="btn-group">
																	<a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Send</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
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
																	<div class="mt-1">
																		<a class="btn-link fs-16" href="javascript:void(0);">#26675</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle">
																<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 me-2 brround">
																Natasha Romanoff
															</td>
															<td class="text-nowrap align-middle">30 march 2021</td>
															<td class="text-nowrap align-middle">
																natashaactress@hotmail.com
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$1020</span></td>
															<td><span class="bg-success px-2 py-1 text-white br-7">Paid</span></td>
															<td>
																<div class="btn-group">
																	<a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2"></i> View</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Send</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
																		<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection('content')

@section('scripts')

		<!-- Invoice js-->
		<script src="{{asset('assets/js/invoice.js')}}"></script>

@endsection
