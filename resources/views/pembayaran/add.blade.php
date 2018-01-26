@extends('layouts.navbar')

@section('title')
Pembayaran Add
@endsection

@section('content')
<div class="container">
  <div class="row">
    <form method="POST" action="{{url('pembayaran/save')}}">
     <div class="form-group">
      <label for="tanggal">Tanggal</label>
      <input id="tanggal" type="date" 
      class="form-control" name="tanggal" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi tanggal')"
      oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="bulanbayar">Bulan Bayar</label>
      <select class="form-control" name="bulanbayar" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Bulan Bayar')"
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
    <label for="biayaadmin">Biaya Admin</label>
    <input id="biayaadmin" type="text" 
    class="form-control" name="biayaadmin" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Biaya Admin')"
    oninput="setCustomValidity('')">
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