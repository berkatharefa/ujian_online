<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Start;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use app\TpSoal;
use app\TrSelect;

class StartController extends Controller
{
	public function index(){
		$nmr = 1;
		$data = DB::table('TpSoal')->where('TpSoal.nomor', $nmr)
		->join('TrSelect', 'TpSoal.nomor', '=', 'TrSelect.nomor')
		->get();
		return view('ujian.ujian', compact('data'));
	}
	public function lanjutkan($nmr){
		$nmr = Crypt::decrypt($nmr);
		$nmr = intval($nmr);
		$nmr += 1;
		$end = DB::table('TpSoal')->max('nomor');
		if($end != $nmr){
			$data = DB::table('TpSoal')
			->where('TpSoal.nomor', $nmr)
			->join('TrSelect', 'TpSoal.nomor', '=', 'TrSelect.nomor')
			->get();
			return view('ujian.ujian', compact('data'));
		} else{
			$data = DB::table('TpSoal')
			->where('TpSoal.nomor', $nmr)
			->join('TrSelect', 'TpSoal.nomor', '=', 'TrSelect.nomor')
			->get();
			return view('ujian.ujian_akhir', compact('data'));
		}
	}
	public function kembali($nmr){
		$nmr = Crypt::decrypt($nmr);
		$nmr = intval($nmr);
		$nmr -= 1;
		$data = DB::table('TpSoal')->where('TpSoal.nomor', $nmr)
		->join('TrSelect', 'TpSoal.nomor', '=', 'TrSelect.nomor')
		->get();
		return view('ujian.ujian', compact('data'));
	}
	
}
