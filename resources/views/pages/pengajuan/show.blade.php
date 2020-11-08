@extends('layouts.master')
@section('title', 'Detail Pengajuan')

@section('content')
@component('layouts.component.header')
@slot('tools')

@endslot
@slot('breadcumbs')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> / Pengajuan / Detail</h4>
@endslot
@slot('breadcumbs2')
<a href="{{url('/pages/dashboard')}}" class="breadcrumb-item"> Home</a>
<a href="{{route('pengajuan.index')}}" class="breadcrumb-item">Pengajuan</a>
<span class="breadcrumb-item active">Detail</span>
@endslot
@endcomponent
<!-- Main content -->
<div class="container">
    <div class="row mt-3 d-flex align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <h6 class="card-title">Detail Pengajuan</h6>
                    <div class="header-elements">
                        @php
                        $badge = null;
                        if($item->status == 'Pending') {
                        $badge = 'badge-warning';
                        } else if($item->status == 'Tidak Disetujui') {
                        $badge = 'badge-danger';
                        }else {
                        $badge = "badge-success";
                        }
                        @endphp
                        <label class="badge {{ $badge }}">{{ $item->status }}</label>
                    </div>
                </div>
                <div class="card-body">
                    {{-- <img src="{{ url('../images/logo.png') }}" class="mb-2 mt-2" alt="" style="width: 120px;"> --}}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <ul class="list list-unstyled mb-0">
                                    <li class="font-weight-semibold">PT Ikhlas Cipta Teknologi</li>
                                    <li>Jl. Bangka Raya No 42 A</li>
                                    <li>Jakarta Selatan 12720</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-4">
                                <div class="text-sm-right">
                                    <h4 class="text-primary mb-2 mt-md-2">{{ $item->no_pendaftaran }}</h4>
                                    <ul class="list list-unstyled mb-0">
                                        <li>Tanggal:
                                            <span
                                                class="font-weight-semibold">{{ $item->created_at->format('d/m/Y') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <ul class="list list-unstyled mb-0">
                            <li>
                                <h5 class="my-2">Nama :</h5>
                            </li>
                            <li>No. KTP :</li>
                            <li>No. NPWP :</li>
                            <li>Nama Brand :</li>
                            <li>Tipe Pengajuan :</li>
                        </ul>

                        <ul class="list list-unstyled mb-0 text-right">
                            <li>
                                <h5 class="font-weight-semibold my-2">{{ $item->name }}</h5>
                            </li>
                            <li>
                                <a href="{{ url('/storage/'.$item->image_ktp) }}"
                                    target="_blank">{{ $item->no_ktp }}</a>
                            </li>
                            <li>
                                <a href="{{ url('/storage/'.$item->image_npwp) }}"
                                    target="_blank">{{ $item->no_npwp }}</a>
                            </li>
                            <li>{{ $item->brand_name }}</li>
                            <li>{{ $item->type }}</li>
                        </ul>

                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <img src="data:image/png;base64, {!! base64_encode(QrCode::errorCorrection('H')->format('png')->merge('/public/images/logo1.png', .3)->size(150)->generate(url('/status/'.$item->token))) !!} ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
