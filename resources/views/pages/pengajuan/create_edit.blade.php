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
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title">Surat Perjanjian Kerjasama</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div>
                    <form class="wizard-form steps-basic wizard clearfix" action="#" data-fouc="" role="application"
                        id="steps-uid-0">
                        <div class="steps clearfix">
                            <ul role="tablist">
                                <li role="tab" class="first done" aria-disabled="false" aria-selected="false"><a
                                        id="first" href="#first" aria-controls="first" class=""><span
                                            class="number">1</span>Page 1</a></li>
                                <li role="tab" class="current" aria-disabled="false" aria-selected="false"><a
                                        id="second" href="#second" aria-controls="second" class=""><span
                                            class="number">2</span> Page 2</a></li>
                                <li role="tab" class="current" aria-disabled="false" aria-selected="false"><a id="third"
                                        href="#third" aria-controls="third" class=""><span class="number">3</span>Page
                                        3</a></li>
                            </ul>
                        </div>
                        <div class="content clearfix">
                            <fieldset id="first" role="tabpanel" aria-labelledby="first" class="body current"
                                aria-hidden="false" style="">
                                <p class="text-center">
                                    SURAT PERJANJIAN KERJASAMA KANTOR LAYANAN PELANGGAN
                                    <br>PT IKHLAS CIPTA TEKNOLOGI<br>
                                    INTERNET SERVICE PROVIDER<br>
                                    DENGAN<br>
                                    <br>(No .001/PKS.ICT/X1/2020)<br>
                                </p>
                                <p>
                                    Pada hari ini [HARI] tanggal [TANGGAL] bulan [BULAN] tahun [TAHUN] bertempat di
                                    [TEMPAT]
                                    <br>Yang bertanda tangan dibawah ini :
                                    <br>&nbsp; Nama &nbsp; : [NAMA]
                                    <br>&nbsp; No KTP : [NO_KTP]
                                    <br>&nbsp; Alamat : [ALAMAT]
                                    <br>&nbsp; Jabatan : [JABATAN]
                                    <br>&nbsp; Kewarganegaraan : [KEWARGANEGARAAN]<br>
                                    <br>Dalam hal ini bertindak untuk dan atas nama PT Ikhlas Cipta Teknologi ISP,
                                    berkedudukan
                                    di Jakarta selanjutnya di
                                    sebutkan sebagai <strong>PIHAK PERTAMA</strong>
                                    <br>&nbsp; Nama : [NAMA_SECONDARY]
                                    <br>&nbsp; No KTP : [NO_KTP_2]
                                    <br>&nbsp; Alamat : [ALAMAT_2]
                                    <br>&nbsp; Jabatan : [JABATAN_2]
                                    <br>&nbsp; Kewarganegaraan : [KEWARGANEGARAAN_2]<br>
                                    <br>Dalam hal ini bertindak untuk dan atas nama [NAMA], berkedudukan di
                                    [TEMPAT]<br>
                                    <br>Selanjutnya di sebutkan sebagai <strong>PIHAK KEDUA</strong><br>
                                    <br>Bahwa PIHAK PERTAMA adalah suatu perusahaan swasta yang
                                    bergerak dalam bidang usaha Jasa Internet Service Provider
                                    dengan NIB 0220009452023 kode KBLI 61921 serta telah mendapatkan Surat
                                    Keterangan
                                    Laik
                                    Operasi dengan Nomor :
                                    545/TEL.02.02/2020 sehingga mempunya landasan untuk dapat menawarkan Jasa
                                    tersebut
                                    diatas dalam ruang lingkup Nasional.<br>
                                    <br>Bahwa untuk dapat memasarkan Produk/Jasa layanan kedua belah pihak perlu
                                    mengadakan
                                    kerjasama promosi dan penjualan di
                                    wilayah layanan [LAYANAN] yang di tuangkan kedalam suatu perjanjian kerjasama
                                    layanan,
                                    dengan syarat-syarat yang akan di
                                    tuangkan pada masing masing pasal perjanjian kerjasama sebagai berikut :
                                </p>
                            </fieldset>

                            <fieldset id="second" role="tabpanel" aria-labelledby="second" class="body current"
                                aria-hidden="false" style="">
                                <p class="text-center">
                                    <strong>PASAL I</strong><br>
                                    <strong>DEFINSI</strong>
                                </p>
                                <p>
                                    1. PKS adalah Perjanjian Kerjasama antara PIHALK PERTAMA dan PIHAK KEDUA dalam
                                    menjalakan dan menggunakan merk dagang/nama
                                    dagan ImediaNet atas dasar yang telah ditentukan.<br>
                                    2. Internet adalah suatu jaringan global yang saling terhubung antara satu dengan
                                    lainnya dan di atur dalam Protokol jaringan<br>
                                    3. Internet Service Provider (ISP) adalah penyelenggara akses Internet dan pelayanan
                                    aplikasi Internet ( hosting, webdesign, data center, colocation server, serta
                                    aplikasi multimedia lainnya yang memanfaatkan akses Internet).<br>
                                    4. Akses Internet adalah koneksi logika ke Internet yang menghubungkan pengguna
                                    Internet ke NOC ISP, dengan bentuk dial up atau dedicated leasedlined/ wavelane<br>
                                    5. Bandwidth adalah suatu ukuran yang menyatakan kapasitas jalur komunikasi yang
                                    dapat digunakan. NOC (Network Operation Center) adalah pusat pengelolaan jaringan
                                    untuk akses Internet.<br>
                                </p>
                                <p class="text-center">
                                    <strong>PASAL II</strong><br>
                                    <strong>RUANG LINGKUP</strong>
                                </p>
                                <p>
                                    1. Kedua belah pihak sepakat dalam mengembangkan dan memasarkan layanan Akses
                                    Internet dan Aplikasi dalam arti seluas
                                    luasnya<br>
                                    2. Perjanjian ini berlaku Ekslusif untuk wilayah sesuai wilayah layanan PIHAK
                                    KEDUA<br>
                                </p>
                                <p class="text-center">
                                    <strong>PASAL III</strong><br>
                                    <strong>HAK DAN KEWAJIBAN PIHAK PERTAMA</strong>
                                </p>
                                <p>
                                    1. Pihak Pertama berhak menerima pembayaran berdasarkan Perjanjian Kerjasama Ini<br>
                                    2. Pihak Pertama hanya akan memberikan secara ekslusif hanya kepada satu pihak yaitu
                                    PIHAK KEDUA sebagai pemegang lisensi
                                    merek ISP ImediaNet dilokasi yang telah di sepakati dan selama periode tertentu<br>
                                    3. Akan mengurus semua perizinan untuk memasarkan akses internet dengan biaya BHP di
                                    tanggung oleh pihak Kedua<br>
                                    4. Pihak Pertama berhak memutus sewaktu Perjanjian Ini apabila pihak kedua
                                    menggunakan izin penyelenggara ISP ini untuk
                                    suatu perbuatan yang melanggar ketentuan hukum di Negara Kesatuan Republik
                                    Indonesia<br>
                                    5. Pihak Pertama berkewajiban untuk membayarkan BHP ISP kepada dirjen Postel.<br>
                                </p>
                                <p class="text-center">
                                    <strong>PASAL IV</strong><br>
                                    <strong>HAK DAN KEWAJIBAN PIHAK KEDUA</strong>
                                </p>
                                <p>
                                    1. Tidak memberikan hak izin ISP ini kepada Pihak Ketiga atau memindahkan dan
                                    memperjual belikan pada pihak lain serta
                                    berhak menentukan standar harga jual sendiri tanpa harus memperoleh izin dari Pihak
                                    Pertama<br>
                                </p>
                            </fieldset>
                            <fieldset id="third" role="tabpanel" aria-labelledby="third" class="body current"
                                aria-hidden="false" style="">
                                <p>
                                    2. Pihak Kedua di perbolehkan melakukan kerjasama dengan pihak lain namun harus
                                    dengan sepengetahuan dan telah memperoleh
                                    izin dari Pihak Pertama<br>
                                    3. Selama dalam perjanjian kantor layanan pihak Kedua hanya diiizinkan untuk
                                    mendapatkan koneksi Internet hanya dari Pihak
                                    Pertama<br>
                                    4. Pihak Kedua bertanggung jawab sepenuhnya untuk mengelola operasional kantor
                                    layanan dan memasang logo atau spanduk yang
                                    akan di fasilitasi oleh Pihak Pertama di lokasi kantor layanan<br>
                                    5. Membayar biaya komitmen awal sebagai kantor layanan sebesar 4 ( empat ) juta
                                    rupiah yang akan dibayarkan 1 kali diawal
                                    setelah kontrak Perjanjian Kerjasama ini di tanda tangani<br>
                                    6. Pihak Kedua, memberikan imbalan setiap bulannya sebesar 5 % atau minimal 4 (
                                    empat ) juta rupiah setiap bulannya, dan
                                    yang akan dibayarkan Pihak Kedua selambat lambatnya tanggal 10 setiap bulannya.<br>
                                    7.wajib melaporkan jumlah penjualan yang akan menjadi acuan kepada Pihak Pertama
                                    sebagai Pelaporan BHP Internet<br>
                                    8.diwajibkan menggunakan Frekwensi Radio yang dizinkan secara detail oleh dir postel
                                    , Pihak Pertama tidak akan
                                    bertanggung jawab apabila Pihak Kedua menggunakan Frekwensi yang tidak diizinkan
                                    secara legal oleh dir postel<br>
                                    9. Membayar biaya BHP Frekuensi kontrak 3 tahun di depan setiap BTS apabila
                                    menggunakan Frekuensi yang berbayar<br>
                                    10. Membayar biaya Transportasi dan fasilitas team Support Pihak Pertama apabila
                                    pihak kedua membutuhkan maintenance Fisik
                                    lokasi<br>
                                </p>
                                <p class="text-center">
                                    <strong>PASAL V</strong><br>
                                    <strong>JANGKA WAKTU</strong>
                                </p>
                                <p>
                                    1. Masa Berlaku Kerjasama Ini adalah selama 2 (dua ) Tahun dan akan di evaluasi
                                    setiap tahunnya<br>
                                    2. Perubahan dan penyesuaian terhadap pasal pasal yang ada di dalam perjanjian ini
                                    akan di tuangkan dalam addendum
                                    perjanjian perjanjian sesuai dengan kesepakatan kedua belah pihak<br>
                                    3. Perjanjian Kerja Sama ini untuk periode selanjutnya harus di setujui dan di
                                    sepakati selambat-lambatnya 2 bulan sebelum
                                    masa perjanjian ini habis masa berlakunya<br>
                                    4. Apabila pihak kedua melanggar butir Pasal diatas maka Pihak Pertama akan
                                    memutuskan sepihak dan apabila pihak Kedua
                                    masih terdapat kewajiban yang belum di selesaikan harus segera di selesaikan<br>
                                </p>
                                <p class="text-center">
                                    <strong>PASAL VI</strong><br>
                                    <strong>SANKSI</strong>
                                </p>
                                <p>
                                    1. Jika terjadi keterlambatan dalam pembayaran melewati masa tenggang maka Pihak
                                    Pertama akan memutuskan koneksi Internet
                                    pada Pihak Kedua dan atau Pembatalan Perjanjian Kerjasama ini.<br>
                                </p>
                            </fieldset>
                        </div>


                        <div class="actions clearfix">
                            <ul role="menu" aria-label="Pagination">
                                <li class="" aria-disabled="false"><a href="#previous" class="btn btn-light"
                                        role="menuitem"><i class="icon-arrow-left13 mr-2"></i> Previous</a></li>
                                <li aria-hidden="false" aria-disabled="false" class="" style=""><a href="#next"
                                        class="btn btn-primary" role="menuitem">Next <i
                                            class="icon-arrow-right14 ml-2"></i></a></li>
                                <li aria-hidden="true" style="display: none;"><a href="#finish" class="btn btn-primary"
                                        role="menuitem">Submit form <i class="icon-arrow-right14 ml-2"></i></a></li>
                            </ul>
                        </div>
                    </form>

                    <div class="card-body">
                        <form id="form-pengajuan" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" readonly=""
                                    value="{{ auth('customer')->check() ? auth('customer')->user()->name : Auth::user()->name }}">
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
    $('#save').on("click", function () {
        let btn = $(this);
        let form = $('#form-pengajuan');
        let url = "{{ route('pengajuan.store') }}"
        let data = document.forms.namedItem('form-pengajuan');
        let formData = new FormData(data);
        let index = "{{ route('pengajuan.index') }}"
        let mode = "POST"
        if (form.valid()) {
            createWithImage(url, formData, btn, index);
        }
    });

</script>
@endpush
