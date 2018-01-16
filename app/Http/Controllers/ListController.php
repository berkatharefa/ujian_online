<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use app\TpSoal;

class ListController extends Controller
{
    public function index(){
    	$data = DB::table('TpSoal')->get();
    	return view('list.list', compact('data'));
    }
}
