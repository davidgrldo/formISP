<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <br><br><br>
    <p style="text-align: center; font-size:24px;"><strong>PT IKHLAS CIPTA TEKNOLOGI</strong></p>
    <p style="text-align: center; font-size:24px;"><strong>NOMOR
            {{ $data->no_pendaftaran }}/CT/{{ $data->created_at->format('d/m/Y') }}</strong></p>
    <p style="text-align: center; font-size:24px;"><strong>TENTANG</strong></p>
    <p style="text-align: center; font-size:24px;"><strong>KERJASAMA KANTOR LAYANAN PT IKHLAS CIPTA TEKNOLOGI</strong>
    </p>
    <div class="section" style="font-size: 18px;">
        &nbsp;
        <p>Menimbang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a. Bahwa
            {{ $data->customer->name }} telah
            memahami pasal demi pasal perjanjian kerja sama</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp;
            &nbsp; &nbsp; Kantor layanan PT Ikhlas Cipta Teknologi.</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; b.
            Bahwa {{ $data->customer->name }} telah sanggup untuk memenuhi ketentuan yang telah</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp;
            &nbsp; &nbsp; diterapkan dalam pasal Perjanjian Kerjasama PT Ikhlas Cipta Teknologi</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; c.
            Bahwa berdasarkan pertimbangan di atas maka PT iIkhlas Cipta Teknologi</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp;
            &nbsp; &nbsp; menetapkan {{ $data->customer->name }} sebagai penanggung jawab layanan penjualan</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp;
            &nbsp; &nbsp; jasa internet yang mana segala peraturan mengenai penjualan harus mengikuti</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp;
            &nbsp; &nbsp; peraturan yang dikeluarkan oleh Kementerian Komunikasi dan Informatika</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp;
            &nbsp; &nbsp; Republik Indonesia.</p>
        <p style="text-align: center;"><strong>Memutuskan</strong></p>
        <p>KESATU&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Memberikan perlindungan
            mengenai
            perizinan penjualan jasa internet kepada {{ $data->customer->name }}</p>
        <p>KEDUA&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :
            {{ $data->customer->name }} wajib memenuhi</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp;1. Melaporkan jumlah User Client sebagai bahan landasan pelaporan BHP USO PT
            Ikhlas Cipta
            Teknologi</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp;2. Menjaga nama baik dari PT Ikhlas Cipta Teknologi</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp;3. Mengikuti segala peraturan yang dikeluarkan oleh Kementerian Komunikasi dan
            Informatika Republik Indonesia</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;baik dari pengguna frekuensi ataupun hal yang lainnya.</p>
        <p>KETIGA&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Izin kerja sama ini hanya
            berlaku
            kepada {{ $data->customer->name }} dan tidak dapat dioper alihkan kepada siapapun.</p>
        <p>&nbsp;</p>
        <table style="width: 1033px;">
            <tbody>
                <tr>
                    <td style="width: 492px;">
                        <p style="text-align: center;">&nbsp;</p>
                        <p style="text-align: center;">&nbsp;</p>
                        <p style="text-align: center;">
                            <img
                                src="data:image/png;base64, {!! base64_encode(QrCode::errorCorrection('H')->format('png')->merge('/public/images/logo1.png', .3)->size(150)->generate(url('/status/'.$data->token))) !!} ">
                        </p>
                    </td>
                    <td style="width: 525px; text-align: center;">
                        <p>Di tetapkan di Jakarta</p>
                        <p>Pada tanggal {{ $data->created_at->format('d/m/Y') }}</p>
                        <p>PT IKHLAS CIPTA TEKNOLOGI</p>
                        <img src="{{ url('files/ttd.png') }}" width="120" height="120" style="object-fit: cover;">
                        <p>DENNY JOHANNURDIN, S.Kom</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p>&nbsp;</p>
    </div>
</body>

</html>
