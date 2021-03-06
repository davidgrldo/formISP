@extends('layouts.auth')
@section('section')
<!-- Content area -->
<div class="content d-flex justify-content-center align-items-center">
    <!-- Login form -->
    <form class="login-form" method="POST" action="{{ route('customer.login') }}">
        @csrf

        @if(\Session::has('error'))
        <div class="alert alert-danger">Email atau password salah</div>
        @endif
        @if(\Session::has('success'))
        <div class="alert alert-success">Register berhasil.</div>
        @endif
        <div class="card mb-0">
            <div class="card-body">
                <div class="text-center mb-3">
                    <i
                        class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                    <h5 class="mb-0">Login to your account</h5>
                    <span class="d-block text-muted">Enter your credentials below</span>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="text" class="form-control @error('email') border-danger @enderror" placeholder="Email"
                        name="email">
                    <div class="form-control-feedback">
                        <i class="icon-user text-muted"></i>
                    </div>
                    @error('email')
                    <span class="form-text text-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="password" class="form-control @error('password') border-danger @enderror"
                        placeholder="Password" name="password">
                    <div class="form-control-feedback">
                        <i class="icon-lock2 text-muted"></i>
                    </div>
                    @error('password')
                    <span class="form-text text-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Sign in
                        <i class="icon-circle-right2 ml-2"></i>
                    </button>
                </div>
                <div class="d-flex justify-content-between">
                    <label for="">Belum memiliki akun?</label>
                    <a href="{{ url('/pages/register') }}">Register</a>
                </div>
            </div>
        </div>
    </form>
    <!-- /login form -->

</div>
<!-- /content area -->

@endsection
