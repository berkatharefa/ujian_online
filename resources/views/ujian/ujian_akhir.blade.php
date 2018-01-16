@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		@foreach ($data as $datas)
		{{$datas->nomor}}. {{$datas->soal}}
		<form style="margin-top: 20px;" method="post" class="bagian">
			<label><input type="radio" name="1"style="margin-right: 10px;" value="a"> {{$datas->A}}</label>
			<br>
			<label><input type="radio" name="1"style="margin-right: 10px;" value="b"> {{$datas->B}}</label>
			<br>
			<label><input type="radio" name="1"style="margin-right: 10px;" value="c"> {{$datas->C}}</label>
			<br>
			<label><input type="radio" name="1"style="margin-right: 10px;" value="d"> {{$datas->D}}</label>
			<br>
			<label><input type="radio" name="1"style="margin-right: 10px;" value="e"> {{$datas->E}}</label>
			<br>
		</form>
		<div  style="margin-top: 20px;">
			<?php
				if($datas->nomor > 1) {?>
					<a href="{{'../kembali/'.Crypt::encrypt($datas->nomor).''}}" class="btn btn-danger">Kembali</a>
			<?php }?>
			<a href="{{'../list'}}" class="btn btn-success jawaban">Selesai</a>
			<label class="checkbox-inline" style="margin-left: 20px;"><input class="mengerti" type="checkbox">Ragu-ragu</label>
		</div>
	</div>
</div>
@endforeach
@endsection
 