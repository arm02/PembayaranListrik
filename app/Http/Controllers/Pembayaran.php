<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pembayaran extends Controller
{
	public function index(){
		$pembayaran  = \App\Pembayaran::all();
		return view('pembayaran.index')->with('pembayaran', $pembayaran);
	}

	public function add(){
		return view('pembayaran.add');
	}
	public function save(Request $r)
	{
		$pembayaran =  new \App\Pembayaran;
		$pembayaran->id_pelanggan = $r->id_pelanggan;
		$pembayaran->tanggal = $r->tanggal;
		$pembayaran->bulanbayar = $r->bulanbayar;
		$pembayaran->biayaadmin = $r->biayaadmin;
		$pembayaran->save();

		return redirect(url('pembayaran'));
	}
}