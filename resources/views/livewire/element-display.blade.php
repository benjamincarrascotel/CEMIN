@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Display</h4>
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
									<div class="card-header">
										<h3 class="card-title">Basic Display</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mb-0 mg-t-5">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.d-inline</code></td>
														<td>Set an inline display property of an element.</td>
													</tr>
													<tr>
														<td><code>.d-inline-block</code></td>
														<td>Set an inline-block display property of an element.</td>
													</tr>
													<tr>
														<td><code>.d-block</code></td>
														<td>Set a block display property of an element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Hiding Elements</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mb-0 mg-t-5">
												<thead>
													<tr>
														<th class="wd-40p">Class</th>
														<th class="wd-60p">Screen Size</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.d-none</code></td>
														<td>Hidden on all</td>
													</tr>
													<tr>
														<td><code>.d-none .d-sm-block</code></td>
														<td>Hidden only on xs</td>
													</tr>
													<tr>
														<td><code>.d-sm-none .d-md-block</code></td>
														<td>Hidden only on sm</td>
													</tr>
													<tr>
														<td><code>.d-md-none .d-lg-block</code></td>
														<td>Hidden only on md</td>
													</tr>
													<tr>
														<td><code>.d-lg-none .d-xl-block</code></td>
														<td>Hidden only on lg</td>
													</tr>
													<tr>
														<td><code>.d-xl-none</code></td>
														<td>Hidden only on xl</td>
													</tr>
													<tr>
														<td><code>.d-xxl-none</code></td>
														<td>Hidden only on xxl</td>
													</tr>
													<tr>
														<td><code>.d-block</code></td>
														<td>Visible on all</td>
													</tr>
													<tr>
														<td><code>.d-block .d-sm-none</code></td>
														<td>Visible only on xs</td>
													</tr>
													<tr>
														<td><code>.d-none .d-sm-block .d-md-none</code></td>
														<td>Visible only on sm</td>
													</tr>
													<tr>
														<td><code>.d-none .d-md-block .d-lg-none</code></td>
														<td>Visible only on md</td>
													</tr>
													<tr>
														<td><code>.d-none .d-lg-block .d-xl-none</code></td>
														<td>Visible only on lg</td>
													</tr>
													<tr>
														<td><code>.d-none .d-xl-block</code></td>
														<td>Visible only on xl</td>
													</tr>
													<tr>
														<td><code>.d-none .d-xxl-block</code></td>
														<td>Visible only on xxl</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>

@endsection('content')

@section('scripts')

@endsection