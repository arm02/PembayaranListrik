<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pelanggan;
use \App\Pengunaan;
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
    public function save(request $r){
    	$pel = new Pelanggan;
    	$pel->nometer = $r->input('nometer');
    	$pel->nama = $r->input('nama');
    	$pel->alamat = $r->input('alamat');
    	$pel->kodetarif = $r->input('kodetarif');
    	$pel->save();
    	return redirect(url('pelanggan'));
    }
    public function edit($id){
    	$peng = Penggunaan::get();
    	$tarif = Tarif::get();
    	$tarif2 = Tarif::find($id);
    	return view('pelanggan.edit')->with('peng',$peng)->with('tarif',$tarif);
    }
    public function update(request $r){
    	$pel = Pelanggan::find($r->input('id'));
    	$pel->nometer = $r->input('nometer');
    	$pel->nama = $r->input('nama');
    	$pel->alamat = $r->input('alamat');
    	$pel->kodetarif = $r->input('kodetarif');
    	$pel->save();
    	return redirect(url('pelanggan'));
    }
    public function delete(){
    	$pel = Pelanggan::find($id);
    	$pel->delete();
    	return redirect(url('pelanggan'));
    }
}
