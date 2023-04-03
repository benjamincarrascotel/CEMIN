@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Select2 css -->
		<link href="{{asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />

		<!-- INTERNAL File Uploads css -->
		<link href="{{asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />

		<!-- INTERNAL File Uploads css-->
        <link href="{{asset('assets/plugins/fileupload/css/fileupload.css')}}" rel="stylesheet" type="text/css" />

		<!-- INTERNAL Mutipleselect css-->
		<link rel="stylesheet" href="{{asset('assets/plugins/multipleselect/multiple-select.css')}}">

		<!-- INTERNAL Sumoselect css-->
		<link rel="stylesheet" href="{{asset('assets/plugins/sumoselect/sumoselect.css')}}">

		<!-- INTERNAL telephoneinput css-->
		<link rel="stylesheet" href="{{asset('assets/plugins/telephoneinput/telephoneinput.css')}}">

		<!-- INTERNAL Jquerytransfer css-->
		<link rel="stylesheet" href="{{asset('assets/plugins/jQuerytransfer/jquery.transfer.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/jQuerytransfer/icon_font/icon_font.css')}}">

		<!-- INTERNAL multi css-->
		<link rel="stylesheet" href="{{asset('assets/plugins/multi/multi.min.css')}}">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Form Validations</h4>
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
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Custom Validation</h3>
									</div>
									<div class="card-body">
										<form class="row g-3 needs-validation" novalidate>
											<div class="col-md-4">
											  <label for="validationCustom01" class="form-label">First name</label>
											  <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
											  <div class="valid-feedback">
												Looks good!
											  </div>
											</div>
											<div class="col-md-4">
											  <label for="validationCustom02" class="form-label">Last name</label>
											  <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
											  <div class="valid-feedback">
												Looks good!
											  </div>
											</div>
											<div class="col-md-4">
											  <label for="validationCustomUsername" class="form-label">Username</label>
											  <div class="input-group has-validation">
												<span class="input-group-text" id="inputGroupPrepend">@</span>
												<input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
												<div class="invalid-feedback">
												  Please choose a username.
												</div>
											  </div>
											</div>
											<div class="col-md-6">
											  <label for="validationCustom03" class="form-label">City</label>
											  <input type="text" class="form-control" id="validationCustom03" required>
											  <div class="invalid-feedback">
												Please provide a valid city.
											  </div>
											</div>
											<div class="col-md-3">
											  <label for="validationCustom04" class="form-label">State</label>
											  <select class="form-select border" id="validationCustom04" required>
												<option selected disabled value="">Choose...</option>
												<option>...</option>
											  </select>
											  <div class="invalid-feedback">
												Please select a valid state.
											  </div>
											</div>
											<div class="col-md-3">
											  <label for="validationCustom05" class="form-label">Zip</label>
											  <input type="text" class="form-control" id="validationCustom05" required>
											  <div class="invalid-feedback">
												Please provide a valid zip.
											  </div>
											</div>
											<div class="col-12">
											  <div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
												<label class="form-check-label" for="invalidCheck">
												  Agree to terms and conditions
												</label>
												<div class="invalid-feedback">
												  You must agree before submitting.
												</div>
											  </div>
											</div>
											<div class="col-12">
											  <button class="btn btn-primary" type="submit">Submit form</button>
											</div>
										  </form>
									</div>
								</div>
							</div>

							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default Validation</h3>
									</div>
									<div class="card-body">
										<form class="row g-3">
											<div class="col-md-4">
											  <label for="validationDefault01" class="form-label">First name</label>
											  <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
											</div>
											<div class="col-md-4">
											  <label for="validationDefault02" class="form-label">Last name</label>
											  <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
											</div>
											<div class="col-md-4">
											  <label for="validationDefaultUsername" class="form-label">Username</label>
											  <div class="input-group">
												<span class="input-group-text" id="inputGroupPrepend2">@</span>
												<input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
											  </div>
											</div>
											<div class="col-md-6">
											  <label for="validationDefault03" class="form-label">City</label>
											  <input type="text" class="form-control" id="validationDefault03" required>
											</div>
											<div class="col-md-3">
											  <label for="validationDefault04" class="form-label">State</label>
											  <select class="form-select" id="validationDefault04" required>
												<option selected disabled value="">Choose...</option>
												<option>...</option>
											  </select>
											</div>
											<div class="col-md-3">
											  <label for="validationDefault05" class="form-label">Zip</label>
											  <input type="text" class="form-control" id="validationDefault05" required>
											</div>
											<div class="col-12">
											  <div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
												<label class="form-check-label" for="invalidCheck2">
												  Agree to terms and conditions
												</label>
											  </div>
											</div>
											<div class="col-12">
											  <button class="btn btn-primary" type="submit">Submit form</button>
											</div>
										  </form>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Server Side Validation</h3>
									</div>
									<div class="card-body">
										<form class="row g-3">
											<div class="col-md-4">
											  <label for="validationServer01" class="form-label">First name</label>
											  <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
											  <div class="valid-feedback">
												Looks good!
											  </div>
											</div>
											<div class="col-md-4">
											  <label for="validationServer02" class="form-label">Last name</label>
											  <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
											  <div class="valid-feedback">
												Looks good!
											  </div>
											</div>
											<div class="col-md-4">
											  <label for="validationServerUsername" class="form-label">Username</label>
											  <div class="input-group has-validation">
												<span class="input-group-text" id="inputGroupPrepend3">@</span>
												<input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
												<div id="validationServerUsernameFeedback" class="invalid-feedback">
												  Please choose a username.
												</div>
											  </div>
											</div>
											<div class="col-md-6">
											  <label for="validationServer03" class="form-label">City</label>
											  <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
											  <div id="validationServer03Feedback" class="invalid-feedback">
												Please provide a valid city.
											  </div>
											</div>
											<div class="col-md-3">
											  <label for="validationServer04" class="form-label">State</label>
											  <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
												<option selected disabled value="">Choose...</option>
												<option>...</option>
											  </select>
											  <div id="validationServer04Feedback" class="invalid-feedback">
												Please select a valid state.
											  </div>
											</div>
											<div class="col-md-3">
											  <label for="validationServer05" class="form-label">Zip</label>
											  <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
											  <div id="validationServer05Feedback" class="invalid-feedback">
												Please provide a valid zip.
											  </div>
											</div>
											<div class="col-12">
											  <div class="form-check">
												<input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
												<label class="form-check-label" for="invalidCheck3">
												  Agree to terms and conditions
												</label>
												<div id="invalidCheck3Feedback" class="invalid-feedback">
												  You must agree before submitting.
												</div>
											  </div>
											</div>
											<div class="col-12">
											  <button class="btn btn-primary" type="submit">Submit form</button>
											</div>
										  </form>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Supported Elements</h3>
									</div>
									<div class="card-body">
										<form class="was-validated">
											<div class="mb-3">
											  <label for="validationTextarea" class="form-label">Textarea</label>
											  <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
											  <div class="invalid-feedback">
												Please enter a message in the textarea.
											  </div>
											</div>

											<div class="form-check mb-3">
											  <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
											  <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
											  <div class="invalid-feedback">Example invalid feedback text</div>
											</div>

											<div class="form-check">
											  <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
											  <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
											</div>
											<div class="form-check mb-3">
											  <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
											  <label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
											  <div class="invalid-feedback">More example invalid feedback text</div>
											</div>

											<div class="mb-3">
											  <select class="form-select" required aria-label="select example">
												<option value="">Open this select menu</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											  </select>
											  <div class="invalid-feedback">Example invalid select feedback</div>
											</div>

											<div class="mb-3">
											  <input type="file" class="form-control" aria-label="file example" required>
											  <div class="invalid-feedback">Example invalid form file feedback</div>
											</div>

											<div class="mb-3">
											  <button class="btn btn-primary" type="submit" disabled>Submit form</button>
											</div>
										  </form>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Tooltips</h3>
									</div>
									<div class="card-body">
										<form class="row g-3 needs-validation" novalidate>
											<div class="col-md-4 position-relative">
											  <label for="validationTooltip01" class="form-label">First name</label>
											  <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
											  <div class="valid-tooltip">
												Looks good!
											  </div>
											</div>
											<div class="col-md-4 position-relative">
											  <label for="validationTooltip02" class="form-label">Last name</label>
											  <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
											  <div class="valid-tooltip">
												Looks good!
											  </div>
											</div>
											<div class="col-md-4 position-relative">
											  <label for="validationTooltipUsername" class="form-label">Username</label>
											  <div class="input-group has-validation">
												<span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
												<input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
												<div class="invalid-tooltip">
												  Please choose a unique and valid username.
												</div>
											  </div>
											</div>
											<div class="col-md-6 position-relative">
											  <label for="validationTooltip03" class="form-label">City</label>
											  <input type="text" class="form-control" id="validationTooltip03" required>
											  <div class="invalid-tooltip">
												Please provide a valid city.
											  </div>
											</div>
											<div class="col-md-3 position-relative">
											  <label for="validationTooltip04" class="form-label">State</label>
											  <select class="form-select" id="validationTooltip04" required>
												<option selected disabled value="">Choose...</option>
												<option>...</option>
											  </select>
											  <div class="invalid-tooltip">
												Please select a valid state.
											  </div>
											</div>
											<div class="col-md-3 position-relative">
											  <label for="validationTooltip05" class="form-label">Zip</label>
											  <input type="text" class="form-control" id="validationTooltip05" required>
											  <div class="invalid-tooltip">
												Please provide a valid zip.
											  </div>
											</div>
											<div class="col-12">
											  <button class="btn btn-primary" type="submit">Submit form</button>
											</div>
										  </form>
									</div>
								</div>
							</div>
						</div>
						<!--/Row-->
                        <!-- Row -->
						<div class="row ">
							<div class="col-md-12">

							</div>
						</div>
						<!-- /Row -->

