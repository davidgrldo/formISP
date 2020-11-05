@extends('layouts.auth')

@section('section')
<!-- Content area -->
<div class="content d-flex justify-content-center align-items-center">

    <!-- Login form -->
    <form class="login-form" method="POST" action="{{ route('customer.register') }}">
        @csrf

        <div class="card mb-0">
            <div class="card-body">
                <div class="text-center mb-3">
                    <i
                        class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                    <h5 class="mb-0">Register</h5>
                    <span class="d-block text-muted">Create your account</span>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="text" class="form-control @error('name') border-danger @enderror"
                        placeholder="Full Name" name="name" autofocus>
                    <div class="form-control-feedback">
                        <i class="icon-user text-muted"></i>
                    </div>
                    @error('name')
                    <span class="form-text text-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="text" class="form-control @error('phone') border-danger @enderror" placeholder="Phone"
                        name="phone">
                    <div class="form-control-feedback">
                        <i class="icon-phone2 text-muted"></i>
                    </div>
                    @error('phone')
                    <span class="form-text text-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="text" class="form-control @error('email') border-danger @enderror" placeholder="Email"
                        name="email">
                    <div class="form-control-feedback">
                        <i class="icon-envelop5 text-muted"></i>
                    </div>
                    @error('email')
                    <span class="form-text text-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="text" class="form-control @error('address') border-danger @enderror"
                        placeholder="Address" name="address">
                    <div class="form-control-feedback">
                        <i class="icon-home text-muted"></i>
                    </div>
                    @error('address')
                    <span class="form-text text-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="text" class="form-control @error('company_name') border-danger @enderror"
                        placeholder="Company Name" name="company_name">
                    <div class="form-control-feedback">
                        <i class="icon-office text-muted"></i>
                    </div>
                    @error('company_name')
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

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="password" class="form-control @error('password_confirmation') border-danger @enderror"
                        placeholder="Password Confirmation" name="password_confirmation">
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
                    <button type="submit" class="btn btn-primary btn-block">Submit<i
                            class="icon-circle-right2 ml-2"></i></button>
                </div>
            </div>
        </div>
    </form>
    <!-- /login form -->

</div>
<!-- /content area -->
@endsection
