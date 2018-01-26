@extends('layouts.navbar')

@section('title')
Tagihan Add
@endsection

@section('content')
<div class="container">
<div class="row">
<form method="POST" action="{{url('tagihan/save')}}">
	
	<div class="form-group">
      <label for="nama_barang">Nama Pelanggan</label>
     <select class="form-control" name="id_pelanggan">
      <option selected>Pilih Satu !!!</option>
      @foreach($pelanggan as $r)
       <option value="{{$r->id}}">{{$r->nama}}</option>
       @endforeach
     </select>
    </div>
    <div class="form-group">
      <label for="bulan">Bulan</label>
       <select class="form-control" name="bulan" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Bulan Bayar')"
      oninput="setCustomValidity('')">
      <option value="Januari">Januari</option>
      <option value="Februari">Februari</option>
      <option value="Maret">Maret</option>
      <option value="April">April</option>
      <option value="Mei">Mei</option>
      <option value="Juni">Juni</option>
      <option value="Juli">Juli</option>
      <option value="Agustus">Agustus</option>
      <option value="September">September</option>
      <option value="Oktober">Oktober</option>
      <option value="November">November</option>
      <option value="Desember">Desember</option>
    </select>
    </div>
    <div class="form-group">
      <label for="tahun">Tahun</label>
     <input id="tahun" type="text" 
    class="form-control" name="tahun" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Tahun')"
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="tahun">Status</label>
      <select class="form-control" name="status">
        <option selected>Pilih Satu !!!</option>
        <option value="2">LUNAS</option>
        <option value="1">BELUM LUNAS</option>
      </select>
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <center>
    <button style="width: 200px;" type="submit" class="btn btn-success pull-right">Masukan Data</button>
    <br>
    <br>
    </center>
</form>
<br>
 </div>
 </div>



@endsection