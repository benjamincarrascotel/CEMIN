@extends('layouts.app-login')

@section('content')
        <div class="page">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col mx-auto">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-xl-4 col-md-7 col-sm-12 col-xs-12 ">
                                    <div class="text-center mb-5 mt-0">
                                        <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Azea logo">
                                    </div>
                                    <div class="card-group mb-0">
                                        <div class="card bg-primary text-white br-7 p-2">
                                            <div class="card-body mb-0">
                                                <div class="text-center mb-3">
                                                    <h1 class="mb-2">Log In</h1>
                                                    <a href="javascript:void(0);" class="text-white">Welcome Back !</a>
                                                </div>
                                        <!--
                                            <hr class="hrregister3">
                                            <div class="text-center small mt-3">Sign in with</div>
                                            <div class="btn-list text-center mb-3 mt-2">
                                                <a href="javascript:void(0);" class="btn   m-0 me-2 p-2 mb-2"><i class="fa fa-google"></i> Google</a>
                                                <a href="javascript:void(0);" class="btn  m-0 me-2 p-2 mb-2"><i class="fa fa-twitter"></i> twitter</a>
                                                <a href="javascript:void(0);" class="btn  m-0 p-2 mb-2"><i class="fa fa-facebook"></i> facebook</a>
                                            </div>
                                            <hr class="divider my-6 text-primary">
                                        -->
                                                <form class='mt-5' method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <div class="input-group mb-4">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-user"></i>
                                                            </div>
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group" id="Password-toggle">
                                                            <a href="" class="input-group-text">
                                                            <i class="fe fe-eye" aria-hidden="true"></i>
                                                            </a>
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Recuérdame') }}
                                                        </label>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-white text-primary btn-block d-grid px-4 font-weight-bold">
                                                                {{ __('Log In') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection('content')
