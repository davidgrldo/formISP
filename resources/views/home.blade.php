@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
@component('layouts.component.header')
@slot('tools')
{{-- <a href="#" class="btn btn-md btn-primary">
    <i class="icon-plus-circle2 mr-2"></i>
    <span>@lang('lang.add_user')</span>
</a> --}}
@endslot
@slot('breadcumbs')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Dashboard</span></h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
@endslot
@slot('breadcumbs2')
<a href="{{route("dashboard")}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>

@endslot
@endcomponent
@if (auth('web')->check())
<div class="content">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="card card-body bg-blue-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">
                            {{ $user }}
                        </h3>
                        <span class="text-uppercase font-size-xs">Admin</span>
                    </div>
                    <div class="ml-3 align-self-center">
                        <i class="icon-user-tie icon-4x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="card card-body bg-danger-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">
                            {{ $customer }}
                        </h3>
                        <span class="text-uppercase font-size-xs">Customer</span>
                    </div>

                    <div class="ml-3 align-self-center">
                        <i class="icon-users4 icon-4x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">105</h3>
                        <span class="text-uppercase font-size-xs">Total Pengajuan</span>
                    </div>

                    <div class="ml-3 align-self-center">
                        <i class="icon-profile icon-4x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="content">

</div>
@endif
@endsection
