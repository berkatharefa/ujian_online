@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        Selamat datang di ujian online seleksi Pegawai Negeri Sipil di Nias Utara
        <br>
        Peraturan Selama Ujian: 
        <ul>
            <li>Membawa Kartu Ujian, pulpen dan buram</li>
            <li>Tidak boleh membawa semua alat komunikasi (jika ditemukan maka peserta akan didiskualifikasi)</li>
            <li>Tidak boleh kerjasama (jika ditemukan maka peserta akan didiskualifikasi)</li>
            <li>Tidak boleh membawa teman atau pembantu</li>
            <li>Displin dan tidak boleh ribut</li>
            <li>Jika ada kerusakan komputer harap di konfirmasi kepada pengawas dan jangan memperbaikinya sendiri (jika komputer rusak karena anda, maka anda akan didiskualifikasi serta memperbaiki kembali komputer tersebut)</li>
            <li>Peserta harus meninggalkan ruangan ujian selama 2 menit setelah selesai mengerjakan</li>
            <li>Soal yang tidak jelas konfirmasi kepada pengawas</li>
            <li>Ujian berlangsung selama 90 Menit, semoga anda beruntung.</li>
        </ul>
    Apakah anda sudah mengerti dengan peraturan?  <label class="checkbox-inline"><input class="mengerti" type="checkbox" value="">Mengerti</label>
    <br>
    <p style="color: red;">
    **Ketika anda memilih mengerti dengan peraturan, maka secara otomatis anda dinyatakan menyetujui semua peraturan yang ada dan anda bisa menekan tombol Mulai jika anda ingin memulai.
    </p>
    <div style="text-align: center;"><a class="btn btn-success mulai" id="mulai" style="align-self: center; width: 120px; height: 40px" href="{{'/start'}}">Mulai</a></div>
    </div>
</div>
@endsection
