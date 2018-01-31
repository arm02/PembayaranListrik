@extends('layouts.navbar')

@section('title')
Tarif Edit
@endsection

@section('content')
<div class="container">
<div class="row">
<form method="POST" action="{{url('tarif/update')}}">
	
	<div class="form-group">
      <label for="kodetarif">Kode Tarif</label>
     <input id="kodetarif" type="number" 
    class="form-control" name="kodetarif" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Kode Tarif')" value="{{$tarif->kodetarif}}" 
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="daya">Daya</label>
     <input id="daya" type="number" 
    class="form-control" name="daya" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Daya')" value="{{$tarif->daya}}"
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="tarifperkwh">Tarif per-kwh</label>
     <input id="tarifperkwh" type="text" 
    class="form-control" name="tarifperkwh" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Tarif per-kwh')" value="{{$tarif->tarifperkwh}}"
    oninput="setCustomValidity('')">
    </div>
    <input type="hidden" name="id" value="{{$tarif->id}}">
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