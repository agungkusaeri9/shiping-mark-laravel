@extends('auth.app')
@section('title')
    Login
@endsection
@section('content')
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo text-center">
                            <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="logo"
                                style="max-height: 120px">
                        </div>
                        <h4>Welcome MPI Business System</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        <form class="pt-3" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email"
                                    class="form-control @error('email') is-invalid @enderror form-control-lg"
                                    id="exampleInputEmail1" placeholder="Email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password"
                                    class="form-control @error('password') is-invalid @enderror form-control-lg"
                                    id="password" placeholder="Password" name="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" name="rememberme" class="form-check-input">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button
                                    class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
@endsection
