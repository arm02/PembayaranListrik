<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tagihan;
use \App\Pelanggan;
use \App\Penggunaan;

class TagihanPLO extends Controller
{
    public function index(){
    	$tagihan = Tagihan::all();
    	return view('tagihan.index')->with('tagihan',$tagihan);
    }

    public function add(){
    	$pelanggan = Pelanggan::all();
    	return view('tagihan.add')->with('pelanggan',$pelanggan);
    }

    public function edit($id){
    	$tagihan = Tagihan::find($id);
    	return view('tagian.edit')->with('tagihan',$tagihan);
    }

    public function save(Request $r){
    	$tagihan = new Tagihan;
    	$penggunaan1 = Penggunaan::where('id_pelanggan',$r->input('id_pelanggan'))->value('meterawal');
    	$penggunaan2 = Penggunaan::where('id_pelanggan',$r->input('id_pelanggan'))->value('meterakhir');
    	$hasil = $penggunaan1 - $penggunaan2;
    	$tagihan->id_pelanggan = $r->input('id_pelanggan');
    	$tagihan->bulan = $r->input('bulan');
    	$tagihan->tahun = $r->input('tahun');
    	$tagihan->jumlahmeter = $hasil;
    	$tagihan->status = $r->input('status');
    	$tagihan->save();
    	return redirect(url('tagihan'));
    }

    public function update(Request $r){
    	$tagihan = Tagihan::find($r->input('id'));
    	$pelanggan1 = Pelanggan::whereIdPelanggan($r->input('id_pelanggan'))->value('meterawal');
    	$pelanggan2 = Pelanggan::whereIdPelanggan($r->input('id_pelanggan'))->value('meterakhir');
    	$tagihan->id_pelanggan = $r->input('id_pelanggan');
    	$tagihan->bulan = $r->input('bulan');
    	$tagihan->tahun = $r->input('tahun');
    	$tagihan->jumlahmeter = $pelanggan1 - $pelanggan2;
    	$tagihan->status = $r->input('status');
    	$tagihan->save();
    	return redirect(url('tagihan'));
    }

    public function delete($id){
    	$tagihan = Tagihan::find($id);
    	$tagihan->delete();
    	return redirect(url('tagihan'));
    }

     public function search(Request $r)
    {
      $query = $r->input('query');
      $tagihan = Tagihan::where('id_pelanggan','like','%'.$query.'%')->orderBy('id','asc')->paginate(20);
      return view('tagihan.index')->with('tagihan', $tagihan)->with('query', $query);
    }
}
