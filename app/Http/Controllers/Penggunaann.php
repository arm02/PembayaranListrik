<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penggunaan;
use App\Pelanggan;

class Penggunaann extends Controller
{
   public function index(){
		$penggunaan  = Penggunaan::all();
		$pelanggan  = Pelanggan::all();
		return view('penggunaan.index', ['penggunaan' => $penggunaan, 'pelanggan' => $pelanggan]);
	}
	public function add()
	{
		$pelanggan = Pelanggan::all();
		return view('penggunaan.add')->with('pelanggan',$pelanggan);
	}
	public function save(Request $r)
	{
		$penggunaan =  new Penggunaan;
		$penggunaan->id_pelanggan = $r->input('id_pelanggan');
		$penggunaan->bulan = $r->input('bulan');
		$penggunaan->tahun = $r->input('tahun');
		$penggunaan->meterawal = $r->input('meterawal');
		$penggunaan->meterakhir = $r->input('meterakhir');
		$penggunaan->save();

		return redirect(url('penggunaan'));
	}

	public function edit($id)
	{
		$penggunaan = Penggunaan::find($id);

    	return view('penggunaan.edit')->with('pengunaan',$penggunaan);
	}

	public function update(Request $r)
	{
		$penggunaan = Penggunaan::find($r->input('id'));
		$penggunaan->bulan = $r->bulan;
		$penggunaan->tahun = $r->tahun;
		$penggunaan->meterawal = $r->meterawal;
		$penggunaan->meterakhir = $r->meterakhir;
    	$penggunaan->save();
    	return redirect(url('penggunaan'));
	}

	public function delete($id)
	{
		$penggunaan = Penggunaan::find($id);
    	$penggunaan->delete();
    	return redirect(url('penggunaan'));
	}
}
