@extends('layouts.app')
@section('title')
Hasil dari pencarian 
@endsection
@section('content')
<div class="container">
<div class="row">
  <h1>Selamat Datang , {{$pelanggan->nama}}</h1>
<br>
  <h3>Profile</h3>
  <table class="table">
  <thread>
  <tr style="text-align: center;">
  	<th>Nama Pelanggan</th>
    <th>No Meter</th>
  	<th>Alamat</th>
  	<th>KodeTarif</th>
      	</tr>
  </thread>
  <tbody>
  <tr>
  	<td>{{$pelanggan->nama}}</td>
    <td>{{$pelanggan->nometer}}</td>
  	<td>{{$pelanggan->alamat}}</td>
  	<td>{{$pelanggan->kodetarif}}</td>

  	</tr>
  </tbody>
  </table>
  <h3>Tipe Tarif</h3>
    <table class="table">
  <thread>
  <tr style="text-align: center;">
    <th>Kode</th>
    <th>Daya</th>
    <th>Tarif per-kwh</th>
        </tr>
  </thread>
  <tbody>
  <tr>
    <td>{{$tarif->kodetarif}}</td>
    <td>{{$tarif->daya}}</td>
    <td>{{$tarif->tarifperkwh}}</td>
    </tr>
  </tbody>
  </table>

  <h3>Tagihan</h3>
    <table class="table">
  <thread>
  <tr style="text-align: center;">
    <th>Bulan</th>
    <th>Tahun</th>
    <th>Jumlah Meter</th>
    <th>Status</th>
        </tr>
  </thread>
  <tbody>
    @foreach($tagihan as $r)
  <tr>
    <td>{{$r->bulan}}</td>
    <td>{{$r->tahun}}</td>
    <td>{{$r->jumlahmeter}}</td>
    <td>@if($r->status==2)LUNAS @else BELUM LUNAS @endif</td>
    </tr>
    @endforeach
  </tbody>
  </table>

  <h3>Pembayaran</h3>
    <table class="table">
  <thread>
  <tr style="text-align: center;">
    <th>Tanggal</th>
    <th>Bulan Bayar</th>
    <th>Biaya Admin</th>
        </tr>
  </thread>
  <tbody>
    @foreach($pembayaran as $r)
  <tr>
    <td>{{$r->tanggal}}</td>
    <td>{{$r->bulanbayar}}</td>
    <td>{{$r->biayaadmin}}</td>
    </tr>
    @endforeach
  </tbody>
  </table>
</div>
</div>
@endsection