<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pelanggan;
use \App\Tarif;
use \App\Tagihan;
use \App\Penggunaan;
use \App\Pembayaran;

class UserInterface extends Controller
{
     public function search(Request $r)
    {
      $query = $r->input('query');
      $pelanggan = Pelanggan::where('id','like','%'.$query.'%')->first();
      $kode_tarif = Tarif::where('kodetarif',$pelanggan->kodetarif)->first();
      $tagihan = Tagihan::where('id_pelanggan',$pelanggan->id)->get();
      $pembayaran = Pembayaran::where('id_pelanggan',$pelanggan->id)->get();
      return view('userinterface.index')->with('pelanggan', $pelanggan)->with('query', $query)->with('tarif',$kode_tarif)->with('tagihan',$tagihan)->with('pembayaran',$pembayaran);


    }
}
