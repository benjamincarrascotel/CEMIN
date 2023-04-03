@extends('layouts.app')

@section('styles')

@endsection

@section('class')

		<div class="bg-light">

@endsection

@section('content')

		<div class="box">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>

		<div class="page">
			<div class="page-content">
				<div class="container text-center">
					<div class="row">
						<div class="col-md-12">
							<div class="">
								<div class="text-primary">
									<div class="display-1 mb-5 font-weight-bold error-text">401</div>
									<h1 class="h3  mb-3 font-weight-bold">Un Authorized Error!</h1>
									<p class="h5 font-weight-normal mb-7 leading-normal">You may have mistyped the address or the page may have moved.</p>
									<a class="btn btn-primary text-white mb-5 fs-18" href="javascript:void(0);">Help</a>
									<a class="btn text-primary border-primary mb-5 ms-2 fs-18" href="{{url('index')}}">Back to Home</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection('content')

@section('scripts')

@endsection
