@extends('layouts.app')
@section('content')
<div class="container">
	<div class=."row">
		<h3>Daftar Soal</h3>
		@foreach($data as $datas)
		<label class="checkbox-inline"><input type="checkbox" name="{{$datas->nomor}}" value="{{$datas->nomor}}"> {{$datas->nomor}}. {{$datas->soal}}</label><br>
		@endforeach
		<a href="" class="btn btn-danger" style="margin-top:20px;">Cek Kembali</a>
		<a href="" class="btn btn-success" style="margin-top:20px;">Hitung Nilai</a>
	</div>
</div>
@endsection
 