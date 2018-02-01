<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pelanggan;
use \App\Penggunaan;
use \App\Tarif;

class PelangganController extends Controller
{
    public function index(){
    	$pel = Pelanggan::paginate(10);
    	return view('pelanggan.index')->with('pel',$pel);
    }
    public function add(){
    	$gettarif = Tarif::all();
    	return view('pelanggan.add')->with('tarif',$gettarif);
    }
    public function save(Request $r){
    	$pel = new Pelanggan;
    	$pel->nometer = $r->input('nometer');
    	$pel->nama = $r->input('nama');
    	$pel->alamat = $r->input('alamat');
    	$pel->kodetarif = $r->input('kodetarif');
    	$pel->save();
    	return redirect(url('pelanggan'));
    }
    public function edit($id){
        $pel = Pelanggan::find($id);
        $tarif = Tarif::get();
        return view('pelanggan.edit')->with('pel',$pel)->with('tarif',$tarif);
    }
    public function update(Request $r){
    	$pel = Pelanggan::find($r->input('id'));
    	$pel->nometer = $r->input('nometer');
    	$pel->nama = $r->input('nama');
    	$pel->alamat = $r->input('alamat');
    	$pel->kodetarif = $r->input('kodetarif');
    	$pel->save();
    	return redirect(url('pelanggan'));
    }
    public function delete($id){
    	$pel = Pelanggan::find($id);
    	$pel->delete();
    	return redirect(url('pelanggan'));
    }
}
