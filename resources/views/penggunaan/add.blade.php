@extends('layouts.navbar')

@section('title')
Penggunaan Add
@endsection

@section('content')

<div class="container">
<div class="row">
<form method="POST" action="{{url('penggunaan/save')}}">
  
  <div class="form-group">
      <label for="name">Nama Pelanggan</label>
     <select class="form-control" name="id_pelanggan" required="Harap Masukan" oninvalid=" this.setCustomValidity('Tolong Isi Nama')">
      <option selected>Pilih Satu !!</option>
      @foreach($pelanggan as $key)
      <option value="{{$key->id_pelanggan}}">{{$key->nama}}</option>
      @endforeach
     </select>
    </div>

    <div class="form-group">
      <label for="bulan">Bulan</label>
     <select class="form-control" name="bulan" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Bulan')"
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
     <input id="tahun" type="number" 
    class="form-control" name="tahun" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi tahun')"
    oninput="setCustomValidity('')">
    </div>

    <div class="form-group">
      <label for="meterawal">Meter Awal</label>
     <input id="meterawal" type="text" 
    class="form-control" name="meterawal" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Meter Awal')"
    oninput="setCustomValidity('')">
    </div>  

   <div class="form-group">
      <label for="meterakhir">Meter Akhir</label>
     <input id="meterakhir" type="text" 
    class="form-control" name="meterakhir" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Meter Akhir')"
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