@endsection('content')

@section('scripts')

		<!-- INTERNAL Select2 js -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

		<!-- INTERNAL Timepicker js -->
		<script src="{{asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
		<script src="{{asset('assets/plugins/time-picker/toggles.min.js')}}"></script>

		<!-- INTERNAL Datepicker js -->
		<script src="{{asset('assets/plugins/date-picker/date-picker.js')}}"></script>
		<script src="{{asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
		<script src="{{asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>

		<!-- INTERNAL File-Uploads Js-->
		<script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

		<!-- INTERNAL File uploads js -->
        <script src="{{asset('assets/plugins/fileupload/js/dropify.js')}}"></script>
		<script src="{{asset('assets/js/filupload.js')}}"></script>

		<!-- INTERNAL Multipleselect js -->
		<script src="{{asset('assets/plugins/multipleselect/multiple-select.js')}}"></script>
		<script src="{{asset('assets/plugins/multipleselect/multi-select.js')}}"></script>

		<!--INTERNAL Sumoselect js-->
		<script src="{{asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>

		<!--INTERNAL telephoneinput js-->
		<script src="{{asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
		<script src="{{asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>

		<!--INTERNAL jquery transfer js-->
		<script src="{{asset('assets/plugins/jQuerytransfer/jquery.transfer.js')}}"></script>

		<!--INTERNAL multi js-->
		<script src="{{asset('assets/plugins/multi/multi.min.js')}}"></script>

		<!--Form Validations js-->
		<script src="{{asset('assets/js/form-vallidations.js')}}"></script>

@endsection
