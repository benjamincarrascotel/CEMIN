@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!--Page header-->
					<div class="page-header">
						<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">User List 1</h4>
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
						<div class="row flex-lg-nowrap">
							<div class="col-12">
								<div class="row flex-lg-nowrap">
									<div class="col-12 mb-3">
										<div class="e-panel card">
											<div class="card-body">
												<div class="e-table">
													<div class="table-responsive table-lg mt-3">
														<table class="table table-bordered border-top text-nowrap">
															<thead>
																<tr>
																	<th class="align-top border-bottom-0 wd-5">Check</th>
																	<th class="border-bottom-0 w-20">User</th>
																	<th class="border-bottom-0 w-20">Date of joining</th>
																	<th class="border-bottom-0 w-20">Status</th>
																	<th class="border-bottom-0 w-20" >Role</th>
																	<th class="border-bottom-0 w-20">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
																			<div class="ms-3 mt-1">
																				<h6 class="mb-0 font-weight-bold mt-2">Nam Guy</h6>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
																	<td class="align-middle">
																		<div class="">
																			<span class="bg-primary-transparent text-primary px-2 py-1 br-7 border-primary">Active</span>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle">
																		web designer
																	</td>
																	<td class="align-middle">
																			<button class="btn btn-sm btn-info" type="button" data-bs-toggle="" data-bs-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-danger" type="button"><i class="fe fe-trash-2"></i></button>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
																			<div class="ms-3 mt-1">
																				<h6 class="mb-0 font-weight-bold mt-2">Tracy Lindahl</h6>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="">
																			<span class="bg-primary-transparent text-primary px-2 py-1 br-7 border-primary">Active</span>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle">
																		web developer
																	</td>
																	<td class="align-middle">
																			<button class="btn btn-sm btn-info" type="button" data-bs-toggle="" data-bs-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-danger" type="button"><i class="fe fe-trash-2"></i></button>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
																			<div class="ms-3 mt-1">
																				<h6 class="mb-0 font-weight-bold mt-2">Breana Millis</h6>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="">
																			<span class="bg-warning-transparent text-warning px-2 py-1 br-7 border-warning">Ideal</span>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle">
																		Php developer
																	</td>
																	<td class="align-middle">
																			<button class="btn btn-sm btn-info" type="button" data-bs-toggle="" data-bs-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-danger" type="button"><i class="fe fe-trash-2"></i></button>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																			<div class="ms-3 mt-1">
																				<h6 class="mb-0 font-weight-bold mt-2">Antwan Tramel</h6>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>20 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="">
																			<span class="bg-primary-transparent text-primary px-2 py-1 br-7 border-primary">Active</span>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle">
																		Hr Manager
																	</td>
																	<td class="align-middle">
																			<button class="btn btn-sm btn-info" type="button" data-bs-toggle="" data-bs-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-danger" type="button"><i class="fe fe-trash-2"></i></button>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
																			<div class="ms-3 mt-1">
																				<h6 class="mb-0 font-weight-bold mt-2">Geraldine Arpin</h6>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>13 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="">
																			<span class="bg-primary-transparent text-primary px-2 py-1 br-7 border-primary">Active</span>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle">
																		Recriuter
																	</td>
																	<td class="align-middle">
																			<button class="btn btn-sm btn-info" type="button" data-bs-toggle="" data-bs-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-danger" type="button"><i class="fe fe-trash-2"></i></button>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{asset('assets/images/users/6.jpg')}})"></span>
																			<div class="ms-3 mt-1">
																				<h6 class="mb-0 font-weight-bold mt-2">Clement Niehaus</h6>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>	25 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="">
																			<span class="bg-danger-transparent text-danger px-2 py-1 br-7 border-danger">Inactive</span>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle">
																		Ceo
																	</td>
																	<td class="align-middle">
																			<button class="btn btn-sm btn-info" type="button" data-bs-toggle="" data-bs-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-danger" type="button"><i class="fe fe-trash-2"></i></button>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{asset('assets/images/users/7.jpg')}})"></span>
																			<div class="ms-3 mt-1">
																				<h6 class="mb-0 font-weight-bold mt-2">Melinda Mayers</h6>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>12 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="">
																			<span class="bg-primary-transparent text-primary px-2 py-1 br-7 border-primary">Active</span>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle">
																		web developer
																	</td>
																	<td class="align-middle">
																			<button class="btn btn-sm btn-info" type="button" data-bs-toggle="" data-bs-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-danger" type="button"><i class="fe fe-trash-2"></i></button>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
																			<div class="ms-3 mt-1">
																				<h6 class="mb-0 font-weight-bold mt-2">Willodean Monson</h6>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="">
																			<span class="bg-primary-transparent text-primary px-2 py-1 br-7 border-primary">Active</span>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle">
																		web designer
																	</td>
																	<td class="align-middle">
																			<button class="btn btn-sm btn-info" type="button" data-bs-toggle="" data-bs-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-danger" type="button"><i class="fe fe-trash-2"></i></button>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																			<div class="ms-3 mt-1">
																				<h6 class="mb-0 font-weight-bold mt-2">Brenton Moncada</h6>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>12 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="">
																			<span class="bg-warning-transparent text-warning px-2 py-1 br-7 border-warning">Ideal</span>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle">
																		web developer
																	</td>
																	<td class="align-middle">
																			<button class="btn btn-sm btn-info" type="button" data-bs-toggle="" data-bs-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-danger" type="button"><i class="fe fe-trash-2"></i></button>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
																			<div class="ms-3 mt-1">
																				<h6 class="mb-0 font-weight-bold mt-2">Cyndy Kirschbaum</h6>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>10 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="">
																			<span class="bg-danger-transparent text-danger px-2 py-1 br-7 border-danger">Inactive</span>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle">
																		web developer
																	</td>
																	<td class="align-middle">
																			<button class="btn btn-sm btn-info" type="button" data-bs-toggle="" data-bs-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-danger" type="button"><i class="fe fe-trash-2"></i></button>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
																			<div class="ms-3 mt-1">
																				<h6 class="mb-0 font-weight-bold mt-2">Renna Spino</h6>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>	03 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="">
																			<span class="bg-primary-transparent text-primary px-2 py-1 br-7 border-primary">Active</span>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle">
																		Hr Manager
																	</td>
																	<td class="align-middle">
																			<button class="btn btn-sm btn-info" type="button" data-bs-toggle="" data-bs-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-danger" type="button"><i class="fe fe-trash-2"></i></button>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																			<div class="ms-3 mt-1">
																				<h6 class="mb-0 font-weight-bold mt-2">Freeman Kozlowski</h6>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="">
																			<span class="bg-danger-transparent text-danger px-2 py-1 br-7 border-danger">Inactive</span>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle">
																		web developer
																	</td>
																	<td class="align-middle">
																			<button class="btn btn-sm btn-info" type="button" data-bs-toggle="" data-bs-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-danger" type="button"><i class="fe fe-trash-2"></i></button>
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
							</div>
						</div>
						<!-- End Row -->

@endsection('content')

@section('scripts')

@endsection
