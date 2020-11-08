@extends('layouts.master')
@section('title', 'Form Pengajuan')

@section('content')
@component('layouts.component.header')
@slot('tools')

@endslot
@slot('breadcumbs')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> / Pengajuan /
    {{isset($data) ? 'Edit Pengajuan' : 'Tambah Pengajuan'}}</h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
@endslot
@slot('breadcumbs2')
<a href="{{url('/pages/dashboard')}}" class="breadcrumb-item"> Home</a>
<a href="{{route('pengajuan.index')}}" class="breadcrumb-item">Pengajuan</a>
<span class="breadcrumb-item active">{{isset($data) ? 'Edit Pengajuan' : 'Tambah Pengajuan'}}</span>
@endslot
@endcomponent
<!-- Main content -->
<div class="content">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">{{isset($data) ? 'Edit Pengajuan' : 'Tambah Pengajuan'}}</h5>
                </div>
                <div class="card-body">
                    <form id="form-pengajuan" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" id=""
                                value="{{isset($data) ? $data->name : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">No. KTP</label>
                            <input type="no_ktp" name="no_ktp" class="form-control" id=""
                                value="{{isset($data) ? $data->no_ktp : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">Foto KTP</label>
                            <input type="file" name="image_ktp" class="form-control" id=""
                                value="{{isset($data) ? $data->image_ktp : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">No. NPWP</label>
                            <input type="no_npwp" name="no_npwp" class="form-control" id=""
                                value="{{isset($data) ? $data->no_npwp : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">Foto NPWP</label>
                            <input type="file" name="image_npwp" class="form-control" id=""
                                value="{{isset($data) ? $data->image_npwp : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="address" name="address" class="form-control" id=""
                                value="{{isset($data) ? $data->address : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Brand</label>
                            <input type="brand_name" name="brand_name" class="form-control" id=""
                                value="{{isset($data) ? $data->brand_name : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">Tipe Pengajuan</label>
                            {!! Form::select('type', $options['layanan'], null, ['class' => 'form-control']) !!}
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <button type="button" id="save" class="btn btn-md btn-primary pull-right">Submit</button>
                        <a href="{{route('pengajuan.index')}}" class="btn btn-md btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('javascript')
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
@if(isset($data))
{!! JsValidator::formRequest('App\Http\Requests\Pengajuan\PengajuanUpdateRequest') !!}
@else
{!! JsValidator::formRequest('App\Http\Requests\Pengajuan\PengajuanRequest') !!}
@endif
<script>
    $('#save').on("click",function(){
    let btn = $(this);
    let form = $('#form-pengajuan');
    let url = "{{ route('pengajuan.store') }}"
    let data = document.forms.namedItem('form-pengajuan');
    let formData = new FormData(data);
    let index =  "{{ route('pengajuan.index') }}"
    let mode = "POST"
    if(form.valid()) {
        createWithImage(url, formData, btn, index);
    }
});
</script>
@endpush
