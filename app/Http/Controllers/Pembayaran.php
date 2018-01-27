<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pelanggan;
use \App\Tarif;
use \App\Tagihan;

class Pembayaran extends Controller
{
	public function index(){
		$pembayaran  = \App\Pembayaran::all();
		return view('pembayaran.index')->with('pembayaran', $pembayaran);
	}

	public function add($id){
		$pelanggan = Pelanggan::find($id);
		$getkodetarif = Pelanggan::whereId($id)->value('kodetarif');
		$gettarif = Tarif::whereKodetarif($getkodetarif)->value('tarifperkwh');
		$getjumlahmeter = Tagihan::whereIdPelanggan($id)->value('jumlahmeter');
		$hasil = $getjumlahmeter * $gettarif;
		return view('pembayaran.add')->with('id_pelanggan',$pelanggan)->with('tarif',$hasil);


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

	public function delete($id){
		$bayar = \App\Pembayaran::find($id);
		$bayar->delete();
		return redirect(url('pembayaran'));
	}
}