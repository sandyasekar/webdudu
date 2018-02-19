<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
    public function index() {
    	$pesans = DB::table('pesan')->orderBy('id','desc')->get();
    	return view("pages.index")->with('pesans',$pesans);
    }

    public function kirimPesan(Request $request) {
    	$dari = $request -> input('dari');
    	$untuk = $request -> input('untuk');
    	$pesan = $request -> input('pesan');

    	DB::table('pesan')->insert(['dari'=> $dari, 'untuk'=>$untuk,'pesan'=>$pesan]);
    	return redirect("/");
    }
}
