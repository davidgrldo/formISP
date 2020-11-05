@extends('layouts.master')
@section('title', 'Customer Form')

@section('content')
@component('layouts.component.header')
@slot('tools')

@endslot
@slot('breadcumbs')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> / Customer /
    {{isset($data) ? 'Edit Customer' : 'Create Customer'}}</h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
@endslot
@slot('breadcumbs2')
<a href="{{url('/pages/dashboard')}}" class="breadcrumb-item"> Home</a>
<a href="{{route('customer.index')}}" class="breadcrumb-item">Customer</a>
<span class="breadcrumb-item active">{{isset($data) ? 'Edit Customer' : 'Create Customer'}}</span>
@endslot
@endcomponent
<!-- Main content -->
<div class="content">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">{{isset($data) ? 'Edit Customer' : 'Add Customer'}}</h5>
                </div>
                <div class="card-body">
                    <form id="form-customer" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" id=""
                                value="{{isset($data) ? $data->name : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" id=""
                                value="{{isset($data) ? $data->email : null}}">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" id="" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" value="">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <button type="button" id="save" class="btn btn-md btn-primary pull-right">Submit</button>
                        <a href="{{route('customer.index')}}" class="btn btn-md btn-danger">Back</a>
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
{!! JsValidator::formRequest('App\Http\Requests\Customer\CustomerUpdateRequest') !!}
@else
{!! JsValidator::formRequest('App\Http\Requests\Customer\CustomerRequest') !!}
@endif
<script>
    $('#save').on("click",function(){
    let btn = $(this);
    let form = $('#form-customer');
    if(form.valid()) {
        $.ajax({
            url: "{{isset($data) ? route('customer.update',$data->id) : route('customer.store')}}",
            method: "{{isset($data) ? 'PATCH' : 'POST'}}",
            data: $('#form-customer').serialize(),
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
                    window.location.href = "{{route('customer.index')}}";
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
