@extends('layouts.master')
@section('title', 'Set Status')

@section('content')
@component('layouts.component.header')
@slot('tools')

@endslot
@slot('breadcumbs')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> / Pengajuan / Set Status</h4>
@endslot
@slot('breadcumbs2')
<a href="{{url('/backend/dashboard')}}" class="breadcrumb-item"> Home</a>
<a href="{{route('request.index')}}" class="breadcrumb-item">Pengajuan</a>
<span class="breadcrumb-item active">Set Status</span>
@endslot
@endcomponent
<!-- Main content -->
<div class="content">
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
                                    <li class="font-weight-bold">PT Ikhlas Cipta Teknologi</li>
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
                                <h5 class="my-2">
                                    {{ $customer->name }}
                                </h5>
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
                    <div class="text-right mt-2">
                        @if($item->status != 'Disetujui' && $item->status != 'Tidak Disetujui')
                        <button type="button" class="btn btn-md btn-primary pull-right setuju" data-value="setuju"
                            data-id="{{$item->id}}">Setuju</button>
                        <button type="button" class="btn btn-md btn-danger pull-right tidak_setuju"
                            data-value="tidak_setuju" data-id="{{$item->id}}">Tidak
                            Setuju</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('javascript')
<script>
    $('.setuju, .tidak_setuju').on('click', function(){
        let data = $(this).data('value');
        let id = $(this).data('id');
        swal.fire({
        title: 'Are you sure you want to update this data?',
        text: "",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: "Yes, update!",
        cancelButtonText: 'No, please ',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        }).then((result) => {
        if (result.value) {
        $.ajax({
        url: "{{route('request.set_status')}}",
        method: "POST",
        data: {type: data, id:id },
        dataType: 'json',
        success: function(response) {
            swalInit.fire({
                title: "Success!",
                text: response.message,
                type: 'success',
                buttonStyling: false,
                confirmButtonClass: 'btn btn-primary btn-lg',
            }).then(function() {
                window.location.reload();
            })
            },
        error: function(response) {
            if (response.status == 500) {
                console.log(response)
                swalInit.fire("Error", response.responseJSON.message, 'error');
            }
            if (response.status == 422) {
                var error = response.responseJSON.errors;
            }
        }
    });
        }
        });
    });

</script>
@endpush
