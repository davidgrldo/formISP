@extends('layouts.master')
@section('title', 'Pengajuan')
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
<a href="{{route('pengajuan.create')}}" class="btn btn-md btn-primary">
    <i class="icon-plus-circle2 mr-2"></i>
    <span>Tambah Pengajuan</span>
</a>
@endslot
@slot('breadcumbs')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> / Pages / Pengajuan</h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
@endslot
@slot('breadcumbs2')
<a href="{{url('/pages/dashboard')}}" class="breadcrumb-item">Home</a>
<a href="{{route('pengajuan.index')}}" class="breadcrumb-item">Pages</a>
<span class="breadcrumb-item active">Pengajuan</span>
@endslot
@endcomponent
<div class="content">
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title"></h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>
        {{-- <div class="table-responsive"> --}}
        <table class="table table-hover table-bordered table-xxs datatable-select-checkbox" id="data-table"
            data-url="{{route('pengajuan.index')}}">
            <thead>
                <tr>
                    <th><input type="checkbox" class="styled" id="select-all"></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>No. KTP</th>
                    <th>No. NPWP</th>
                    <th>Address</th>
                    <th>Brand Name</th>
                    <th>Type</th>
                    <th>Status</th>
                    {{-- <th class="text-center">Active</th> --}}
                </tr>
            </thead>
        </table>
        {{-- </div> --}}
    </div>
</div>
@endsection

@push('javascript')
<script>
    var table = $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            order: [1 , 'desc'],
            ajax: {
            url: '{{route('pengajuan.data')}}',
            data: function (d) {
                d.datefrom = $('input[name=datefrom]').val();
            },
            method: 'GET'
        },
            columnDefs: [{
                targets: 0,
                createdCell: function(td, cellData) {
                    if (cellData != 0 ){
                        $(td).addClass('select-checkbox')
                    }
                }
            }],
            columns: [
                { data: 'id', name: 'id', width: '50px', orderable: false, render: function() { return ''} },
                { data: 'id', name: 'id', width: '30px' , class: "text-center", searchable: false },
                { data: 'name', name: 'name' },
                { data: 'no_ktp', name: 'no_ktp' },
                { data: 'no_npwp', name: 'no_npwp' },
                { data: 'address', name: 'address' },
                { data: 'brand_name', name: 'brand_name' },
                { data: 'type', name: 'type' },
                { data: 'status', name: 'status' },
                // { data: 'deleted_at', name: 'deleted_at', width: '30px', class: 'text-center', searchable: false },
            ]
        });
</script>
<script type="text/javascript" src="/custom/custom.js"></script>
@endpush
