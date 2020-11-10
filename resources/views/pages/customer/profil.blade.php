@extends('layouts.master')
@section('title', 'Profil Customer')
@section('scripts')
<script type="text/javascript" src="/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="/global_assets/js/plugins/tables/datatables/extensions/select.min.js"></script>
<script type="text/javascript" src="/global_assets/js/plugins/notifications/sweet_alert.min.js"></script>
<script type="text/javascript" src="/global_assets/js/plugins/ui/moment/moment.min.js"></script>
<script type="text/javascript" src="/custom/datatables.js"></script>
@endsection
@section('content')
@component('layouts.component.header')
@slot('tools')

@endslot
@slot('breadcumbs')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> / Pages / Profil Customer</h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
@endslot
@slot('breadcumbs2')
<a href="{{url('/pages/dashboard')}}" class="breadcrumb-item">Home</a>
<a href="{{route('customer.index')}}" class="breadcrumb-item">Pages</a>
<span class="breadcrumb-item active">Profil Customer</span>
@endslot
@endcomponent
<div class="content">

    <!-- Inner container -->
    <div class="d-md-flex align-items-md-start">

        <!-- Left sidebar component -->
        <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Navigation -->
                <div class="card">
                    <div class="card-body bg-indigo-400 text-center card-img-top" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                        <div class="card-img-actions d-inline-block mb-3">
                            <div class="card-img-actions-overlay rounded-circle">
                                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                    <i class="icon-plus3"></i>
                                </a>
                                <a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                    <i class="icon-link"></i>
                                </a>
                            </div>
                        </div>

                        <h6 class="font-weight-semibold mb-0">{{ $data->name }}</h6>
                        <span class="d-block opacity-75">{{ $data->role }}</span>
                    </div>

                    <div class="card-body p-0">
                        <ul class="nav nav-sidebar mb-2">
                            <li class="nav-item-header">Biodata</li>
                            <li class="nav-item nav-link">
                                    <i class="icon-phone"></i>
                                     {{ $data->phone }}
                            </li>
                            <li class="nav-item nav-link">
                                    <i class="icon-mailbox"></i>
                                    {{ $data->email }}
                            </li>
                            <li class="nav-item nav-link">
                                    <i class="icon-home"></i>
                                    {{ $data->address }}
                            </li>
                            <li class="nav-item nav-link">
                                    <i class="icon-earth"></i>
                                    {{ $data->nationallity }}
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /navigation -->
            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /left sidebar component -->


        <!-- Right content -->
        <div class="tab-content w-100">
            <div class="tab-pane fade active show" id="profile">
                <!-- Account settings -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Edit Profile</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form id="form-profil" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Lengkap</label>
                                        <input type="text" value="{{isset($data) ? $data->name : null}}"
                                            readonly="readonly" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Jabatan</label>
                                        <input type="text" name="role" value="{{isset($data) ? $data->role : null}}" class="form-control">
                                    </div>
                                    @error('role')
                                    <span class="form-text text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>No. Telepon</label>
                                        <input type="text" name="phone" value="{{isset($data) ? $data->phone : null}}" class="form-control">
                                    </div>
                                    @error('phone')
                                    <span class="form-text text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror

                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                        <input type="text" name="email" value="{{isset($data) ? $data->email : null}}" class="form-control">
                                    </div>
                                    @error('email')
                                    <span class="form-text text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Alamat Lengkap</label>
                                        <textarea type="text" name="address" value="" class="form-control">{{isset($data) ? $data->address : null}}</textarea>
                                    </div>
                                    @error('address')
                                    <span class="form-text text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror

                                    <div class="col-md-6">
                                        <label>Nama Perusahaan</label>
                                        <input type="text" name="company_name" value="{{isset($data) ? $data->company_name : null}}" class="form-control">
                                    </div>
                                    @error('company_name')
                                    <span class="form-text text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Kewarganegaraan</label>
                                        <input type="text" name="nationallity" value="{{isset($data) ? $data->nationallity : null}}" class="form-control">
                                    </div>
                                    @error('nationallity')
                                    <span class="form-text text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror

                                    <div class="col-md-6">
                                        <label>Kata Sandi</label>
                                        <input type="password" name="password" class="form-control" id="" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" id="save" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /account settings -->
        </div>
        <!-- /right content -->

    </div>
    <!-- /inner container -->

</div>
@endsection

@push('javascript')
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
@if(isset($data))
{!! JsValidator::formRequest('App\Http\Requests\Customer\CustomerUpdateRequest') !!}
@else
{!! JsValidator::formRequest('App\Http\Requests\Customer\CustomerRequest') !!}
@endif
<script>
    $('#save').on("click",function(){
    let btn = $(this);
    let form = $('#form-profil');
    if(form.valid()) {
        $.ajax({
            url: "{{isset($data) ? route('customer.profile-update',$data->id) : route('customer.store')}}",
            method: "{{isset($data) ? 'PUT' : 'POST'}}",
            data: $('#form-profil').serialize(),
            dataType: 'JSON',
            beforeSend: function(){
                btn.html('Please wait').prop('disabled',true);
            },
            success: function(response){
                swalInit.fire({
                    title: "Success!",
                    text: response.message,
                    type: 'success',
                    buttonStyling: false,
                    confirmButtonClass: 'btn btn-primary btn-lg',
                }).then(function() {
                    window.location.href = "{{route('customer.profil')}}";
                })
            },
            error: function(response){
                if(response.status == 500){
                    console.log(response)
                    swalInit.fire("Error", response.responseJSON.message,'error');
                }
                if(response.status == 422){
                    var error = response.responseJSON.errors;

                }
                btn.html('Submit').prop('disabled',false);
            }
        });
    }
});
</script>
@endpush
