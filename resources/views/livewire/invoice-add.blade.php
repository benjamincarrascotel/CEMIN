@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Add Invoice</h4>
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

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Add Invoice</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<div class="form-group row">
													<div class="col-md-5">
														<label class="form-label">Invoice Title</label>
														<input class="form-control" placeholder="Invoice title" value="">
													</div>
													<div class="col-md-5">
														<label class="form-label">Payment Number</label>
														<input class="form-control" placeholder="Payment Number" value="">
													</div>
													<div class="col-md-2">
														<label class="form-label">Payment Date</label>
														<input class="form-control"  type="number" value="" placeholder="dd-mm-yy">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-6">
														<label class="form-label">Bill To</label>
														<textarea class="form-control" rows="4" placeholder="Bill To"></textarea>
													</div>
													<div class="col-md-6">
														<label class="form-label">Subject</label>
														<textarea class="form-control" placeholder="Subject of Invoice" rows="4"></textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table nowrap text-nowrap border mt-5">
												<thead>
													<tr>
														<th>PRODUCT</th>
														<th class="w-40">DESCRIPTION</th>
														<th>QNTY</th>
														<th>UNIT PRICE</th>
														<th>AMOUNT</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input class="form-control" placeholder="" type="text" value=""></td>
														<td><textarea rows="1" class="form-control"></textarea></td>
														<td><input class="form-control" placeholder="" type="text" value=""></td>
														<td><input class="form-control" placeholder="" type="text" value=""></td>
														<td><input class="form-control" placeholder="" type="text" value=""></td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td><a class="btn btn-light" href="javascript:void(0);"><i class="fe fe-plus"></i> Add Product</a></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
												</tfoot>
											</table>
										</div>
										<div class="form-group row">
											<div class="col-md-12">
												<label class="form-label">Vat Rate</label>
												<input class="form-control" placeholder="Vat Rate" type="text" value="">
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row">
											<div class="col">
												<a class="btn btn-success" href="javascript:void(0);"><i class="fe fe-plus"></i> Add New Invoice</a>
												<a class="btn btn-info" href="javascript:void(0);">Cancel</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End row-->

@endsection('content')

@section('scripts')

@endsection
